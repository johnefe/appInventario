<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notification;
use Auth;

class NotificationController extends Controller
{

    public function get(){

       // return Notification::all();
       return Auth::user()->notifications;
    }
}
