<?php

namespace App\Http\Controllers;

use App\Models\Championship;
use App\Models\Driver;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class ChampionController extends Controller
{
    public function index(Request $request): View
    {
        $years = Championship::query()
            ->distinct()
            ->orderByDesc('season')
            ->pluck('season');

        $decades = $years
            ->map(fn (int $year): int => intdiv($year, 10) * 10)
            ->unique()
            ->sortDesc()
            ->values();

        $nationalities = Driver::query()
            ->whereNotNull('nationality')
            ->distinct()
            ->orderBy('nationality')
            ->pluck('nationality');

        $filters = Validator::make($request->query(), [
            'q' => ['nullable', 'string', 'max:80'],
            'decade' => ['nullable', 'integer', Rule::in($decades->all())],
            'nationality' => ['nullable', 'string', Rule::in($nationalities->all())],
        ])->validate();

        $search = trim($filters['q'] ?? '');
        $selectedDecade = isset($filters['decade']) ? (int) $filters['decade'] : null;
        $selectedNationality = $filters['nationality'] ?? null;

        $champions = Driver::query()
            ->withCount('championships')
            ->withMax('championships', 'season')
            ->with(['championships' => function (HasMany $query): void {
                $query->orderByDesc('season');
            }])
            ->when($search !== '', fn (Builder $query): Builder => $query->where('name', 'like', '%'.$search.'%'))
            ->when($selectedDecade !== null, function (Builder $query) use ($selectedDecade): void {
                $query->whereHas('championships', fn (Builder $seasons): Builder => $seasons
                    ->whereBetween('season', [$selectedDecade, $selectedDecade + 9]));
            })
            ->when($selectedNationality !== null, fn (Builder $query): Builder => $query->where('nationality', $selectedNationality))
            ->orderByDesc('championships_max_season')
            ->orderBy('name')
            ->paginate(12)
            ->withQueryString();

        return view('champions.index', [
            'champions' => $champions,
            'decades' => $decades,
            'nationalities' => $nationalities,
            'search' => $search,
            'selectedDecade' => $selectedDecade,
            'selectedNationality' => $selectedNationality,
            'seasonCount' => $years->count(),
        ]);
    }

    public function show(Driver $driver): View
    {
        $driver->load([
            'championships' => function (HasMany $query): void {
                $query->orderByDesc('season');
            },
        ])->loadCount('championships');

        return view('champions.show', ['driver' => $driver]);
    }
}
