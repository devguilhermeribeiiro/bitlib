<?php

namespace App\Controllers;

class ErrorController {
    public function notFound() {
        http_response_code(404);
        echo "Erro 404 - Página não encontrada";
    }
}
