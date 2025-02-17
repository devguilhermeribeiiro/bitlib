<?php

namespace App\Routes;

class Router {
    private static $routes = [];

    // Função para adicionar rotas dinamicamente
    public static function add($method, $route, $controllerAction, $middleware = null) {
        self::$routes[] = [
            'method' => $method,
            'route' => $route,
            'controllerAction' => $controllerAction,
            'middleware' => $middleware
        ];
    }

    // Função que faz o match entre a URL e as rotas registradas
    public static function resolve($requestUri, $requestMethod) {
        foreach (self::$routes as $route) {
            $pattern = "@^" . preg_replace('/\{([a-zA-Z0-9_]+)\}/', '([^/]+)', $route['route']) . "$@";

            if ($requestMethod === strtoupper($route['method']) && preg_match($pattern, $requestUri, $matches)) {
                array_shift($matches); // Remove o primeiro item, que é a rota completa

                if ($route['middleware']) {
                    // Aplica o middleware
                    $middlewareClass = "App\\Middlewares\\{$route['middleware']}";
                    if (class_exists($middlewareClass)) {
                        $middlewareClass::handle();
                    }
                }

                // Executa o controller e o método
                [$controller, $action] = explode('#', $route['controllerAction']);
                $controllerClass = "App\\Controllers\\$controller";
                if (class_exists($controllerClass) && method_exists($controllerClass, $action)) {
                    $controllerInstance = new $controllerClass();
                    call_user_func_array([$controllerInstance, $action], $matches);
                    return;
                }
            }
        }

        // Se não encontrar, chama o controlador de erro
        self::handleError();
    }

    // Função que gerencia erros 404
    private static function handleError() {
        $errorController = new \App\Controllers\ErrorController();
        $errorController->notFound();
    }
}
