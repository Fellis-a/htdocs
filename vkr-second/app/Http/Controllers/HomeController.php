<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vkrs;
use App\Models\specialty;
use App\Models\User;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $auth = auth()->user();
        //$user = User::where('id','=',$auth->id);
        //$vkrsa = DB::table('vkrs');
        $vkrs = $auth->vkrs;
        $specialty = specialty::with('vkrs')->get();
        //$specialty = $vkrs->specialty;
        //$code = $specialty ->code;
        //$vkrsSpec = specialty::with('vkrs')->get()->find($specialty);
        //$spec_id = $vkrs->specialty->specialty_id;
        //$specInfo = specialty::with('vkrs')->get()->find($specialty_id);

        /*$reservation = Reservation::with('room', 'room.hotel')->get()->find($reservation->id);
        $hotel_id = $reservation->room->hotel_id;
        $hotelInfo = Hotel::with('rooms')->get()->find($hotel_id);

        $specialty = specialties::with('vkrs')->get();
        $specialty_id = $reservation->room->hotel_id;
        $hotelInfo = Hotel::with('rooms')->get()->find($hotel_id);*/

        return view('home', compact('vkrs','specialty'));
    }
}
