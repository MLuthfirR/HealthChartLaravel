<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pulse;
use App\Charts\PulseChart;

class PulseController extends Controller
{
    public function index()
    {
        $pulses = Pulse::orderBy('created_at')->pluck('value', 'created_at');
        
        // Fake Chart
        $chart = new PulseChart;
        $chart->labels($pulses->keys());
        $chart->dataset('My Pulses', 'line', $pulses->values());


        return view('pulse.index', compact('pulses', 'chart'));
    }
}
