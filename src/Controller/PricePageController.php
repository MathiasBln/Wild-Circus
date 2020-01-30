<?php


namespace App\Controller;


use App\Repository\PriceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PricePageController extends AbstractController
{
    /**
     * @Route("/pricePage", name="pricePage")
     */
    public function index(PriceRepository $priceRepository): Response
    {
        return $this->render('pricePage/index.html.twig', [
            'prices' => $priceRepository->findAll(),
        ]);
    }
}
