<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function tampil()
    {
        return view('contact'); // Pastikan Anda memiliki file view contact.blade.php
    }
}
