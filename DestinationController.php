<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Form\DestinationType;
use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/destination")
 */
class DestinationController extends AbstractController
{
    /**
     * @Route("/", name="destination_index", methods={"GET"})
     */
    public function index(DestinationRepository $destinationRepository): Response
    {
        return $this->render('destination/index.html.twig', [
            'destinations' => $destinationRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="destination_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        
        $destination = new Destination();
        
        
        if($request ->isMethod('POST')){
            $destination->setId_dest((int)$request->get('id_dest'));
            $destination->setDate(new\DateTime($request->get('Date')));
            $destination->setNom((string)$request->get('nom'));
           
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($destination);
        $entityManager->flush();
        return $this->redirectToRoute('destination_index');
        }
        

        return $this->render('destination/new.html.twig', [
            'destination' => $destination,
          
        ]);
    }

    /**
     * @Route("/{id_dest}", name="destination_show", methods={"GET"})
     */
    public function show(destination $destination): Response
    {
        return $this->render('destination/show.html.twig', [
            'destination' => $destination,
        ]);
    }

    /**
     * @Route("/{id_dest}/edit", name="destination_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, destination $destination): Response
    {
        $form = $this->createForm(destinationType::class, $destination);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('destination_index');
        }

        return $this->render('destination/edit.html.twig', [
            'destination' => $destination,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_dest}", name="destination_delete", methods={"DELETE"})
     */
    public function delete(Request $request, destination $destination): Response
    {
        if ($this->isCsrfTokenValid('delete'.$destination->getId_dest(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($destination);
            $entityManager->flush();
        }

        return $this->redirectToRoute('destination_index');
    }
    /**
     * @Route("/destinationFront", name="destinationFront")
     */
    public function indexFront(DestinationRepository $destinationRepository): Response
    {
        $destination=$this->getDoctrine()
            ->getRepository(Destination::class)
            ->findAll();
        return $this->render('destination/destinationFront.html.twig', [
            'destinations' => $destinationRepository->findAll(),
        ]);
    }
}
