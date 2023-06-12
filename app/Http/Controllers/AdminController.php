<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Investor;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return Inertia::render('Dashboard');
    }

    public function Catalogue()
    {
        $tapioca = Catalogue::where('categories', 'tapioca pearls')->get();
        $sauce = Catalogue::where('categories', 'sauce')->get();
        $jelly = Catalogue::where('categories', 'jelly')->get();
        $syrup = Catalogue::where('categories', 'syrup')->get();
        $other = Catalogue::where('categories', 'other')->get();
        return Inertia::render('Catalogue', [
            'tapioca' => $tapioca,
            'sauce' => $sauce,
            'jelly' => $jelly,
            'syrup' => $syrup,
            'other' => $other,
        ]);
    }

    public function Investor()
    {
        $annual = Investor::where('category', 'annual')->get();
        $cd = Investor::where('category', 'cd')->get();
        $cp = Investor::where('category', 'cp')->get();
        $csr = Investor::where('category', 'csr')->get();
        $financial = Investor::where('category', 'financial')->get();
        $gms = Investor::where('category', 'gms')->get();
        $press = Investor::where('category', 'press')->get();
        $sustain = Investor::where('category', 'sustain')->get();
        return Inertia::render('Investor', [
            'annual' => $annual,
            'cd' => $cd,
            'cp' => $cp,
            'csr' => $csr,
            'financial' => $financial,
            'gms' => $gms,
            'press' => $press,
            'sustain' => $sustain,
        ]);
    }
}
