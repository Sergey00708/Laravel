<?php

namespace App\Http\Controllers;

class UsersController
{
    public function register()
    {
        return 'register method usersController';
    }

    public function auth()
    {
        return 'auth method usersController';
    }

    public function reed($id)
    {
        return 'reed method usersController'. $id;
    }

    public function delete($id)
    {
        return 'delete method usersController'. $id;
    }
}
