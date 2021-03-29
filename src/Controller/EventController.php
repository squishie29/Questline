<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Categorie;
use App\Entity\Notifications;
use App\Form\CategorieType;
use App\Form\EventType;
use App\Repository\EventRepository;
use App\Repository\ReservationRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;


class EventController extends AbstractController
{
    /**
     * @Route("/events", name="event")
     */
    public function index(EventRepository $eventRepository ): Response
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
        $form->add('Ajouter',SubmitType::class);
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
        $form->add('modifier',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $newFilename = $originalFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file
                // to the directory where brochures are stored
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

            /*$notification =new Notifications();
            $notification->setSeen(0);
            $notification->setTitle("cet evenement est annulé");
            $entityManager->persist($notification);
            $entityManager->flush();*/

        }



        return $this->redirectToRoute('event');
    }






    /**
     * @Route("/eventsFront", name="eventFront")
     */
    public function indexFront(EventRepository $eventRepository,ReservationRepository $reservationRepository): Response
    {
        $events=$this->getDoctrine()
            ->getRepository(Event::class)
            ->findAll();
        foreach ($events as $e){
            $e->setNbRestant($reservationRepository->CalculPlacesRestant($e));
        }
        return $this->render('event/evenementsFront.html.twig', [
            'evenements' => $events,
        ]);
    }

    /**
     * @Route("/eventStats", name="eventStats")
     */
    public function Stats(EventRepository $eventRepository,ReservationRepository $reservationRepository): Response
    {
        $events=$eventRepository->findAll();
        $pieChart = new PieChart();
        $data = [['Evenement','profit ']];
        foreach($events as $e)
        {
            $data[] = array(
                $e->getNom(), $reservationRepository->CalculTotal($e),
            );
        }
        $pieChart->getData()->setArrayToDataTable(
            $data
        );
        $pieChart->getOptions()->setTitle('profit par evenement');
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->getTitleTextStyle()->setBold(true);
        $pieChart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $pieChart->getOptions()->getTitleTextStyle()->setItalic(true);
        $pieChart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $pieChart->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('event/stats.html.twig', array('piechart' => $pieChart));
    }



    /*public function searchEvent(Request $request,NormalizerInterface $Normalizer)
    {
        $repository = $this->getDoctrine()->getRepository(Event::class);
        $requestString=$request->get('searchValue');
        $events = $repository->findevent($requestString);
        $jsonContent = $Normalizer->normalize($events, 'json',['groups'=>'events:read']);
        $retour=json_encode($jsonContent);
        return new Response($retour);

    }*/

    /**
     * @Route("/searchevent", name="searchevent",methods={"POST"})
     */
    public function searchEvent(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Event::class);
        $requestString=$request->get('searchValue');
        $entities = $repository->findEventByName($requestString);

        if(!$entities) {
            $result['entities']['error'] = "Aucun evenement trouvé";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }

        return new Response(json_encode($result));
    }

    public function getRealEntities($events){

        foreach ($events as $e){
            $realEntities[$e->getId()] = [$e->getNom(),$e->getCategorie()->getNom(),$e->getDestination(), $e->getPrix(),$e->getNbrPlaces()];
        }

        return $realEntities;
    }

    /**
     * @Route("/trievent", name="trievents")
     */

    public function Trievent()
    {
        $events= $this->getDoctrine()->getRepository(Event::class)->listOrderByName();
        return $this->render('Event/TriNom.html.twig',['evenements'=>$events]);

    }


    /**
     * @Route("/notifications", name="notifications",methods={"GET"})
     */
    public function getNotifications(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Notifications::class);
        $entities = $repository->findAll();

        if(!$entities) {
            $result['notif']['error'] = "Aucune notif trouvée";
        } else {
            $result['notif'] = $this->getRealNotifs($entities);

        }

        return new Response(json_encode($result));
    }

    public function getRealNotifs($notifs){

        foreach ($notifs as $n){
            $realEntities[$n->getId()] = [$n->getTitle(),$n->getSeen()];
        }

        return $realEntities;
    }





    /**
     * @Route("/maps/{id}", name="maps", methods={"GET"},requirements={"id"="\d+"})
     */
    public function indexFronts(Request $request,EventRepository $eventRepository): Response
    {
        $title = $request->attributes->get('id');
        return $this->render('Event/maps.html.twig', [

            'event' => $eventRepository->findBy(
                ['id' => $title]
            ),
        ]);
    }






}
