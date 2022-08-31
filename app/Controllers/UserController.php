<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function users()
    {
        echo json_encode(User::all());
    }
}
