<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ReservationController extends Controller
{
    public function index()
    {
        $reservations=Reservation::all();
        return view('reservationlayout.list',compact('reservations'));
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'date' => 'required',
            'time' => 'required',
            'person' => 'required',
        ]);
        if ($validator->passes()) {
            $reservation=[
                "name"=>"$request->name",
                "email"=>"$request->email",
                "date"=>"$request->date",
                "time"=>"$request->time",
                "person"=>"$request->person"

            ];
            Reservation::firstOrCreate($reservation);
            return redirect()->route('reservationlayout.index')->with('success', 'Rezervasyon İşleminiz Başarıyla Gerçekleştirildi.');
        }
        return redirect()->route('reservationlayout.index')->with('error', 'Rezervasyon İşleminiz Yapılamadı.');

    }
}
