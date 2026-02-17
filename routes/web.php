<?php

use App\Models\User;
use App\Models\Userphone;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $users = User::all();

    // $userPhone = User::find(2)->userPhone;
   

    // foreach($user as $joinData){
    //     return $joinData->name.'<br>'.$joinData->userPhone->id;
    // }

     $userPhones = Userphone::all();
    //  foreach($userPhones as $users){
    //     return $users->userphone."<br>".$users->user->name;
    //  }

    

    return view('welcome', compact('users'));

});
