<?php

namespace App\Http\Controllers\head;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class header extends Controller
{
    public function title()
    {
      $array = [
        'title' => 'Main'
      ];

      return view('index', $array);
    }
}
