<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Question\Question;
use App\Model\Level\Level;

class DashboardController extends Controller
{
    public function index()
    {
        
        $params = [
            'soalCount' => count(Question::all()),
            'levelCount' => count(Level::all()),
        ];

        return view('dashboard.index', ['params' => $params]);
    }
}
