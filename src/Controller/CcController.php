<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CcController extends AbstractController
{
    /**
     * @Route("/templates", name="templates")
     */
    public function template(): Response
    {
        return $this->render('cc/index.html.twig', [
            'controller_name' => 'CcController',
        ]);
    }
}
