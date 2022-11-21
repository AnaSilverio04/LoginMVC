<?php

namespace App\Controller;

use App\Controller\CategoriaProdutoController;
use App\Controller\PessoaController;
use App\Controller\ProdutoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


    


switch($url)
{
    case '/login':
        LoginController::index();
    break;

    case '/login/auth':
        LoginController::auth();
    break;

    case '/logout':
        LoginController::logout();
    break;


    case '/':
        echo "página inicial";
    break;


    case '/pessoa':
        // Para saber mais sobre o Operador de Resolução de Escopo (::), 
        // leia: https://www.php.net/manual/pt_BR/language.oop5.paamayim-nekudotayim.php
        PessoaController::index();
    break;


    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;


    case '/pessoa/delete':
        PessoaController::delete();
    break;

    /**
     * Rotas para produto abaixo
     */

    case '/produto':
        
        ProdutoController::index();
    break;


    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/form/save':
        ProdutoController::save();
    break;

    
    case '/produto/delete':
        ProdutoController::delete();
    break;

    /**
     * Rotas para CategoriaProduto abaixo
     */

    case '/categoriaproduto':
        
        CategoriaProdutoController::index();
    break;

    case '/categoriaproduto/form':
        CategoriaProdutoController::form();
    break;

    case '/categoriaproduto/form/save':
        CategoriaProdutoController::save();
    break;

    case '/categoriaproduto/delete':
        CategoriaProdutoController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}