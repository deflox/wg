<?php

namespace App\Services;

use App\Models\Payment;

class DebtOrCreditCalculatorService
{
    public function calculateTotalDebtOrCredit(int $groupId, int $userId) : array
    {
        return [];
    }

    /**
     * Calculates the debt or credit for each payment with the ids given.
     *
     * @param array $paymentIds payment ids to calculate debt or credit
     * @param int $userId user id of the user for which the debt or credit is calculated
     * @return array array returning the positive or negative value for each payment id
     */
    public function calculateDebtOrCredit(array $paymentIds, int $userId) : array
    {
        $out = [];

        $payments = Payment::with([
                'transactions',
                'transactions.user',
                'transactions.debtors',
                'transactions.debtors.user'
            ])
            ->whereIn('id', $paymentIds)
            ->get();

        foreach ($payments as $payment) {
            $debtOrCredit = 0;
            foreach ($payment->transactions as $transaction) {
                foreach ($transaction->debtors as $debtor) {
                    if ($transaction->user->id === $userId) {
                        $debtOrCredit += $debtor->amount;
                    } else if ($debtor->user->id === $userId) {
                        $debtOrCredit -= $debtor->amount;
                    }
                }
            }

            $out[$payment->id] = round($debtOrCredit, 2);
        }

        return $out;
    }
}
