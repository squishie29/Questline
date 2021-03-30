<?php

namespace App\Controller;

use App\Entity\Destination;
use App\Entity\Recherche;
use App\Form\DestinationType;
use App\Form\TextType;
use App\Repository\DestinationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\PropertySearch;
use App\Form\PropertySearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/destination")
 */
class DestinationController extends Controller
{

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
    /**
     * @Route("/", name="destination_index", methods={"GET","POST"})
     */
    public function index(DestinationRepository $destinationRepository,Request $request): Response
    {
      $destination = new Recherche();
      $form = $this->createFormBuilder($destination)
      ->add('nom',TextType::class,array('attr'=>array('class'=>'form-control')))  
      ->getForm();
      
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid())   {
        $term = $destination->getnom() ;
        $alldestination = $destinationRepository->search($term);
        $paginator = $this->get('knp_paginator');
         $destinations = $paginator->paginate(
            // Doctrine Query, not results
            $alldestination,
            
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('destination/index.html.twig', [
            'destinations' => $destinations,
            'form' => $form->createView(),
        ]);
      }
      else
      {
          $alldestination = $destinationRepository->findAll () ;
          $destinations = $this->get('knp_paginator')->paginate(
            // Doctrine Query, not results
            $alldestination,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
          return $this->render('destination/index.html.twig', [
            'destinations' => $destinations,
            'form' => $form->createView(),
        ]);
        }
      
   
        
    }

    /**
     * @Route("/new", name="destination_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $destination = new destination();
        $form = $this->createForm(DestinationType::class, $destination);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {  

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($destination);
        $entityManager->flush();
        return $this->redirectToRoute('destination_index');
        }
        

        return $this->render('destination/new.html.twig', [
            'destination' => $destination,
            'form' => $form->createView(),
          
        ]);
    }

    /**
     * @Route("/{id}", name="destination_show", methods={"GET"})
     */
    public function show(destination $destination): Response
    {
        return $this->render('destination/show.html.twig', [
            'destination' => $destination,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="destination_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, destination $destination,$id): Response
    {
        
        $form = $this->createForm(DestinationType::class, $destination);
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
     * @Route("/{id}", name="destination_delete", methods={"DELETE"})
     */
    public function delete(Request $request, destination $destination): Response
    {
        if ($this->isCsrfTokenValid('delete'.$destination->getid(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($destination);
            $entityManager->flush();
        }

        return $this->redirectToRoute('destination_index');
    }




    /**
     * @Route("/map/{id}", name="map5", methods={"GET"},requirements={"id"="\d+"})
     */
    public function indexFrontss(Request $request,DestinationRepository $destinationRepository): Response
    {
        $titlee = $request->attributes->get('id');
        return $this->render('destination/mapsaziz.html.twig', [

            'destt' => $destinationRepository->findBy(
                ['id' => $titlee]
            ),
        ]);

    }
}
