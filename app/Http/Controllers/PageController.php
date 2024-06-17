<?php

// app/Http/Controllers/PageController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function blank()
    {
        return view('blank');
    }

    public function tables()
    {
        return view('tables');
    }

    public function forms()
    {
        return view('forms');
    }

    public function tabs()
    {
        return view('tabs');
    }

    public function calendar()
    {
        return view('calendar');
    }
}
