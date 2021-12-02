<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function home()
   {
        return view('frontend.index');
   }

   public function about()
   {
    return view('frontend.about');
   }

   public function category()
   {
    return view('frontend.category');
   }

   public function contact()
   {
    return view('frontend.contact');
   }

   public function profile()
   {
    return view('frontend.profile');
   }

   public function service()
   {
    return view('frontend.service');
   }

   public function shop()
   {
    return view('frontend.shop');
   }

   public function signup()
   {
    return view('frontend.signup');
   }
   public function login()
   {
    return view('frontend.login');
   }

}
