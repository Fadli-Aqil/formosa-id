<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use App\Models\Investor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Response;

class PageController extends Controller
{
    public $localize;
    public $lang = [
        [
            'name' => 'English (US)',
            'code' => 'en'
        ],
        [
            'name' => 'Indonesia',
            'code' => 'id'
        ],
        [
            'name' => '简体中文',
            'code' => 'cn'
        ],
    ];

    public function __construct(Request $request)
    {
        $query = $request->query('lang');
        if($query){
            if(!in_array($query,['en', 'in', 'cn'])){
                $this->localize = 'en';
                App::setLocale('en');
            }else{
                $this->localize = $query;
                App::setLocale($query);
            }
        }else{
            $this->localize = 'en';
            App::setLocale('en');
        }
    }

    public function index()
    {
        return view('pages.index', [
            'lang' => $this->lang,
            'localize' => $this->localize,
        ]);
    }

    public function investor()
    {
        $annual = Investor::where('category', 'annual')->get();
        $cd = Investor::where('category', 'cd')->get();
        $cp = Investor::where('category', 'cp')->get();
        $csr = Investor::where('category', 'csr')->get();
        $financial = Investor::where('category', 'financial')->get();
        $gms = Investor::where('category', 'gms')->get();
        $press = Investor::where('category', 'press')->get();
        $sustain = Investor::where('category', 'sustain')->get();

        return view('pages.investor', [
            'lang' => $this->lang,
            'localize' => $this->localize,
            'annual' => $annual,
            'cd' => $cd,
            'cp' => $cp,
            'csr' => $csr,
            'financial' => $financial,
            'gms' => $gms,
            'press' => $press,
            'sustain' => $sustain
        ]);
    }

    public function catalogue()
    {
        $tapioca = Catalogue::where('categories', 'tapioca pearls')->get();
        $sauce = Catalogue::where('categories', 'sauce')->get();
        $jelly = Catalogue::where('categories', 'jelly')->get();
        $syrup = Catalogue::where('categories', 'syrup')->get();
        $other = Catalogue::where('categories', 'other')->get();
        
        $catalog['tapioca'] = $tapioca;
        $catalog['sauce'] = $sauce;
        $catalog['jelly'] = $jelly;
        $catalog['syrup'] = $syrup;
        $other['other'] = $other;

        return view('pages.catalogue', [
            'lang' => $this->lang,
            'localize' => $this->localize,
            'catalog' => $catalog
        ]);
    }

    public function download(Request $request) 
    {
        $target = $request->query('file');
        $select = Investor::where('name', $target)->where('category', $request->query('category'))->first();
        if($select){
            $file= public_path(). "/assets/files/";
            $headers = [
                'Content-Type' => 'application/pdf',
            ];
            return Response::download($file . $select->file, $select->file, $headers);
        }
        return abort(404);
    }
}
