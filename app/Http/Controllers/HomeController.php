<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Messsage;
use App\Models\Product;
use App\Models\Review;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Context;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('home.index');
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function login()
    {
        return view('admin.login');
    }
    public function logout(Request $request)
    {
       Auth::logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect('admin/login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post'))
        {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else
        {
            return view('admin.login');
        }
    }





    /*public function test($id,$name)
    {
        $data['id']=$id;
        $data['name']=$name;


        return view('home.test',$data);//['id'=>$id,'name'=>$name]);*/

        /*
        echo" ıd number : ",$id;
        echo"<br>name : ",$name;

        for($i=1;$i<=$id;$i++){
            echo"<br> $i-$name";
        }
        */

}
