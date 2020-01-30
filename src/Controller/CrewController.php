<?php

namespace App\Controller;

use App\Entity\Crew;
use App\Form\CrewType;
use App\Repository\CrewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/crew")
 */
class CrewController extends AbstractController
{
    /**
     * @Route("/", name="crew_index", methods={"GET"})
     */
    public function index(CrewRepository $crewRepository): Response
    {
        return $this->render('crew/index.html.twig', [
            'crews' => $crewRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="crew_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $crew = new Crew();
        $form = $this->createForm(CrewType::class, $crew);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($crew);
            $entityManager->flush();

            return $this->redirectToRoute('crew_index');
        }

        return $this->render('crew/new.html.twig', [
            'crew' => $crew,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="crew_show", methods={"GET"})
     */
    public function show(Crew $crew): Response
    {
        return $this->render('crew/show.html.twig', [
            'crew' => $crew,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="crew_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Crew $crew): Response
    {
        $form = $this->createForm(CrewType::class, $crew);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('crew_index');
        }

        return $this->render('crew/edit.html.twig', [
            'crew' => $crew,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="crew_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Crew $crew): Response
    {
        if ($this->isCsrfTokenValid('delete'.$crew->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($crew);
            $entityManager->flush();
        }

        return $this->redirectToRoute('crew_index');
    }
}
