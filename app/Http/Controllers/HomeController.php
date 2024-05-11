<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $user = auth()->user();
        $academic = $user->hasRole('academic');
        $admin = $user->hasRole('admin');
        $finance = $user->hasRole('finance');
        $lecture = $user->hasRole('lecture');
        $pddikti = $user->hasRole('pddikti');
        $student = $user->hasRole('student');

        if ($academic) {
            return redirect()->route('academic.home');
        }

        if ($admin) {
            return redirect()->route('admin.home');
        }

        if ($finance) {
            return redirect()->route('finance.home');
        }

        if ($lecture) {
            return redirect()->route('lecture.home');
        }

        if ($pddikti) {
            return redirect()->route('pddikti.home');
        }

        if ($student) {
            return redirect()->route('student.home');
        }
        
        return view('home');
    }
}
