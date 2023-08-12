<?php

namespace App\Http\Controllers;

use App\Events\CancelOrder;
use App\Events\NewOrderCreated;
use App\Mail\MailOrder;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Match;
use App\Models\Order;
use App\Models\League;
use App\Models\LeagueSeason;
use App\Models\Players;
use App\Models\Product;
use Cloudinary\Api\Upload\UploadApi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Srmklive\PayPal\Services\PayPal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $leagueSeasonList= LeagueSeason::with('League')->with('Matches')->get();

        $today = Carbon::now('Asia/Kolkata');
        $last_new = Blog::where('publish_date', '>=', $today)
            ->orderBy("publish_date", 'desc')
            ->limit(1)->get();

        $second_new = Blog::
        where('id', '<>', $last_new->first()->id)
            ->orderBy("publish_date", 'desc')->limit(4)->get();

        $match = Match::orderBy("datetime", 'desc')
            ->limit(4)->get();;


        $today_on_sport = Blog::
        orderBy("publish_date", 'desc')->limit(5)
            ->get();
        $today_on_sport_footter = Blog::
        orderBy("publish_date", 'asc')->limit(5)
            ->get();
        $last_new_league_world_cup = Blog::where('publish_date', '<>', $today)
            ->where('league_id', '=', 1)
            ->orderBy("publish_date", 'desc')
            ->limit(2)->get();
        $last_new_league_world_cup_2 = Blog::where('publish_date', '<>', $today)
            ->where('league_id', '=', 1)
            ->        where('id', '<>', $last_new_league_world_cup->first()->id)

            ->orderBy("publish_date", 'desc')
            ->limit(4)->get();
        $league_1 =League::all();



