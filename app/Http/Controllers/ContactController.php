<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index() {
        return view('template.contact', [
            'title' => 'Contact'
        ]);
    }

    public function store(Request $request){
         dd($request);
    }
}
