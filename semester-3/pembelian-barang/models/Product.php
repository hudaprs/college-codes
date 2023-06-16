<?php

class Product
{
    public mixed $products;

    public function __construct()
    {
        $this->products = [
            [
                'id' => 1,
                'name' => 'Sabun Mandi',
                'description' => 'Sabun untuk mandi',
                'image' => 'sabun.png',
                'stock' => 10,
                'price' => 4500,
                'user_id' => 1,
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ],
            [
                'id' => 2,
                'name' => 'Dettol',
                'description' => 'Sabun untuk gatal-gatal',
                'image' => 'dettol.png',
                'stock' => 10,
                'price' => 10000,
                'user_id' => 1,
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ],
            [
                'id' => 3,
                'name' => 'Shampo Clear',
                'description' => 'Sabun yang disponsori Ronaldo',
                'image' => 'clear.avif',
                'stock' => 100,
                'price' => 13500,
                'user_id' => 1,
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ]
        ];
    }

    public function index()
    {
        return $this->products;
    }

    public function store(mixed $product)
    {
        $this->products = [...$this->products, $product];

        return $this->products;
    }

    public function show(int $id)
    {
        $productDetail = null;

        foreach ($this->products as $product) {
            if ($product['id'] === $id) {
                $productDetail = $product;
            }
        }

        return $productDetail;
    }
}