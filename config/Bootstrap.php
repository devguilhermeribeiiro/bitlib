<?php

use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Events\Dispatcher;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Engines\PhpEngine;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Compilers\BladeCompiler;

// Definição dos caminhos das views e do cache
$paths = [__DIR__ . '/../views']; // Diretório das views Blade
$cachePath = __DIR__ . '/../cache/views'; // Diretório onde Blade armazena os templates compilados

// Instância do sistema de arquivos
$filesystem = new Filesystem();

// Localizador de views
$viewFinder = new FileViewFinder($filesystem, $paths);

// Criando o resolver de engine
$engineResolver = new EngineResolver();
$engineResolver->register('blade', function () use ($filesystem, $cachePath) {
    return new CompilerEngine(new BladeCompiler($filesystem, $cachePath));
});
$engineResolver->register('php', function () {
    return new PhpEngine();
});

// Criando a fábrica de views
$blade = new Factory($engineResolver, $viewFinder, new Dispatcher());

// Tornando a instância do Blade global
$GLOBALS['blade'] = $blade;
