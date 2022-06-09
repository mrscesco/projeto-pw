<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gender;

class GenderController extends Controller
{
    public function index() {
        $gender = New Gender();
        
        return $gender::all();
    }

    public function store(Request $request) {
        $gender = new Gender();

    }
}
