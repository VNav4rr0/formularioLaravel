<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class funcaoController extends Controller
{
    public function showForm()
    {
        return view('index');
    }

    public function handleForm(Request $request)
    {
        $data = $request->all();
        return view('index', ['data' => $data]);
    }
}
