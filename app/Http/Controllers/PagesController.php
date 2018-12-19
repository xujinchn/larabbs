<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function root()
    {
//        $aa =DB::table('test')->orderBy('id','desc')->first();
//
//        $bb = strip_tags(trim($aa->content));
//        print_r($bb);exit;
        return view('pages.root');
    }
}
