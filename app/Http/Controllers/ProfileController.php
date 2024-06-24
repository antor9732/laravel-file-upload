<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        
        $name = "Donald Trump";
        $age = "75";

        
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookie_name = 'access_token';
        $cookie_value = '123-XYZ';
        $cookie_minutes = 1; 
        $cookie_path = '/';
        $cookie_domain = $_SERVER['SERVER_NAME'];
        $cookie_secure = false;  
        $cookie_httpOnly = true;

        $response = response($data, 200);
        $response->cookie(
            $cookie_name,
            $cookie_value,
            $cookie_minutes,
            $cookie_path,
            $cookie_domain,
            $cookie_secure,
            $cookie_httpOnly
        );

        return $response;
}
}
