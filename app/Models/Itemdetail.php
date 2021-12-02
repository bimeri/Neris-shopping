<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;

class Itemdetail extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = ['item_id', 'size', 'color', 'lxw', 'description', 'name'];

    public function item(){
        return $this->belongsTo(Item::class);
    }

    public static function getItemDetail(){
        $val = '';
        foreach(Items::all() as $item) {
            $itemdetail = Itemdetail::where('item_id', $item->id)->first();
            $val .= '<div class="col-12 col-sm-6 col-md-4 single_gallery_item '.$item->category->filter.' wow fadeInUpBig" data-wow-delay="0.2s">
            <!-- Product Image -->
            <div class="product-img">
                <img src="'.URL::asset($item->profile).'" alt="" class="border w3-round-medium" style="height: 25rem !important;">
                <div class="product-quicview">
                    <a href="" onclick="returnModal('.$item->id.')" data-toggle="modal" data-target="#quickview'.$item->id.'"><i class="ti-plus"></i></a>
                </div>
            </div>
            <!-- Product Description -->
            <div class="product-description">
                <h4 class="product-price">$'.$item->new_price.'</h4>
                <strong>'.$item->name.'</strong> <p>'.$itemdetail.'</p>
                <!-- Add to Cart -->
                <a href="#" class="add-to-cart-btn">ADD TO CART</a>
            </div>
        </div>';
        }
        return $val;
    }

    public static function getItemModal($itemId){
        $item = Items::where('id', $itemId)->first();
        $itemdetail = Itemdetail::where('item_id', $itemId)->first();
        $val = '
        <div class="modal quickviews fade" id="quickview'.$itemId.'" tabindex="-1" role="dialog" aria-labelledby="quickview" aria-hidden="true">
           <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
               <div class="modal-content">
                   <button type="button" class="close btn" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>

                   <div class="modal-body">
                       <div class="quickview_body">
                           <div class="container">
                               <div class="row">
                                   <div class="col-12 col-lg-5">
                                       <div class="quickview_pro_img">
                                           <img src="'.URL::asset($item->profile).'" alt="" width="100%" style="height:400px !important">
                                       </div>
                                   </div>
                                   <div class="col-12 col-lg-7">
                                       <div class="quickview_pro_des">
                                           <h4 class="title">'.$item->name.'</h4>
                                           <div class="top_seller_product_rating mb-15">
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                               <i class="fa fa-star" aria-hidden="true"></i>
                                           </div>
                                           <h5 class="price">$'.$item->new_price.' <span>$'.$item->old_price.'</span></h5>
                                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia expedita quibusdam aspernatur, sapiente consectetur accusantium perspiciatis praesentium eligendi, in fugiat?</p>
                                           <a href="#">View Full Product Details</a>
                                       </div>
                                       <!-- Add to Cart Form -->
                                       <form action="'.route('card.add').'" class="cart" method="post">
                                            '.csrf_field().'
                                           <div class="quantity">
                                               <span class="qty-minus" onclick="var effect = document.getElementById(\'qty\'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>

                                               <input type="hidden" name="itemId"  value="'.$itemId.'">
                                               <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">

                                               <span class="qty-plus" onclick="var effect = document.getElementById(\'qty\'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                           </div>';
                                           if(Self::checkItem($itemId)) {
                                               $val .= '<button type="buttom" value="5" class="cart-submit w3-orange">Remove from cart</button>';
                                           } else {
                                               $val .= '<button type="submit" name="addtocart" value="5" class="cart-submit">Add to cart</button>';
                                           }
                                           $val .= '
                                           <!-- Wishlist -->
                                           <div class="modal_pro_wishlist">
                                               <a href="#" target="_blank"><i class="ti-heart"></i></a>
                                           </div>
                                           <!-- Compare -->
                                           <div class="modal_pro_compare">
                                               <a href="#" target="_blank"><i class="ti-stats-up"></i></a>
                                           </div>
                                       </form>

                                       <div class="share_wf mt-30">
                                           <p>Share With Friend</p>
                                           <div class="_icon">
                                               <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                               <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                               <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                               <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       ';
       return $val;
    }


    public static function checkItem($itemId){
        if(auth()->check()){
            if(cart::where('item_id', $itemId)->where('user_id', Auth::user()->id)->exists()){
                return true;
            }
        }
        return false;
    }
}

