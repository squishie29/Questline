<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Form\EventType;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class EventController extends AbstractController
{
    /**
     * @Route("/events", name="event")
     */
    public function index(EventRepository $eventRepository): Response
    {
        $events=$this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();
        return $this->render('event/index.html.twig', [
            'evenements' => $eventRepository->findAll(),
        ]);
    }

    /**
     * @Route("/ajoutEvent", name="ajouternew", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //$event->setImage("");

            $imageFile = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $imageFile->move(
                        'C:/wamp64/www/devahmed/public/uploads',
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                $event->setImage($newFilename);
            }

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($event);
            $entityManager->flush();

            return $this->redirectToRoute('event');
        }

        return $this->render('Event/ajoutEvent.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/{id}/modifierEvent", name="modifierEvent", methods={"GET","POST"})
     */

    public function edit(Request $request, Event $event): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->get('image')->setData("");
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em=$this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('event');
        }

        return $this->render('Event/modifierEvent.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/suppEvent", name="supprimerEvent", methods={"GET"})
     */
    public function delete($id): Response
    {

        $entityManager = $this->getDoctrine()->getManager();
        $event=$this->getDoctrine()->getRepository(Event::class)
            ->find($id);
        if($event!=null){
            $entityManager->remove($event);
            $entityManager->flush();
        }



        return $this->redirectToRoute('event');
    }






    /**
     * @Route("/eventsFront", name="eventFront")
     */
    public function indexFront(EventRepository $eventRepository): Response
    {
        $events=$this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();
        return $this->render('event/evenementsFront.html.twig', [
            'evenements' => $eventRepository->findAll(),
        ]);
    }


}