//            foreach ($match as $item){
//                dd($item->matchResult);
//            }
//        dd($match);


        return view('guest.home', compact('last_new_league_world_cup_2','last_new_league_world_cup','league_1','last_new', 'second_new', 'match', 'leagueSeasonList', 'today_on_sport', 'today_on_sport_footter', ));
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
    }

    public function blog()
    {
        $today = Carbon::now('Asia/Kolkata');
        $last_new = Blog::where('publish_date', '>=', $today)
            ->orderBy("publish_date", 'desc')
            ->limit(1)->get();

        $second_new = Blog::
        where('id', '<>', $last_new->first()->id)
            ->orderBy("publish_date", 'desc')->limit(8)->get();


        $last_new_slider = Blog::
        where('id', '<>', $last_new->first()->id)
            ->orderBy("publish_date", 'desc')->limit(3)->get();


        $today_on_sport = Blog::
        orderBy("publish_date", 'desc')->limit(5)
            ->get();
        $today_on_sport_footter=Blog::
        orderBy("publish_date", 'asc')->limit(5)
            ->get();

        $league=League::all();


//        dd($second_new);


        return view('guest.blog', compact('last_new', 'second_new', 'today_on_sport','today_on_sport_footter','last_new_slider','league'));
    }

    public function playerdetail(Players $player)
    {

        return view('guest.profile', compact('player'));

    }

    public function blogDetails(Blog $blog)
    {

        $today_on_sport = Blog::
        orderBy("publish_date", 'desc')->limit(5)
            ->get();
        $today_on_sport_footter=Blog::
        orderBy("publish_date", 'asc')->limit(5)
            ->get();
        $last_new_slider = Blog::
            orderBy("publish_date", 'desc')->limit(3)->get();
        $league=League::all();


        return view('guest.blog-details', compact('blog','today_on_sport','league','today_on_sport_footter','last_new_slider'));


    }

    public function shopProduct(Request $request)
    {
        $search = $request->get("search");
        $category_id = $request->get("category_id");
//        $lowest_price = $request->get("lowest_price");
//        $highest_price = $request->get("highest_price");
        $lowest_price = str_replace('$', '', $request->get('lowest_price'));
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

        return view('guest.shop', compact('data', "categories", "searchedDataCount"));
    }

    public function productDetail(Product $product)
    {
        $related_products = Product::where("category_id", $product->category_id)->where("id", "<>", $product->id)->orderBy("created_at", "desc")->limit(4)->get();
        return view('guest.product-detail', compact("product", "related_products"));
    }

    public function addToCart(Product $product, Request $request)
    {
        $request->validate([
            "buy_quantity" => "required|numeric|min:1|max:" . $product->quantity
        ]);
        $buy_quantity = $request->get("buy_quantity");

        //Them thuoc tinh vao san pham
        $product->buy_quantity = $buy_quantity;

        //Kiem tra da co gio hang chua
        $cart = session()->has("cart") && is_array(session("cart")) ? session("cart") : [];

        //Kiem tra san pham da co trong gio chua
        $flag = true;
        foreach ($cart as $item) {
            if ($item->id == $product->id) {
                $item->buy_quantity += $buy_quantity;
                $flag = false;
                break;
            }
        }
        if ($flag) {
            $cart[] = $product;
        }
        session(["cart" => $cart]);
        $cartCount = count(session('cart', []));

        // Calculate total price of cart items
        $totalPrice = 0;
        foreach ($cart as $item) {
            $totalPrice += $item->buy_quantity * $item->price;
        }

        return response()->json(['cartCount' => $cartCount, 'totalPrice' => $totalPrice]);
    }

    public function cart()
    {
        $cart = session()->has("cart") && is_array(session("cart")) ? session("cart") : [];
        $total = 0;
        $can_checkout = true;
        foreach ($cart as $item) {
            $total += $item->price * $item->buy_quantity;
            if ($item->quantity < $item->buy_quantity) {
                $can_checkout = false;
            }
        }
        $shipping = 0;
        // set the redirectTo property to the checkout URL
        session(['redirectTo' => url('/checkout')]);

        return view("guest.cart", compact("cart", "total", "shipping", "can_checkout"));
    }

    public function updateCart(Request $request)
    {
        try {
            $productId = $request->input('product_id');
            $newQuantity = $request->input('quantity');

            // Update the cart and calculate subtotal for that product
            $cart = session('cart');
            $subTotal = 0;
            foreach ($cart as $item) {
                if ($item->id == $productId) {
                    $item->buy_quantity = $newQuantity;
                    $subTotal = $item->price * $item->buy_quantity;
                    break;
                }
            }
            session(['cart' => $cart]);

            // Calculate the new total
            $total = 0;
            foreach ($cart as $item) {
                $total += $item->price * $item->buy_quantity;
            }
            // Calculate shipping charge
            $shipping = 0;

            $data = [
                'subTotal' => number_format($subTotal, 2),
                'total' => number_format($total, 2),
                'shipping' => number_format($shipping, 2),
                'grandTotal' => number_format($total + $shipping, 2)
            ];

            return response()->json($data);
        } catch (\Exception $exception) {
            dd($exception);
        }

    }

    public function deleteFromCart(Request $request, Product $product)
    {
        $cart = session()->has("cart") && is_array(session("cart")) ? session("cart") : [];
        foreach ($cart as $key => $value) {
            if ($value->id == $product->id) {
                unset($cart[$key]);
            }
        }
        session(["cart" => $cart]);

        // Calculate the new total
        $total = 0;
        foreach ($cart as $item) {
            $total += $item->price * $item->buy_quantity;
        }
        // Calculate shipping charge
        $shipping = 0;

        if ($request->ajax()) {
            $response = [
                'status' => 'success',
                'message' => 'Product removed from cart successfully.',
                'total' => number_format($total, 2),
                'shipping' => number_format($shipping, 2),
                'grandTotal' => number_format($total + $shipping, 2),
            ];
            return response()->json($response);
        }

        return redirect()->to("/cart");
    }

    public function checkout()
    {
        $cart = session()->has("cart") && is_array(session("cart")) ? session("cart") : [];
        $total = 0;
        $can_checkout = true;
        foreach ($cart as $item) {
            $total += $item->price * $item->buy_quantity;
            if ($item->quantity < $item->buy_quantity) {
                $can_checkout = false;
            }
        }
        $shipping = 0;
        if (!$can_checkout && count($cart) > 0) {
            return redirect()->to("/cart");
        }

        // retrieve the previous URL from the session
        $redirectTo = session('redirectTo');

        // if the URL is not set, redirect to the home page
        if (!$redirectTo) {
            //return redirect()->to('/');
            return view("guest.checkout", compact("cart", "total", "shipping"));
        }

        // clear the previous URL from the session
        session()->forget('redirectTo');

        return view("guest.checkout", compact("cart", "total", "shipping"));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'phone' => ['required', 'numeric'],
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'postcode' => ['required', 'numeric'],
            'payment_method' => 'required',
        ]);

        //Kiem tra so luong san pham
        $cart = session()->has("cart") && is_array(session("cart")) ? session("cart") : [];
        $total = 0;
        $can_checkout = true;
        foreach ($cart as $item) {
            $total += $item->price * $item->buy_quantity;
            if ($item->quantity < $item->buy_quantity) {
                $can_checkout = false;
            }
        }
        $shipping = 0;
        if (!$can_checkout && count($cart) > 0) {
            return redirect()->to("/cart");
        }

        // Get the currently authenticated user
        $user = Auth::user();

        $paymentCode = null;
        if ($request->get('payment_method') === Order::PAYPAL) {
            $paymentCode = 'PPA';
        } elseif ($request->get('payment_method') === Order::VNPAY) {
            $paymentCode = 'VNP';
        } else {
            $paymentCode = 'COD';
        }

        $order = Order::create([
            'code' => $paymentCode . microtime(true) * 10000,
            'user_id' => $user->id,
            'subtotal' => $total,
            'delivery_fee' => $shipping,
            'grand_total' => $total + $shipping,
            'status' => $request->get('payment_method') == Order::COD ? Order::CONFIRMED : Order::PENDING,
            'fullname' => $request->get('name'),
            'country' => $request->get('country'),
            'state' => $request->get('state'),
            'city' => $request->get('city'),
            'address' => $request->get('address'),
            'postcode' => $request->get('postcode'),
            'note' => $request->get('note'),
            'email' => $user->email,
            'telephone' => $request->get('phone'),
            'payment_method' => $request->get('payment_method'),
            'payment_status' => false
        ]);
        foreach ($cart as $item) {
            DB::table('order_products')->insert([
                "order_id" => $order->id,
                "product_id" => $item->id,
                "quantity" => $item->buy_quantity,
                "price" => $item->price
            ]);
            $item->decrement('quantity', $item->buy_quantity);
        }

        // Update the user's information if the "save info" checkbox is ticked
        if ($request->has('save_info')) {
            $user->name = $request->input('name');
            $user->telephone = $request->input('phone');
            $user->country = $request->input('country');
            $user->address = $request->input('address');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->postcode = $request->input('postcode');

            $user->save();
        }

        //Phat su kien NewOrderCreated de NotifyAdminOrderCreated xu ly
        event(new NewOrderCreated($order));

        if ($request->get('payment_method') == Order::PAYPAL) {
            return redirect()->to(route('process_paypal', ['order' => $order->code]));
        } elseif ($request->get('payment_method') == Order::VNPAY) {
            return redirect()->to(route('process_vnpay', ['order' => $order->code]));
        } else {
            $totalQuantity = 0;
            foreach ($order->products as $product) {
                $totalQuantity += $product->pivot->quantity;
            }
            //Gui mail neu thanh toan 'COD'
            if ($request->get('payment_method') == Order::COD) {
                Mail::to($order->email)->send(new MailOrder($order));
            }
            return view('guest.order-confirm', compact('order', 'totalQuantity'));
        }
    }

    public function processPaypal(Order $order)
    {
        $provider = new PayPal;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('success_paypal', ['order' => $order->code]),
                "cancel_url" => route('cancel_paypal', ['order' => $order->code]),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => number_format($order->grand_total, 2, ".", "")
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {

            // redirect to approve href
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }

            return redirect()
                ->route('cancel_paypal')
                ->with('error', 'Something went wrong.');

        } else {
            return redirect()
                ->route('cancel_paypal')
                ->with('error', $response['message'] ?? 'Something went wrong.');
        }
    }

    public function successPaypal(Order $order)
    {
        $order->update(['payment_status' => true]);
        if ($order->status == Order::PENDING) {
            $order->update(['status' => Order::CONFIRMED]);
        }
        $totalQuantity = 0;
        foreach ($order->products as $product) {
            $totalQuantity += $product->pivot->quantity;
        }
//        dd($order);
        //Send Email after payment success
        Mail::to($order->email)->send(new MailOrder($order));

        return view('guest.order-confirm', compact('order', 'totalQuantity'));
    }

    public function successPaypalTest(Order $order)
    {
        return view('guest.order-confirm');
    }

    public function cancelPaypal(Order $order)
    {
        $totalQuantity = 0;
        foreach ($order->products as $product) {
            $totalQuantity += $product->pivot->quantity;
        }
        $error = session('error');
        return view('guest.cancel-payment', compact('order', 'totalQuantity', 'error'));
    }

    public function clubHistory()
    {
        return view('guest.club-history');
    }


    public function myAccount()
    {
        return view('guest.myaccount');
    }

    public function updateUserInfo(Request $request)
    {
        // Get the currently authenticated user
        $user = Auth::user();

        $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'email' => "required|string|email|max:255|unique:users,email,".$user->id,
            'telephone' => ['nullable', 'numeric'],
            'postcode' => ['nullable', 'numeric'],
        ]);

        $data = $request->all();

        $user->update($data);

        return redirect()->to('/my-account');
    }

    public function changePassword()
    {
        return view('guest.change-password');
    }

    public function changePasswordSave(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|confirmed|min:8|string'
        ]);
        $user = Auth::user();
        // The passwords matches
        if (!Hash::check($request->get('current_password'), $user->password)) {
            return back()->with('error', "Current Password is Invalid");
        }
        // Current password and new password same
        if (strcmp($request->get('current_password'), $request->new_password) == 0) {
            return redirect()->back()->with("error", "New Password cannot be same as your current password.");
        }
        $user->password = Hash::make($request->new_password);
        $user->save();
        return back()->with('success', "Password Changed Successfully");
    }


    public function orderHistory()
    {
        $user = Auth::user();
        $orders = $user->orders()->orderBy('created_at', 'desc')->get();
        return view('guest.order-history', compact('orders'));
    }

    public function orderDetail(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        return view('guest.order-detail', compact('order'));
    }

    public function cancelOrder(Request $request)
    {
        $request->validate([
            'reason' => 'required'
        ]);

        $user = Auth::user(); // get the currently authenticated user

        $order = Order::find($request->order_id);

        if ($order->status <= 1 && $order->user_id == $user->id) {
            $order->status = 5;
            $order->cancel_reason = $request->get('reason');
            $order->save();
            //increase products quantity:
            foreach ($order->products as $product) {
                $product->increment('quantity', $product->pivot->quantity);
            }
            //Phat su kien CancelOrder de NotifyAfterCanceledOrder xu ly
            event(new CancelOrder($order));

            return redirect()->to(url("/order-detail", ["order" => $order->code]));
        }
        return back()->with('error', "You can not cancel this order.");
    }
}
