<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PaymentsController extends Controller
{
    public function index() : View
    {
        return view('payments.overview');
    }

    public function create() : View
    {
        return view('payments.payment');
    }

    public function store() : RedirectResponse
    {

    }

    public function show() : View
    {

    }

    public function edit() : RedirectResponse
    {

    }
}
