<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vkrs;
use App\Models\specialty;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class VkrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      //$vkrs = DB::table('vkrs')->simplePaginate(8);
      //->paginate(15)
      $vkrs = vkrs::with('specialty')->simplePaginate(15);
      $user = vkrs::with('user')->simplePaginate(15);
      //$specialty = specialty::with('vkrs')->get();
      //$specialty = DB::table('specialties')
        //    ->select('code')
            //->get();
      //$user = DB::table('Users')->get();
      //$user = User::with('vkrs')->get();
      //User::find(1)->roles;
     return view('welcome', compact('vkrs','user'));
        // return view('comp.contentAll', ['vkrs' => vkrs::all()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id_vkr
     * @return \Illuminate\Http\Response
     */
    public function showOneVkr($id_vkr){
        view ('user.vkr.show');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
          'title' => 'required',
          'year' => 'required',
          'mark' => 'required'
      ]);

      vkrs::create($request->all());

      return redirect()->route('vkrs.index')
          ->with('success', 'Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
