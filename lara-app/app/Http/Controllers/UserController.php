<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    /**
     * @brief user search function using ajax
     *
     * @param   Request     $request
     *
     * @return  Response 
     */
    public function searchUser(Request $request)
    {
    
    }

    public function updateUser(Request $request)
    {

    }

    public function deleteUser()
    {

    }
}
