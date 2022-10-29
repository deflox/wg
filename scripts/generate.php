<?php

$file1 = file_get_contents('./response1.json', true);
$file2 = file_get_contents('./response2.json', true);

$json1 = json_decode($file1, true);
$json2 = json_decode($file2, true);

// 1382610 -> kai
// 1383321 -> leo

$userMappings = [
	1382610 => 'UserSeeder::ID_KAI',
	1383321 => 'UserSeeder::ID_LEO',
];

$templatePayment = "
DB::table('payments')->insert([
    'id' => <payment-id>,
    'title' => '<payment-title>',
    'closed' => 0,
    'group_id' => GroupSeeder::ID,
    'created_at' => now(),
    'updated_at' => now(),
]);
";

$templateTransaction = "
DB::table('transactions')->insert([
    'id' => <transaction-id>,
    'description' => '<transaction-title>',
    'amount' => <transaction-amount>,
    'share_type_id' => 1,
	'user_id' => <transaction-user-id>,
	'payment_id' => <transaction-payment-id>,
    'created_at' => now(),
    'updated_at' => now(),
]);
";

$templateDeptor = "
DB::table('debtors')->insert([
    'id' => <debtor-id>,
    'amount' => <debtor-amount>,
    'user_id' => <debtor-user-id>,
	'transaction_id' => <debtor-transaction-id>,
    'created_at' => now(),
    'updated_at' => now(),
]);
";

$paymentsCounter = 0;
$transactionsCounter = 0;
$debtorsCounter = 0;

function write_payment($title) {
	global $paymentsCounter, $templatePayment;
	$paymentsCounter += 1;
	$out = $templatePayment;
	$out = str_replace('<payment-id>', $paymentsCounter, $out);
	$out = str_replace('<payment-title>', $title, $out);
	file_put_contents('out/payments.php', $out, FILE_APPEND);
	return $paymentsCounter;
}

function write_transaction($title, $amount, $userId, $paymentId) {
	global $transactionsCounter, $templateTransaction;
	$transactionsCounter += 1;
	$out = $templateTransaction;
	$title = str_replace("'", "\'", $title);
	$out = str_replace('<transaction-id>', $transactionsCounter, $out);
	$out = str_replace('<transaction-title>', $title, $out);
	$out = str_replace('<transaction-amount>', $amount, $out);
	$out = str_replace('<transaction-user-id>', $userId, $out);
	$out = str_replace('<transaction-payment-id>', $paymentId, $out);
	file_put_contents('out/transactions.php', $out, FILE_APPEND);
	return $transactionsCounter;
}

function write_debtor($amount, $userId, $transactionId) {
	global $debtorsCounter, $templateDeptor;
	$debtorsCounter += 1;
	$out = $templateDeptor;
	$out = str_replace('<debtor-id>', $debtorsCounter, $out);
	$out = str_replace('<debtor-amount>', $amount, $out);
	$out = str_replace('<debtor-user-id>', $userId, $out);
	$out = str_replace('<debtor-transaction-id>', $transactionId, $out);
	file_put_contents('out/debtors.php', $out, FILE_APPEND);
	return $debtorsCounter;
}

function get_other_user($userId) {
	global $userMappings;
	foreach ($userMappings as $key => $value) {
		if ($key != $userId) {
			return $value;
		}
	}
}

function process($json) {
	global $userMappings;
	
	foreach ($json as $payment) {
		foreach ($payment as $paymentKey => $paymentValue) {
			if ($paymentKey === 'name') {
				$paymentId = write_payment($paymentValue);
			}
			
			if ($paymentKey === 'items') {
				
				foreach ($paymentValue as $item) {
					$buyerUserId = 0;
					$transactionTitle = '';
					$transactionAmount = 0;
					$transactionUserId = 0;
					$debtors = [];
					
					foreach ($item as $itemKey => $itemValue) {
						if ($itemKey === 'name') {
							$transactionTitle = $itemValue;
						}
						if ($itemKey === 'price') {
							$transactionAmount = $itemValue;
						}
						if ($itemKey === 'buyer') {
							$buyerUserId = $itemValue;
							$transactionUserId = $userMappings[$itemValue];
						}
						if ($itemKey === 'sharers') {
							foreach ($itemValue as $sharer) {
								array_push($debtors, $sharer);
							}
						}
					}
					
					$transactionId = write_transaction($transactionTitle, $transactionAmount, $transactionUserId, $paymentId);
						
					if (count($debtors) === 2) {
						write_debtor($transactionAmount / 2, get_other_user($buyerUserId), $transactionId);
					} else if ($userMappings[$debtors[0]] !== $transactionUserId) {
						write_debtor($transactionAmount, get_other_user($buyerUserId), $transactionId);
					}
					
					
				}
			}
			
		}
	}
}

process($json1);
process($json2);