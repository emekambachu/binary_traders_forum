<?php

namespace App\Http\Controllers;

use App\InvestmentPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function investmentPackages()
    {
        $packages = InvestmentPackage::all();
        return view('investment-packages', compact('packages'));
    }
}
