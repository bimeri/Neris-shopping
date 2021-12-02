<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class HomeComtroller extends Controller
{
    //

    public function addToCard(Request $req){

        if (!auth()->check()) {
            $message = array('message' => 'You are not Logged in, please fill login or create an account', 'alert-type' => 'info');
            return redirect()->route('loginPage')->with($message);
        }
        $quantity = $req['quantity'];
        $itemId = $req['itemId'];
        $cart = new cart();
        $cart->item_id = $itemId;
        $cart->quantity = $quantity;
        $cart->paid = 0;
        $cart->user_id = auth()->user()->id;
        $cart->save();
        $message = array('message' => 'Hi '.explode(' ', auth()->user()->name)[0]. ', Item added successfully to card', 'alert-type' => 'success');
        return redirect()->back()->with($message);
    }

    public function subscribe(Request $req){
        $email = $req['email'];
        $sub = new Subscriber();
        $sub->email = $email;
        try {
            $sub->save();
        } catch (\Exception $th) {
            $message = array('message' => 'Your email already exists in our server', 'alert-type' => 'warning');
            return redirect()->back()->with($message);
        }
        $message = array('message' => 'Hi '.$email.', you have successfully subscribed to our new channel', 'alert-type' => 'success');
        return redirect()->back()->with($message);
    }

}
