<?php

namespace App\Http\Controllers;

use App\Racer;
use App\Team;
use Illuminate\Http\Request;

class BackEndController extends Controller
{
   public function newTeamForm(){
       return view('newTeam',[
           'Racers'=>Racer::all(),
           'Teams'=>Team::all()
           ]) ;
   }
   public function createTeam(){

   }
}
