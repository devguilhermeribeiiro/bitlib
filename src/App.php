<?php
namespace App;

use App\Routes\Router;

class App {
    public function run() {
        $router = new Router();

        $router::add('GET', '/', 'HomeController#index');

        $request_uri = $_SERVER['REQUEST_URI'];
        $request_method = $_SERVER['REQUEST_METHOD'];

        $router::resolve($request_uri, $request_method);
    }
}
