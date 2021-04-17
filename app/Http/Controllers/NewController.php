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

        $myID = "331";

        $length = 3;
        $characters = 'abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }

        $url = new Url;
        $url->LongUrl = $request->get('longUrl');
        $url->ShortUrl = ($myID).rand(0,9).rand(0,9).($randomString);

        $url->save();

        $count = Url::count();
        if ($count >10){
            $url->delete();
            return redirect('/')->with('delete','เกินกำหนด');
        }else{
            return redirect('/')->with('success','บันทึกเรียบร้อยแล้ว');
        }
    }

    public function check($code){
        $result = Url::Where('ShortUrl',$code)->first();
        if ($result){
            return redirect()->away($result->LongUrl);
        }
        return 'ไม่พบ Short URL นี้';
    }
}
