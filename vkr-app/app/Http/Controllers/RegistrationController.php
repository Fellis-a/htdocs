<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
  public function submit(Request $req){
    $validation = $req-> validate([
      'password'='required|min:8'

    ]);
  }
}
