<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jorenvh\Share\Share;

class ShareController extends Controller
{

    public static function share($id)
    {

        Share::page('http://jorenvanhocht.be')->facebook();



        $data = [
            'id' => '1',
            'title' => "titleishare",
            'descrption' => 'test',
            'image' => 'cat.jpg'
        ];

        $shareButtons =Share::page(
            url('/share'),
            'here is the texrt'
        )->facebook()
            ->whatsapp()
            ->telegram()
            ->twitter();
 view('pages.share',compact('data','shareButtons'));
    }


}
