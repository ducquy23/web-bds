<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index()
    {
        return view('properties.index');
    }

    public function show($id)
    {
        return view('properties.show', ['id' => $id]);
    }
}

