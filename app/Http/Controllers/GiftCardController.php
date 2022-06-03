<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GiftCardController extends Controller
{
    public function index() {

        return view('index');
    }

    public function register() {
        return view('link_form.form');
    }

    public function form_next() {
        return view('link_form.form_next');
    }







}


