<?php

namespace App\Repositories\ManagerRepositories;

use App\Models\User;

class UserRepository implements UserInterface
{
    protected $user;

    public function __construct(User $user)
    {   
        $this->user = $user;
    }

    public function getAll()
    {
       return $this->user->all();
    }

    public function getById($id)
    {
        return $this->user->find($id);
    }

    public function create(array $data)
    {
        return $this->user->create($data);
    }

    public function update(array $data, $id)
    {
        return $this->user->find($id)->update($data);
    }

    public function delete($id)
    {

    }
}
