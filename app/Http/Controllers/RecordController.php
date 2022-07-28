<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        return Inertia::render('Recording');
    }

    //store
    public function store(Request $request)
    {
        //Not storing any data in the database.
        //So we just return to recording page.
        return redirect()->route('records.index');
    }
}
