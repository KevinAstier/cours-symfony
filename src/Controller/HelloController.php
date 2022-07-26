<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

    /**
     * @Route("/hello/{name<[A-z]+>?World}",
     *     name="hello",
     *     methods={"GET", "POST"},
     *     host="127.0.0.1",
     *     schemes={"http", "https"},
     *
     * )
     * @param Request $request
     * @param $name
     * @return Response
     */
    public function hello(Request $request, $name) {

        return new Response("Hello $name");
    }
}