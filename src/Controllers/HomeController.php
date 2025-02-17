<?php

namespace App\Controllers;

class HomeController {
    public function index() {
        global $blade;

        $data = [
            "title" => "Home Page",
            "message" => "Bem-vindo ao Bitlib, sua Biblioteca online"
        ];

        echo $blade->make('home', $data)->render();
    }
}
