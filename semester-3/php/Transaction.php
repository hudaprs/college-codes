<?php

class Transaction
{
    public mixed $transactions;

    public function __construct()
    {
        $this->transactions = [
            [
                'id' => 1,
                'product_name' => 'Sabun Mandi',
                'product_description' => 'Sabun untuk mandi',
                'product_price' => 4500,
                'status' => 'Submit',
                'quantity' => 1,
                'user_id' => 1,
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ],
            [
                'id' => 2,
                'product_name' => 'Dettol',
                'product_description' => 'Sabun untuk gatal-gatal',
                'product_price' => 10000,
                'status' => 'Submit',
                'quantity' => 1,
                'user_id' => 1,
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ],
            [
                'id' => 3,
                'product_name' => 'Shampo Clear',
                'product_description' => 'Sabun yang disponsori oleh C.Ronaldo',
                'product_price' => 13500,
                'status' => 'Submit',
                'quantity' => 1,
                'user_id' => 1,
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ]
        ];
    }

    public function index()
    {
        return $this->transactions;
    }

    public function store(mixed $user)
    {
        $this->transactions = [...$this->transactions, $user];

        return $this->transactions;
    }

    public function show(int $id)
    {
        $transactionDetail = null;

        foreach ($this->transactions as $transaction) {
            if ($transaction['id'] === $id) {
                $transactionDetail = $transaction;
            }
        }

        return $transactionDetail;
    }

    public function cancel(int $id, string $status)
    {
        $transactionDetail = null;

        foreach ($this->transactions as $transaction) {
            if ($transaction['id'] === $id) {
                $transactionDetail = $transaction;
                $transaction['status'] = $status;
            }
        }

        return $transactionDetail;
    }
}