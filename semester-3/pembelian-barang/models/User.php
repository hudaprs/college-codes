<?php

class User
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

    public function update(int $id, string $name)
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

// All Users
$user = new User;
echo "all users: <br /> " . json_encode($user->index());
echo "<br /> <hr />";

// Create user
$user->store([
    'id' => 2,
    'name' => 'Huda Prasetyo 2',
    'email' => 'huda.prasetyo2@widyatama.ac.id',
    'password' => '123321',
    'role' => 'User',
    'created_at' => '2023-07-04',
    'updated_at' => '2023-07-04'
]);
echo "all users with new users: <br />" . json_encode($user->index());
echo "<br /> <hr />";

// Get single user
echo "single user: <br />" . json_encode($user->show(1));
echo "<br /> <hr />";

// Update user
echo "update user: <br />" . json_encode($user->update(1, "Updated"));
echo "<br /> <hr />";

// Destroy user
echo "delete users: <br />" . json_encode($user->destroy(2));