<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    public function home()
    {
        /* --------------------------------------------------------------------------- */
        /* --------------------- Data for the first 4 bar-charts --------------------- */
        /* --------------------------------------------------------------------------- */

        // Get the number of orders, revenue, average value and total users
//        $ordersCount = Order::count();
//        $totalRevenue = Order::where('status', 4)->sum('grand_total');
//
//        $averageValue = Order::avg('grand_total');
//        $usersCount = User::whereDoesntHave('admin')->count();
//
//        // Get the current week and last week start and end dates
//        $currentWeekStart = Carbon::now()->startOfWeek();
//        $currentWeekEnd = Carbon::now()->endOfWeek();
//        $lastWeekStart = Carbon::now()->subWeek()->startOfWeek();
//        $lastWeekEnd = Carbon::now()->subWeek()->endOfWeek();
//
//        // Get the number of orders this week and last week
//        $currentWeekOrders = Order::whereBetween('created_at', [$currentWeekStart, $currentWeekEnd])->count();
//        $lastWeekOrders = Order::whereBetween('created_at', [$lastWeekStart, $lastWeekEnd])->count();
//
//        // Calculate the increase or decrease rate of orders compared to last week
//        $ordersRate = ($lastWeekOrders != 0) ? (($currentWeekOrders - $lastWeekOrders) / $lastWeekOrders) * 100 : 0;
//
//        // Get the revenue this week and last week
//        $currentWeekRevenue = Order::where('status', 4)->whereBetween('created_at', [$currentWeekStart, $currentWeekEnd])->sum('grand_total');
//        $lastWeekRevenue = Order::where('status', 4)->whereBetween('created_at', [$lastWeekStart, $lastWeekEnd])->sum('grand_total');
//
//        // Calculate the increase or decrease rate of revenue compared to last week
//        $revenueRate = ($lastWeekRevenue != 0) ? (($currentWeekRevenue - $lastWeekRevenue) / $lastWeekRevenue) * 100 : 0;
//
//        // Get the average order value this week and last week
//        $currentWeekAvgOrderValue = Order::whereBetween('created_at', [$currentWeekStart, $currentWeekEnd])->avg('grand_total');
//        $lastWeekAvgOrderValue = Order::whereBetween('created_at', [$lastWeekStart, $lastWeekEnd])->avg('grand_total');
//
//        // Calculate the increase or decrease rate of average order value compared to last week
//        $avgOrderValueRate = ($lastWeekAvgOrderValue != 0) ? (($currentWeekAvgOrderValue - $lastWeekAvgOrderValue) / $lastWeekAvgOrderValue) * 100 : 0;
//
//        // Get the number of users this week and last week
//        $currentWeekUsers = User::whereBetween('created_at', [$currentWeekStart, $currentWeekEnd])->whereDoesntHave('admin')->count();
//        $lastWeekUsers = User::whereBetween('created_at', [$lastWeekStart, $lastWeekEnd])->whereDoesntHave('admin')->count();
//
//        // Calculate the increase or decrease rate of users compared to last week
//        $usersRate = ($lastWeekUsers != 0) ? (($currentWeekUsers - $lastWeekUsers) / $lastWeekUsers) * 100 : 0;
//
//        // Get the last 7 months to create bar charts
//        $months = [];
//        for ($i = 6; $i >= 0; $i--) {
//            $date = Carbon::now()->subMonths($i);
//            $months[] = $date->format('M');
//        }
//
//        // Get the data for the last 7 months
//        $ordersData = [];
//        $revenueData = [];
//        $averageData = [];
//        $usersData = [];
//        for ($i = 6; $i >= 0; $i--) {
//            $date = Carbon::now()->subMonths($i);
//            $month = $date->format('m');
//
//            // Get the total number of orders for the month
//            $totalOrders = Order::whereRaw("MONTH(created_at) = $month")
//                ->whereYear('created_at', $date->format('Y'))
//                ->count();
//            $ordersData[] = $totalOrders > 0 ? $totalOrders : 0;
//
//            // Get the total revenue for the month
//            $_totalRevenue = Order::where('status', 4)
//                ->whereRaw("MONTH(created_at) = $month")
//                ->whereYear('created_at', $date->format('Y'))
//                ->sum('grand_total');
//            $revenueData[] = $_totalRevenue > 0 ? $_totalRevenue : 0;
//
//            // Get the average order value for the month
//            $_averageValue = Order::whereRaw("MONTH(created_at) = $month")
//                ->whereYear('created_at', $date->format('Y'))
//                ->avg('grand_total');
//            $averageData[] = $_averageValue > 0 ? $_averageValue : 0;
//
//            // Get the total number of new users for the month
//            $totalUsers = User::whereRaw("MONTH(created_at) = $month")
//                ->whereYear('created_at', $date->format('Y'))
//                ->whereNotIn('id', function($query) {
//                    $query->select('user_id')
//                        ->from('admins');
//                })
//                ->count();
//            $usersData[] = $totalUsers > 0 ? $totalUsers : 0;
//        }
//
//        /* --------------------------------------------------------------------------- */
//        /* ---------------------- Data for the 3 revenue charts ---------------------- */
//        /* --------------------------------------------------------------------------- */
//
//        // Week chart
//        $revenueWeek = [];
//        for ($i = 6; $i >= 0; $i--) {
//            $date = Carbon::now()->subDays($i);
//            $_totalRevenue1 = Order::where('status', 4)
//                ->whereDate('created_at', $date->format('Y-m-d'))
//                ->sum('grand_total');
//            $revenueWeek[] = $_totalRevenue1/1000000;
//        }
//        $previousRevenueWeek = [];
//        for ($i = 13; $i >= 7; $i--) {
//            $date = Carbon::now()->subDays($i);
//            $_totalRevenue1 = Order::where('status', 4)
//                ->whereDate('created_at', $date->format('Y-m-d'))
//                ->sum('grand_total');
//            $previousRevenueWeek[] = $_totalRevenue1/1000000;
//        }
//        $labelsWeek = [];
//        for ($i = 6; $i >= 0; $i--) {
//            $date = Carbon::now()->subDays($i);
//            $labelsWeek[] = $date->format('D');
//        }
//
//        // Month chart
//        $revenueMonth = [];
//        for ($i = 5; $i >= 0; $i--) {
//            $startDate = Carbon::now()->subDays($i * 5 + 4)->startOfDay();
//            $endDate = Carbon::now()->subDays($i * 5)->endOfDay();
//            $_totalRevenue2 = Order::where('status', 4)
//                ->whereBetween('created_at', [$startDate, $endDate])
//                ->sum('grand_total');
//            $revenueMonth[] = $_totalRevenue2/1000000;
//        }
//        $previousRevenueMonth = [];
//        for ($i = 11; $i >= 6; $i--) {
//            $startDate = Carbon::now()->subDays($i * 5 + 4)->startOfDay();
//            $endDate = Carbon::now()->subDays($i * 5)->endOfDay();
//            $_totalRevenue2 = Order::where('status', 4)
//                ->whereBetween('created_at', [$startDate, $endDate])
//                ->sum('grand_total');
//            $previousRevenueMonth[] = $_totalRevenue2/1000000;
//        }
//        $labelsMonth = [];
//        for ($i = 5; $i >= 0; $i--) {
//            $startDate = Carbon::now()->subDays($i * 5 + 4)->format('d');
//            $endDate = Carbon::now()->subDays($i * 5)->format('d');
//            $labelsMonth[] = "$startDate-$endDate";
//        }
//
//        // Year chart
//        $revenueYear = [];
//        for ($i = 11; $i >= 0; $i--) {
//            $date = Carbon::now()->subMonths($i);
//            $_totalRevenue = Order::where('status', 4)
//                ->whereYear('created_at', $date->year)
//                ->whereMonth('created_at', $date->month)
//                ->sum('grand_total');
//            $revenueYear[] = $_totalRevenue / 1000000;
//        }
//        $previousRevenueYear = [];
//        for ($i = 23; $i >= 12; $i--) {
//            $date = Carbon::now()->subMonths($i);
//            $_totalRevenue = Order::where('status', 4)
//                ->whereYear('created_at', $date->year)
//                ->whereMonth('created_at', $date->month)
//                ->sum('grand_total');
//            $previousRevenueYear[] = $_totalRevenue / 1000000;
//        }
//        $labelsYear = [];
//        for ($i = 11; $i >= 0; $i--) {
//            $date = Carbon::now()->subMonths($i);
//            $labelsYear[] = $date->format('M');
//        }
//
//        /* --------------------------------------------------------------------------- */
//        /* ------------------- Data for the top categories charts -------------------- */
//        /* --------------------------------------------------------------------------- */
//
//        // All time
//        $topCategories1 = Category::select(DB::raw('categories.id, categories.name, sum(orders.grand_total) as revenue, count(DISTINCT orders.id) as total_orders, sum(order_products.quantity) as total_products'))
//            ->join('products', 'products.category_id', '=', 'categories.id')
//            ->join('order_products', 'order_products.product_id', '=', 'products.id')
//            ->join('orders', 'orders.id', '=', 'order_products.order_id')
//            ->where('orders.status', '=', 4)
//            ->whereNull('categories.deleted_at') // Add this line
//            ->groupBy('categories.id', 'categories.name') // Add categories.name to GROUP BY
//            ->orderByDesc('revenue')
//            ->take(7)
//            ->get();
//
//        // Week
//        $topCategories2 = Category::select(DB::raw('categories.id, categories.name, sum(orders.grand_total) as revenue, count(DISTINCT orders.id) as total_orders, sum(order_products.quantity) as total_products'))
//            ->join('products', 'products.category_id', '=', 'categories.id')
//            ->join('order_products', 'order_products.product_id', '=', 'products.id')
//            ->join('orders', 'orders.id', '=', 'order_products.order_id')
//            ->where('orders.status', '=', 4)
//            ->whereBetween('orders.created_at', [Carbon::now()->subDays(6)->startOfDay(), Carbon::now()->endOfDay()])
//            ->whereNull('categories.deleted_at')
//            ->groupBy('categories.id', 'categories.name')
//            ->orderByDesc('revenue')
//            ->take(7)
//            ->get();
//
//        // Month
//        $topCategories3 = Category::select(DB::raw('categories.id, categories.name, sum(orders.grand_total) as revenue, count(DISTINCT orders.id) as total_orders, sum(order_products.quantity) as total_products'))
//            ->join('products', 'products.category_id', '=', 'categories.id')
//            ->join('order_products', 'order_products.product_id', '=', 'products.id')
//            ->join('orders', 'orders.id', '=', 'order_products.order_id')
//            ->where('orders.status', '=', 4)
//            ->whereBetween('orders.created_at', [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->endOfDay()])
//            ->whereNull('categories.deleted_at')
//            ->groupBy('categories.id', 'categories.name')
//            ->orderByDesc('revenue')
//            ->take(7)
//            ->get();
//
//        // Year
//        $topCategories4 = Category::select(DB::raw('categories.id, categories.name, sum(orders.grand_total) as revenue, count(DISTINCT orders.id) as total_orders, sum(order_products.quantity) as total_products'))
//            ->join('products', 'products.category_id', '=', 'categories.id')
//            ->join('order_products', 'order_products.product_id', '=', 'products.id')
//            ->join('orders', 'orders.id', '=', 'order_products.order_id')
//            ->where('orders.status', '=', 4)
//            ->whereBetween('orders.created_at', [Carbon::now()->subYear()->startOfYear(), Carbon::now()->endOfDay()])
//            ->whereNull('categories.deleted_at')
//            ->groupBy('categories.id', 'categories.name')
//            ->orderByDesc('revenue')
//            ->take(7)
//            ->get();
//
//        /* --------------------------------------------------------------------------- */
//        /* ---------------------- Data for the top sold product ---------------------- */
//        /* --------------------------------------------------------------------------- */
//        $topProducts1 = Product::select(DB::raw('products.id, MAX(products.name) AS name,  MAX(products.price) as price, sum(order_products.quantity) as total_quantity, sum(order_products.price * order_products.quantity) as revenue'))
//            ->join('order_products', 'order_products.product_id', '=', 'products.id')
//            ->join('orders', 'orders.id', '=', 'order_products.order_id')
//            ->where('orders.status', '=', 4) // 4 means COMPLETED orders
//            ->groupBy('products.id')
//            ->orderByDesc('total_quantity')
//            ->take(5)
//            ->get();
//        $topProducts2 = Product::select(DB::raw('products.id, MAX(products.name) AS name,  MAX(products.price) as price, sum(order_products.quantity) as total_quantity, sum(order_products.price * order_products.quantity) as revenue'))
//            ->join('order_products', 'order_products.product_id', '=', 'products.id')
//            ->join('orders', 'orders.id', '=', 'order_products.order_id')
//            ->where('orders.status', '=', 4) // 4 means COMPLETED orders
//            ->whereBetween('orders.created_at', [Carbon::now()->subDays(6)->startOfDay(), Carbon::now()->endOfDay()])
//            ->groupBy('products.id')
//            ->orderByDesc('total_quantity')
//            ->take(5)
//            ->get();
//        $topProducts3 = Product::select(DB::raw('products.id, MAX(products.name) AS name,  MAX(products.price) as price, sum(order_products.quantity) as total_quantity, sum(order_products.price * order_products.quantity) as revenue'))
//            ->join('order_products', 'order_products.product_id', '=', 'products.id')
//            ->join('orders', 'orders.id', '=', 'order_products.order_id')
//            ->where('orders.status', '=', 4) // 4 means COMPLETED orders
//            ->whereBetween('orders.created_at', [Carbon::now()->subMonth()->startOfDay(), Carbon::now()->endOfDay()])
//            ->groupBy('products.id')
//            ->orderByDesc('total_quantity')
//            ->take(5)
//            ->get();
//        $topProducts4 = Product::select(DB::raw('products.id, MAX(products.name) AS name,  MAX(products.price) as price, sum(order_products.quantity) as total_quantity, sum(order_products.price * order_products.quantity) as revenue'))
//            ->join('order_products', 'order_products.product_id', '=', 'products.id')
//            ->join('orders', 'orders.id', '=', 'order_products.order_id')
//            ->where('orders.status', '=', 4) // 4 means COMPLETED orders
//            ->whereBetween('orders.created_at', [Carbon::now()->subYear()->startOfDay(), Carbon::now()->endOfDay()])
//            ->groupBy('products.id')
//            ->orderByDesc('total_quantity')
//            ->take(5)
//            ->get();


        return view('admin.home', compact(
//            'ordersCount', 'totalRevenue', 'averageValue','usersCount',
//            'ordersRate', 'revenueRate', 'avgOrderValueRate', 'usersRate',
//            'months', 'ordersData', 'revenueData', 'averageData', 'usersData',
//            'revenueWeek', 'previousRevenueWeek', 'labelsWeek',
//            'revenueMonth', 'previousRevenueMonth', 'labelsMonth',
//            'revenueYear', 'previousRevenueYear', 'labelsYear',
//            'topCategories1', 'topCategories2', 'topCategories3', 'topCategories4',
//            'topProducts1', 'topProducts2', 'topProducts3', 'topProducts4'
        ));


    }

}
