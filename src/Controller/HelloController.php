<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController {

    /**
     * @Route("/hello/{name<[A-z]+>?World}",
     *     name="hello",
     *     methods={"GET", "POST"},
     *     host="127.0.0.1",
     *     schemes={"http", "https"},
     * )
     */
    public function hello($name = "World", LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig) {

        dump(($twig));
        dump($slugify->slugify("Hello World"));
        $logger->error("Mon message de log !");
        $tva = $calculator->calcul(100);
        dump($tva);
        return new Response("Hello $name");
    }
}