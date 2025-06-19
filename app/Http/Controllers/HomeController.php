<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    public function index()
    {
        $title = config('studio.studio_description.title');
        
        return view('pages.home', compact(
            'title',
        ));    
    }

}
