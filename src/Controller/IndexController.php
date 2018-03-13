<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends Controller
{

    public function index()
    {
        return $this->render('index/index.html.twig');
    }

    public function helloWorldBasic()
    {
        return new Response('HelloWorld');
    }

    public function helloWorldJson()
    {
        return $this->json('HelloWorld');
    }

    public function helloWorldTwig()
    {
        return $this->render('index/hello-world-twig.html.twig', ['txt' => 'Hello World']);
    }

    public function helloWorldTwigLayout()
    {
        return $this->render('index/hello-world-twig-layout.html.twig', ['txt' => 'Hello World']);

    }

    public function withEsi()
    {
        return $this->render('index/esi.html.twig', ['txt' => 'esi hello World']);

    }

    public function esi(Request $request)
    {
        $counter = $request->get('counter');
        return  $this->render('esi/esi.html.twig', ['txt' => 'esi hello World', 'counter' => $counter])
            ->setSharedMaxAge(25);
    }
}