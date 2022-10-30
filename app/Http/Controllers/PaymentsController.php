<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Services\DebtOrCreditCalculatorService;
use App\Services\WgSessionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PaymentsController extends Controller
{
    private WgSessionService $wgSessionService;

    private DebtOrCreditCalculatorService $debtOrCreditCalculatorService;

    public function __construct(WgSessionService $wgSessionService,
                                DebtOrCreditCalculatorService $debtOrCreditCalculatorService)
    {
        $this->wgSessionService = $wgSessionService;
        $this->debtOrCreditCalculatorService = $debtOrCreditCalculatorService;
    }

    public function index() : View
    {
        $payments = Payment::where('group_id', $this->wgSessionService->getGroupId())->where('closed', 0)->get();
        $debtOrCredits = $this->debtOrCreditCalculatorService->calculateDebtOrCredit(
            $payments->pluck('id')->toArray(), $this->wgSessionService->getUserId());

        return view('payments.overview', [
            'payments' => $payments,
            'debtOrCredits' => $debtOrCredits,
        ]);
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
