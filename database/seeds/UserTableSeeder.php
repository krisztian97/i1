<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name='constee';
        $user->email='asd@asd.hu';
        $user->password=Hash::make('asdasdasd');
        $user->save();
    }
}
