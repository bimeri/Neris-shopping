<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Items extends Model
{
    use HasFactory, Notifiable;

    /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
    protected $fillable = [
        'category_id',
        'name',
        'new_price',
        'old_price',
        'available',
        'profile',

    ];

    public function itemdetails(){
        return $this->hasMany(Itemdetail::class);
    }

    public function carts(){
        return $this->hasMany(cart::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
