<?php

namespace App\Http\Controllers;

use App\Mail\sendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\FuncCall;

class sendMailController extends Controller
{
    public function enviarMail(Request $request)
    {

        $correo = new sendContact;
        Mail::to('yonathan_ramosme@fet.edu.co')->send($correo);
        return   response()->json([
            'send=' => 'OK'
        ]);
    }
}
