<?php

namespace App\Http\Controllers;

use App\Events\AlertEvent;
use Illuminate\Http\Request;

class AlertController extends Controller
{
    //
    public function alert(Request $req)
    {
        # code...
        $message = $req->message;
        // dd($message);
        broadcast(new AlertEvent($message));
    }
}
