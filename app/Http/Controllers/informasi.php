<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class informasi extends Controller
{
    //
    public function informasi($id)
    {
        return view('informasi');
    }
}
