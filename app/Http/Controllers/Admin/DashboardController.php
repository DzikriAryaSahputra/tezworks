<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visitor;
use App\Models\ClickEvent;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $thisMonth = Carbon::now()->startOfMonth();

        // Stats
        $todayVisitors = Visitor::whereDate('created_at', $today)->count();
        $monthVisitors = Visitor::where('created_at', '>=', $thisMonth)->count();
        $totalVisitors = Visitor::count();

        // Top Pages
        $topPages = Visitor::select('page_url', \DB::raw('count(*) as total'))
            ->groupBy('page_url')
            ->orderBy('total', 'desc')
            ->take(5)
            ->get();

        // Top Clicks
        $topClicks = ClickEvent::select('element_name', \DB::raw('count(*) as total'))
            ->groupBy('element_name')
            ->orderBy('total', 'desc')
            ->take(5)
            ->get();

        return view('admin.dashboard', compact('todayVisitors', 'monthVisitors', 'totalVisitors', 'topPages', 'topClicks'));
    }
}
