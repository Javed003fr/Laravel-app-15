<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Cookie;


class ProfileController extends Controller
{
    public function index($id){
        $name = "Donal Trump";
        $age = "75";
        
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        $cookieName = 'access-token';
        $cookieValue = '123-XYZ';
        $cookieMinute = '1';
        $cookiePath = '/';
        $cookieDomain = $_SERVER['SERVER_NAME'];
        $cookieSecure = false;
        $cookieHttpOnly = true;

        $response = new Response(json_encode($data));
        $response->header('Content-Type', 'application/json');

        $response->withCookie(cookie($cookieName,$cookieValue,$cookieMinute,$cookiePath,$cookieDomain,$cookieSecure,$cookieHttpOnly));

        return $response;
    }
}
