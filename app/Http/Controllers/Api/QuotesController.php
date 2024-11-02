<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuotesController extends Controller
{
    public function get_quotes(){
        $quotes = get_kanye_quotes();
        $response = [
            'status' => true,
            'quotes' => $quotes 
        ];
        return response()->json($response, 200);
    }
}
