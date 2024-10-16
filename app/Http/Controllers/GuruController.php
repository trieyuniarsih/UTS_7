<?php

namespace App\Http\Controllers;

//import model guru
use App\Models\Guru; 

//import return type View
use Illuminate\View\View;

class GuruController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all gurus
        $gurus = Guru::latest()->paginate(10);

        //render view with gurus
        return view('gurus.index', compact('gurus'));
    }
}
