<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\foods;
use App\Models\chefs;
use App\Models\cart;
use App\Models\diet;
use App\Models\Item;

class HomeController extends Controller
{
    /* admin home */

    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == '1') {
            return view('admin.adminhome');
        } else {
            $user_id = Auth::id();
            $count = cart::where('user_id', $user_id)->count();
            return view('index', compact("count", "user_id"));
        }
    }

    /* add to cart function */
    public function addcart(Request $request, $id)
    {

        if (Auth::id()) {
            $user_id = Auth::id();

            $food_id = $id;

            $quantity = $request->quantity;

            $cart = new cart;
            $cart->user_id = $user_id;
            $cart->food_id = $food_id;
            $cart->quantity = $quantity;

            $cart->save();
            return redirect()->back();
        } else {
            return redirect('/login');
        }
    }


    /* end add to cart  */


    /* home page */
    public function home()
    {
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();
        return view('home', compact("count"));
    }
    public function reservation()
    {
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();
        return view('reservation', compact("count"));
    }

    /* index page */
    public function index()
    {
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();
        return view('index', compact('count'));
    }
    public function about()
    {
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();
        return view('about', compact('count'));
    }

    public function menu()
    {
        // $data = foods::all();
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();

        // return view('menu', compact('data', 'count'));

        // new Code

        $data = Item::all();
        return view('menu', compact('data', 'count'));
    }
    /* start search */
    public function search(Request $request)
    {
        //$ill = $request->illness;
        // $data = Item::where('illness', 'like', '%' . $ill . '%')->get();
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();

        $data = Item::all();
        $illnesses = diet::all();

        return view('search', compact('data', 'illnesses', 'count'));
    }

    public function searchbyill(Request $request)
    {
        $ill = $request->illness;
        $data = diet::where('name', 'like', '%' . $ill . '%')->get();

        $minkal = $data->minkal;
        $mincarbs = $data->mincarbs;
        $minfat = $data->minfat;
        $minfiber = $data->minfiber;
        $minprocount = $data->minprocount;

        $maxkal = $data->maxkal;
        $maxcarbs = $data->maxcarbs;
        $maxfat = $data->maxfat;
        $maxfiber = $data->maxfiber;
        $maxprocount = $data->maxprocount;

        $item = Item::all()->paginate(5);

        // $user_id = Auth::id();
        // $count = cart::where('user_id', $user_id)->count();

        //$data = Item::all();

        return view('test', compact('data'));
    }


    /* end search  */

    public function chef()
    {
        $data = chefs::all();
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();
        return view('chef', compact('data', 'count'));
    }
    public function contact()
    {
        $user_id = Auth::id();
        $count = cart::where('user_id', $user_id)->count();
        return view('contact', compact('count'));
    }


    /* show cart function */
    public function showcart(Request $request, $id)
    {

        $count = cart::where('user_id', $id)->count();

        $sum1 = cart::where('user_id', $id)->sum('quantity');
        $data = cart::where('user_id', $id)->join('foods', 'carts.food_id', '=', 'foods.id')->get();

        return view('showcart', compact('data', 'count', 'sum1'));
    }

    public function deletecart($id)
    {
        $data = cart::where('cart_id', $id);

        $data->delete();
        return redirect()->back();
    }
}
