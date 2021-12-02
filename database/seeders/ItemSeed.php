<?php

namespace Database\Seeders;

use App\Models\Items;
use Illuminate\Database\Seeder;

class ItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'category_id'=>'1',
               'name'=>'',
               'new_price'=>'$300',
               'old_price'=>'$250',
               'available'=>true,
               'profile' => '/img/new/',
            ],
        ];

        foreach ($user as $value) {
            Items::create($value);
        }
    }
}
