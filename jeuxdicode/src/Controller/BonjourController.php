<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BonjourController extends AbstractController
{
    /**
     * @Route("/salut/{name}", name="salut")
     * @Route("/salut/", defaults={"name"="Inconnu"})
     */
    public function salut($name)
    {
        //$name = $request->get('name');
        return $this->render('salut/salut.html.twig', [
            'name' => $name,
            'controller_name' => 'BonjourController',
        ]);
    }
}
