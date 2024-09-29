<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlaceController extends Controller
{
    public function showTotalTicket()
    {
//        $data = Place::withCount('ticket')->get();
        $data = DB::table('places')
            ->select('places.name', 'places.description', DB::raw('count(ticket.id) as total_ticket'))
            ->leftJoin('ticket', 'places.id', '=', 'ticket.place_id')
            ->groupBy('places.id', 'places.name', 'places.description')
            ->get();

        return view('place.totalticket', compact('data'));
    }
}
