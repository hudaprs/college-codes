<?php

class Transaction
{
    public mixed $transactions;

    public function __construct()
    {
        $this->transactions = [
            [
                'id' => 1,
                'product_name' => 'Shampo Clear',
                'product_description' => 'Sabun yang disponsori Ronaldo',
                'product_price' => 13500,
                'product_image' => 'clear.avif',
                'status' => 'Submit',
                'quantity' => 1,
                'user_id' => 1,
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ],
        ];
    }

    public function index()
    {
        return $this->transactions;
    }

    public function store(mixed $transaction)
    {
        $this->transactions = [...$this->transactions, $transaction];

        return $this->transactions;
    }
}