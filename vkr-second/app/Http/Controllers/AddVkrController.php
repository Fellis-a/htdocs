<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddVkrRequest;
use App\Models\vkrs;
use App\Models\specialty;
use Illuminate\Support\Facades\DB;

class AddVkrController extends Controller
{
          public function store(AddVkrRequest $req){
                    $req->merge(['user_id' => auth()->user()->id]);
                    $newVkr = new vkrs();
                    $newVkr->title = $req -> input('title');
                    $newVkr->year = $req -> input('year');
                    $newVkr->mark = $req -> input('mark');
                    $newVkr->essay = $req -> input('essay');
                    $newVkr->tech = $req -> input('tech');

                    $newVkr->save();
                    $newVkr->redirect()->route('home')->with('success', 'ВКР успешно добавлена');//переадресация на главную страницу


          }

          public function create(){

                    //$specialty = specialty::with('vkrs')->get();
                    $specialty = DB::table('specialty');
                    $code = $specialty->code;
                    return view('user.vkr.vkrForm', compact('specialty', 'code'));
          }
}
