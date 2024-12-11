<?php


// Defina o caminho base da aplicação
define('BASE_URL', '/EcoQuiz-Git/v0_5/');

session_start();

// Configuração do controller e método padrão
$defaultController = 'RouterController';
$defaultMethod = 'start';

if (isset($_GET['url'])) {
    // Sanitizar a URL e dividi-la
    $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
    $controllerName = ucfirst($url[0]) . 'Controller'; // Exemplo: HubController
    $method = isset($url[1]) ? $url[1] : 'index'; // Exemplo: index, listar, etc.

    // Caminho do arquivo do controller
    $controllerPath = '../app/controllers/' . $controllerName . '.php';

    // Verifica se o arquivo do controller existe
    if (file_exists($controllerPath)) {
        require_once $controllerPath;

        // Verifica se a classe do controller existe
        if (class_exists($controllerName)) {
            $controller = new $controllerName();

            // Verifica se o método existe
            if (method_exists($controller, $method)) {
                // Passa parâmetros adicionais para o método
                $params = array_slice($url, 2); // Parâmetros a partir da terceira posição na URL
                call_user_func_array([$controller, $method], $params);
            } else {
                // Método não encontrado
                exibirErro(404, "O método <strong>$method</strong> não foi encontrado no controller <strong>$controllerName</strong>.");
            }
        } else {
            // Classe do controller não encontrada
            exibirErro(404, "A classe <strong>$controllerName</strong> não foi encontrada.");
        }
    } else {
        // Arquivo do controller não encontrado
        exibirErro(404, "O arquivo do controller <strong>$controllerName.php</strong> não foi encontrado.");
    }
} else {
    // Carrega o controller e método padrão
    require_once '../app/controllers/' . $defaultController . '.php';
    if (class_exists($defaultController)) {
        $controller = new $defaultController();
        if (method_exists($controller, $defaultMethod)) {
            $controller->$defaultMethod();
        } else {
            exibirErro(500, "O método padrão <strong>$defaultMethod</strong> não foi encontrado no controller padrão <strong>$defaultController</strong>.");
        }
    } else {
        exibirErro(500, "O controller padrão <strong>$defaultController</strong> não foi encontrado.");
    }
}

/**
 * Função para exibir erros personalizados
 */
function exibirErro($codigo, $mensagem) {
    http_response_code($codigo);
    // Aqui você pode carregar uma página 404 personalizada
    include '../app/views/error_view.php';
    exit;
}