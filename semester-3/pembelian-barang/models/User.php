<?php

include 'models/Crud.php';

class User extends Crud
{
    public mixed $users;

    public function __construct()
    {
        $this->users = [
            [
                'id' => 1,
                'name' => 'Huda Prasetyo',
                'email' => 'huda.prasetyo@widyatama.ac.id',
                'password' => '123321',
                'role' => 'Admin',
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ],
            [
                'id' => 2,
                'name' => 'Muhammad Ridwan Rachmat',
                'email' => 'muhammad.ridwan@telkom.co.id',
                'password' => '123321',
                'role' => 'User',
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ],
            [
                'id' => 3,
                'name' => 'Sulthan Ashil Zafar Olii',
                'email' => 'sulthan@telkom.co.id',
                'password' => '123321',
                'role' => 'User',
                'created_at' => '2023-07-04',
                'updated_at' => '2023-07-04'
            ]
        ];
    }

    public function index()
    {
        return $this->users;
    }

    public function store(mixed $user)
    {
        $this->users = [...$this->users, $user];

        return $this->users;
    }

    public function show(int $id)
    {
        $userDetail = null;

        foreach ($this->users as $user) {
            if ($user['id'] === $id) {
                $userDetail = $user;
            }
        }

        return $userDetail;
    }

    public function update(int $id, mixed $name)
    {
        $userDetail = null;

        foreach ($this->users as $user) {
            if ($user['id'] === $id) {
                $userDetail = $user;
                $userDetail['name'] = $name;
            }
        }

        return $userDetail;
    }

    public function destroy(int $id)
    {
        $this->users = array_filter($this->users, function ($user) use ($id) {
            return ($user['id'] !== $id);
        });

        return $this->users;
    }
}