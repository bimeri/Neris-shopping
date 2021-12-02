<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\URL;

class cart extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['item_id', 'user_id', 'paid', 'quantity'];

    public function item(){
        return $this->belongsTo(Items::class);
    }

    public static function getUserDetail($user){
        $usercarts = cart::where('user_id', $user)->where('paid', 0)->get();

        $price = 0;
        $ul = '';
        foreach($usercarts as $cart){
            $price += $cart->quantity*$cart->item->new_price;
            $ul .= '<li>
                    <a href="#" class="image"><img src="'.URL::asset($cart->item->profile).'" class="cart-thumb" alt=""></a>
                    <div class="cart-item-desc">
                        <h6><a href="#">'.$cart->item->name.'</a></h6>
                        <p>'.$cart->quantity.'x - <span class="price">$'.$cart->quantity*$cart->item->new_price.'</span></p>
                    </div>
                    <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                </li>';
        }

        $val = '<a href="#" id="header-cart-btn" target="_blank"><span class="cart_quantity">'.$usercarts->sum('quantity').'</span> <i class="fa fa-shopping-cart"></i> Your Bag $'.$price.'</a>
        <ul class="cart-list" style="position: absolute; z-index: 99999 !important;">';
        $val .= $ul;
        $val .='
            <li class="total">
                <span class="pull-right">Total: $'.$price.'</span>
                <a href="cart.html" class="btn w3-left btn-sm btn-cart">Cart</a>
                <a href="'.route('checkout').'" class="btn w3-right btn-sm btn-checkout">Checkout</a><br>
            </li>
        </ul>';
        return $val;
    }

    public static function getCartDetail(){
        if(auth()->check()) {
            return cart::getUserDetail(auth()->user()->id);
        } else {
            return "";
        }
    }

    public static function getCart($userId) {
        $sum = 0;
        foreach (cart::get() as $cart) {
            $sum += $cart->item->new_price * $cart->quantity;
        }
        return [$sum, cart::where('user_id', $userId)->where('paid', 0)->get()];
    }
}

