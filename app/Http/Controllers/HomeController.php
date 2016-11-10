<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Posting;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = posting::all();
        return view('home',['data' => $data]);
    }

    public function Store(Request $Request)
    {
        $this->validate($Request, [
            'pos' => 'required|min:2'
        ]);

        $postingan = new Posting;
        $postingan->posting = $Request->pos;
        $postingan->id_user = $Request->id_user;
        $postingan->save();

        return redirect('home');
    }
}
