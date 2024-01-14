<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailTestingController extends Controller
{

    public function start(Request $request){

Mail::to($request->user())->send(new TestMail());

    }

    public function ship(Request $request){

        return "ship";
    }

    public function complete(Request $request){

        return "complete";
    }

}
