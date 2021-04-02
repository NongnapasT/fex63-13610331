<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function index(){
        return view('new');
    }

    public function short(Request $request){
        $request->validate([
           'longUrl' => 'required',
        ]);

        $length = 3;
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $url = new Url;
        $url->LongUrl = $request->get('longUrl');
        $url->ShortUrl = "short.local/gt/331".rand(0,10).($randomString);


        $url->save();

        return redirect('/new');
    }
}
