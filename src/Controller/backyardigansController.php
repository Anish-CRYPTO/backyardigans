<?php

namespace App\Controller;

use App\Repository\BackyardigansRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class backyardigansController extends AbstractController
{
    /**
     * @Route("/")
     */

    public function show(BackyardigansRepository $backyardigansRepository)
    {
        $backyardigans = $backyardigansRepository->findAll();

        return $this->render('backyardigans/show.html.twig',
            [
                "backyardigans" => $backyardigans
            ]);
    }
}