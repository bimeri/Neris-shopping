<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory, Notifiable;
    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
      protected $fillable = ['name', 'filter'];

      public function items(){
        return $this->hasMany(Item::class);
    }

    public static function getCategories(){
        $val = '<button class="btn active" data-filter="*">ALL</button>';
        foreach(Category::all() as $cat) {
            $val .= '<button class="btn" data-filter=".'.$cat->filter.'">'.$cat->name.'</button>';
        }
        return $val;
    }

    public static function sidenav(){

        $val = '';
        foreach(Category::all() as $cat){
        $val .= '<li data-toggle="collapse" data-target="#'.$cat->filter.'" class="collapsed active">
                <a href="#">'.$cat->name.' <span class="arrow"></span></a>
                <ul class="sub-menu collapse" id="'.$cat->filter.'">';
                $items = Items::where('category_id', $cat->id)->get();
                foreach ($items as $item) {
                    $val .= '<li><a href="#">'.$item->name.'</a></li>';
                }
        $val .= '
                </ul>
            </li>';
        }
        return $val;
    }
}
