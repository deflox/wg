<?php

namespace App\Http\Controllers;

use App\Services\WgSessionService;
use Illuminate\View\View;

class IndexController extends Controller
{
    private WgSessionService $wgSessionService;

    public function __construct(WgSessionService $wgSessionService)
    {
        $this->wgSessionService = $wgSessionService;
    }

    public function index() : View
    {
        if ($this->wgSessionService->expired()) {
            return view('payments.overview');
        }

        return view('payments.overview');
    }
}
