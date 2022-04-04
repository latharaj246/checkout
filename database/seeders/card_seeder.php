<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\card;

class card_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $c=new card();
        $c->cardno=rand(pow(10,13),pow(10,14)-1);
        //  746175896602411009
        $c->mm=10;
        $c->yy=23;
        $c->cvv=rand(pow(10, 2), pow(10, 3)-1);
        $c->child_id= 746180656926392321  ;
        $c->save();

        
    }
}