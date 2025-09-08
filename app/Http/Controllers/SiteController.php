<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function loadPage($page = 'index')
    {
        $viewPath = 'Site.' . str_replace('/', '.', $page);

        if (view()->exists($viewPath)) {
            return view($viewPath);
        }
        
        abort(404);
    }

}
