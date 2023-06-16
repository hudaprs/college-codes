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
                'stock' => 10,
                'price' => 10000,
                'user_id' => 1,
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ],
            [
                'id' => 3,
                'name' => 'Shampo Clear',
                'description' => 'Sabun yang disponsori oleh C.Ronaldo',
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

    public function store(mixed $user)
    {
        $this->products = [...$this->products, $user];

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

    public function update(int $id, string $name)
    {
        $productDetail = null;

        foreach ($this->products as $user) {
            if ($user['id'] === $id) {
                $productDetail = $user;
                $productDetail['name'] = $name;
            }
        }

        return $productDetail;
    }

    public function destroy(int $id)
    {
        $this->users = array_filter($this->users, function ($user) use ($id) {
            return ($user['id'] !== $id);
        });

        return $this->users;
    }
}