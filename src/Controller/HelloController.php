<?php

namespace App\Controller;

use App\Taxes\Calculator;
use App\Taxes\Detector;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController extends AbstractController {


    /**
     * @Route("/hello/{name<[A-z]+>?World}",
     *     name="hello",
     *     methods={"GET", "POST"},
     *     host="127.0.0.1",
     *     schemes={"http", "https"},
     * )
     */
    public function hello($name = "World") {

        return $this->render();
    }
}