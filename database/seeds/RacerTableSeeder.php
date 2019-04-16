<?php

use Illuminate\Database\Seeder;
use App\Racer;
class RacerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $racer = new Racer();
       $racer->name='';
       $racer->save();
       $racer = new Racer();
       $racer->name='nigger2';
       $racer->save();

    }
}
