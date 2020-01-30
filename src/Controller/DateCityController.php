<?php


namespace App\Controller;


use App\Repository\CityRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DateCityController extends AbstractController
{
    /**
     * @Route("/tour", name="city")
     */
    public function index(CityRepository $cityRepository): Response
    {
        return $this->render('date&city/index.html.twig',[
            'cities' => $cityRepository->findByDateExpiration(),
        ]);
    }
}
