<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //
    public static function homePage(){
        return Category::getCategories();
    }

    public function aboutUs(){
        $data['cart'] = cart::getCartDetail();
        return view('public.pages.about-us')->with($data);
    }

    public function purchaseProcedure(){
        $data['cart'] = cart::getCartDetail();
        return view('public.pages.purchase')->with($data);
    }

    public function shipping(){
        $data['cart'] = cart::getCartDetail();
        return view('public.pages.shipping')->with($data);
    }

    public function health(){
        $data['cart'] = cart::getCartDetail();
        return view('public.pages.health')->with($data);
    }

    public function contactUs(){
        $data['cart'] = cart::getCartDetail();
        return view('public.pages.contact')->with($data);
    }
    public function checkoutPage(){
        $data['cart'] = cart::getCartDetail();
        $data['carts'] = cart::getCart(Auth::user()->id);
        $data['cartssum'] = cart::getCart(Auth::user()->id);
        return view('public.pages.checkout')->with($data);
    }

    public function getModal(Request $req){
        return User::returnModal($req->item);
    }

}
