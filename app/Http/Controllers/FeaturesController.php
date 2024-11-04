<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function tampil()
    {
        return view('features'); // Pastikan Anda memiliki file view contact.blade.php
    }
}
