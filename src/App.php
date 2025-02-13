<?php
namespace Bitlib;

class App {
    public function run() {
        echo "Aplicação rodando com PHP, Nginx e PostgreSQL!";
        echo "</br>";
        echo $_SERVER['REQUEST_METHOD'];
    }
}
