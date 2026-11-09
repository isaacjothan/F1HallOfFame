<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $featuredChampions = Driver::query()
            ->withCount('championships')
            ->withMax('championships', 'season')
            ->with(['championships' => function (HasMany $query): void {
                $query->orderByDesc('season');
            }])
            ->orderByDesc('championships_max_season')
            ->limit(6)
            ->get();

        return view('index', ['featuredChampions' => $featuredChampions]);
    }
}
