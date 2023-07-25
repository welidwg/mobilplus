<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    //
    function send(Request $request)
    {
        try {
            $this->validate($request, ['message' => 'bail|required']);
            Mail::to("walidgueddari1899@gmail.com")->bcc("test@gmail.com")->queue(new ContactMail($request->all()));
            return back()->with("success", "done");
        } catch (\Throwable $th) {
            return back()->with("error", $th->getMessage());
        }
    }
}
