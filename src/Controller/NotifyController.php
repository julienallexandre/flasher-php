<?php

namespace App\Controller;

use Flasher\Prime\FlasherInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NotifyController extends AbstractController
{
    /**
     * @Route("/notify", name="notify")
     * @param FlasherInterface $flasher
     * @return Response
     */
    public function flasher(FlasherInterface $flasher): Response
    {
        $flasher->addSuccess('Data has been saved successfully!');

        return $this->render('notify/index.html.twig', [
            'controller_name' => 'NotifyController',
        ]);
    }
}
