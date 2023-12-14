<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = now()->format('Y-m-d');

        $trains = Train::all(); //where('departure_date', '=', $today)->get();

        return view('index', compact('trains'));
    }
}