<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

    protected $calculator;

    public function __construct(Calculator $calculator) {
        $this->calculator = $calculator;
    }
    /**
     * @Route("/hello/{name<[A-z]+>?World}",
     *     name="hello",
     *     methods={"GET", "POST"},
     *     host="127.0.0.1",
     *     schemes={"http", "https"},
     * )
     * @param Request $request
     * @param $name
     * @return Response
     */
    public function hello(Request $request, $name) {

        $tva = $this->calculator->calcul(100);
        dump($tva);
        return new Response("Hello $name");
    }
}