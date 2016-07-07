<?php 
namespace App\Http\Controllers;

use App\sampletable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class Usercontroller extends Controller
{
      public function postSignup(Request $request)
      {

      $email=$request['email'];
      $name=$request['name'];
      $password=bcrypt($request['password']);

          $sampletable = new sampletable();
       $sampletable->email=$email;
       $sampletable->name=$name;
       $sampletable->password=$password;

        $sampletable->save();
       return redirect()->back();
      }

}

