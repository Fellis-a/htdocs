<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class AuthorizationController extends Controller{

    public function submitAuth(ContactRequest $request){
      protected $redirectTo = '/user/teacherView';
    }
}
