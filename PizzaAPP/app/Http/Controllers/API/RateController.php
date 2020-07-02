<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rate::latest()->first();
    }

}
