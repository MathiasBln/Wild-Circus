<?php


namespace App\Controller;


use App\Repository\CrewRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class AboutUsController extends AbstractController
{
    /**
     * @Route("/about_us", name="about_us")
     */
    public function index(CrewRepository $crewRepository): Response
    {
        return $this->render('about_us/index.html.twig', [
            'crews' => $crewRepository->findAll(),
        ]);
    }
}
