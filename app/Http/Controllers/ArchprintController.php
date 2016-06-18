<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class ArchprintController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('archprint.home');
    }

    public function beneficios()
    {
        return view('archprint.beneficios');
    }

    public function somos()
    {
        return view('archprint.somos');
    }

    public function address()
    {
        return view('archprint.address');
    }

    public function delivery()
    {
        return view('archprint.delivery');
    }

    public function pago()
    {
        return view('archprint.pago');
    }

    public function orden()
    {
        return view('archprint.orden');
    }

    public function update()
    {
        return view('archprint.update');
    }

    public function file()
    {
        return redirect('update');
    }

    public function history()
    {
        return view('archprint.history');
    }
}
