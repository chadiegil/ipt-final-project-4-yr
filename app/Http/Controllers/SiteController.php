<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Log;
class SiteController extends Controller
{

    public function logs() {
            $logs = auth()->user()->logs;
            return view('logs', compact('logs'));
    }
}
