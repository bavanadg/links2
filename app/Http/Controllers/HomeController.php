<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $links = \App\Models\Link::all();

        return view('welcome', ['links' => $links]);
    }

    public function submit()
    {
        return view('submit');
    }

    public function submitpost(Request $request)
    {
        // $title = $request->input('title');
        // $url = $request->url();
        // $discription = $request->discription();

    $data = $request->validate([

        'title' => 'required|max:255',

        'url' => 'required|url|max:255',

        'description' => 'required|max:255',

    ]);

    $link = tap(new App\Models\Link($data))->save();

    return redirect('/'); 
    }
    // public function home()
    // {
    //     return view('home');
    // }
}
