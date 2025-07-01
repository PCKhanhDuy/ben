<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class TestController extends Controller
{
    public function index()
    {
        $title = config('studio.studio_description.title');
        
        return view('pages.test', compact(
            'title',
        ));    
    }

}
