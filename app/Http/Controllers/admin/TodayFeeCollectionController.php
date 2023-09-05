<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TodayFeeCollectionController extends Controller
{
    public function TodayFeeCollection()
    {
        return view('admin.pages.Today_Fee_Collection');
    }
}
