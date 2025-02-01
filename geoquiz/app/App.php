<?php

declare(strict_types=1);

function getTransactionFiles(string $dir_path): array
{
    $files = [];
    foreach (scandir($dir_path) as $file) {
        if (is_dir($dir_path . $file)) {
            continue;
        }
        $files[] = $dir_path . $file;
    }
    return $files;
}

function getTransactions(string $filename): array
{
    if (!file_exists($filename)) {
        trigger_error('File ' . $filename . " doesn't exist", E_USER_ERROR);
    }

    $file = fopen($filename, 'r');
    fgetcsv($file);
    $transactions = [];
    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractTransactions($transaction);
    }
    fclose($file);
    return $transactions;
}
function extractTransactions(array $transactionRow): array
{
    [$date, $checkNumber, $description, $amount] = $transactionRow;
    $amount = (float) str_replace(['$', ','], '', $amount);
    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount
    ];
}
function total(array $transactions): array
{
    $total = ['netTotal' => 0, 'totalIncome' => 0, 'totalExpense' => 0];
    foreach ($transactions as $transaction) {
        $total['netTotal'] += $transaction['amount'];
        if ($transaction['amount'] > 0) {
            $total['totalIncome'] += $transaction['amount'];
        } else {

            $total['totalExpense'] += $transaction['amount'];
        }
    }

    return $total;
}
