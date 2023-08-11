<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\League;
use App\Models\LeagueSeason;
use App\Models\Match;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $leagueSeasonList= LeagueSeason::with('League')->with('Matches')->get();
//        dd($leagueSeasonList->get(4)->Matches->take(10));
//        dd($leagueSeasonList->get(2)->Matches->first());
        return view('guest.home',compact('leagueSeasonList'));
    }

    public function match()
    {
        return view('guest.match');
    }
    public function team()
    {
        return view('guest.team');
    }
    public function contact()
    {
        return view('guest.contact');
    }    public function blog()
    {
        return view('guest.blog');
    }
    public function blogDetails()
    {
        return view('guest.blog-details');
    }
    public function playerdetail()
    {
        return view('guest.playerdetail');
    }
    public function checkout()
    {
        return view('guest.checkout');
    }
    public function shopProduct(Request $request)
    {
        $search = $request->get("search");
        $category_id = $request->get("category_id");
        $lowest_price = $request->get("lowest_price");
        $highest_price = $request->get("highest_price");
        $lowest_price =  str_replace('$', '', $request->get('lowest_price'));
        $highest_price = str_replace('$', '', $request->get('highest_price'));
        $orderCol = $request->has("orderCol") ? explode('/', $request->get("orderCol"))[0] : "created_at";
        $sortBy = $request->has("orderCol") ? explode('/', $request->get("orderCol"))[1] : "desc";

        // Define the subquery to calculate the total sold quantity for each product
        $soldQuantitySubquery = DB::table('order_products')
            ->selectRaw('product_id, SUM(quantity) as total_sold')
            ->groupBy('product_id')
            ->toSql();

        // Use the subquery to add the 'total_sold', column to the product data
        $searchedData = Product::Search($search)
            ->LowestPrice($lowest_price)
            ->HighestPrice($highest_price)
            ->selectRaw('products.*, IFNULL(tp.total_sold, 0) as sold_quantity')
            ->leftJoin(DB::raw("($soldQuantitySubquery) as tp"), 'products.id', '=', 'tp.product_id');

        $searchedDataCount = $searchedData->count('id');
        $category_ids = $searchedData->pluck('category_id')->toArray();
        $categories = Category::orderBy('id')
            ->whereIn('id', $category_ids)
            ->withCount(['products' => function ($query) use ($searchedData) {
                $query->whereIn('id', $searchedData->pluck('id'));
            }])
            ->get();

        $data = $searchedData->CategoryFilter($category_id)->orderBy($orderCol, $sortBy)->paginate(12);

        return view('guest.shop',compact('data',"categories", "searchedDataCount"));
    }
    public function productDetail(Product $product)
    {
        $related_products = Product::where("category_id", $product->category_id)->where("id","<>",$product->id)->orderBy("created_at", "desc")->limit(4)->get();
        return view('guest.product-details', compact("product", "related_products"));
    }
    public function clubHistory()
    {
        return view('guest.club-history');
    }
}
