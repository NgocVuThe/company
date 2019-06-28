<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Repositories\ManagerRepositories\UserInterface;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserInterface $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->getAll();
        return view('management.admin_page.manager', compact('users'));
    }
}