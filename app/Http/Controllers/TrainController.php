<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller {

    public function index() {
        $trains = collect();
        return view('index', compact('trains'));
    }
    public function allTrains() {
        $trains = Train::all();
        return view('allTrains', compact('trains'));
    }

    public function todayTrains() {
        $today = now()->format('Y-m-d');
        $trains = Train::whereDate('departure_date', $today)->get();
        return view('todayTrains', compact('trains'));
    }

}