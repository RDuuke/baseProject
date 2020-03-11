<?php
declare(strict_types = 1);

namespace App\Controllers;

use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Log\LoggerInterface;

class HomeController extends Controller
{
    public function home(Request $request, Response $response)
    {
        $this->container->get(LoggerInterface::class)->debug(HomeController::class, ['message' => "Ejecución de función Home"]);
        return $this->container->get("view")->render($response, "index.twig");
    }
}