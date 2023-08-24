<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mews\Captcha\Facades\Captcha;
use App\Models\Comment;

class CaptchaController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function reloadCaptcha()
    {
        return response()->json(['captcha' =>captcha_img('flat')]);
    }
    public function post(Request $request){
        $request->validate([ 
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'captcha' => 'required|captcha',
        ]);
        return "The Form Has Been Successfull Submited!!!!!!";
    }

    public function add_comment(Request $request){
        $comment=new comment;
        $comment ->name = $request->name;
        $comment->user_id = $request->user_id;
        $comment ->comment = $request->comment;
        $comment ->save();
        return redirect()->back();

    }
}