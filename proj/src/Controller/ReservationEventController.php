<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Notifications;
use App\Entity\Reservation;
use App\Form\EventType;
use App\Form\ReservationType;
use App\Repository\EventRepository;
use App\Repository\NotificationRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationEventController extends AbstractController
{
    /**
     * @Route("/mesReservation", name="mesReservation")
     */
    public function index(ReservationRepository $reservationRepository): Response
    {

        return $this->render('reservation_event/index.html.twig', [
            'reservations' => $reservationRepository->findAll()
        ]);
    }

    /**
     * @Route("/reserverEvent/{id}", name="reserverEvent", methods={"GET","POST"})
     */
    public function new(Request $request,$id,EventRepository $eventRepository,ReservationRepository $reservationRepository): Response
    {
        $reservation = new Reservation();
        $form = $this->createForm(ReservationType::class, $reservation);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            ///testi kan fam reservation besm user connecte
            ///
            /// $res=$reservationRepository->findByUser($this->>getUser())
            /// if(!$res)
            $reservation->setDateReservation(new \DateTime());
            $reservation->setEvent($eventRepository->find($id));

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reservation);
            $entityManager->flush();


            $notification =new Notifications();
            $notification->setSeen(0);
            $notification->setReservation($reservation);
            $notification->setTitle("une reservation de l'event ".$reservation->getEvent()->getNom()." a été ajouté");
            $entityManager->persist($notification);
            $entityManager->flush();

            return $this->redirectToRoute('mesReservation');
        }
        return $this->render('reservation_event/reservation.html.twig', [
            'form' => $form->createView(),
            'nbrRestant' => $reservationRepository->CalculPlacesRestant($eventRepository->find($id))
        ]);
    }

    /**
     * @Route("/{id}/suppReservation", name="suppReservation", methods={"GET"})
     */
    public function delete($id,NotificationRepository $notificationRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $reservation=$this->getDoctrine()->getRepository(Reservation::class)
            ->find($id);
            $notification=$notificationRepository->findBy(['reservation'=>$reservation]);

            $entityManager->remove($reservation);
            $entityManager->flush();
        if(!$notification){
            $entityManager->remove($notification);
            $entityManager->flush();
        }


        return $this->redirectToRoute('mesReservation');
    }
    /**
     * @Route("/admin/reservations", name="reservations")
     */
    public function indexAdmin(ReservationRepository $reservationRepository): Response
    {
        return $this->render('reservation_event/indexAdmin.html.twig', [
            'reservations' => $reservationRepository->findAll()
        ]);
    }

    /**
     * @Route("/{id}/suppReservationAdmin", name="suppReservationAdmin", methods={"GET"})
     */
    public function deleteAdmin($id,NotificationRepository $notificationRepository): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $reservation=$this->getDoctrine()->getRepository(Reservation::class)
            ->find($id);
        $notification=$notificationRepository->findBy(['reservation'=>$reservation]);

        if($reservation!=null){
            $entityManager->remove($reservation);
            $entityManager->flush();
        }
        if(!$notification)
        {
            $entityManager->remove($notification);
            $entityManager->flush();
        }

        return $this->redirectToRoute('reservations');
    }

    /**
     * @Route("/{id}/modifierReservation", name="modifReservation", methods={"GET","POST"})
     */

    public function edit(Request $request, Reservation $reservation,EventRepository $eventRepository,ReservationRepository $reservationRepository): Response
    {
        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $reservation->setDateReservation(new \DateTime());
            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('mesReservation');
        }

        return $this->render('reservation_event/modifierReservation.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
            'nbrRestant' => $reservationRepository->CalculPlacesRestant($eventRepository->find($reservation->getEvent()))
        ]);
    }

}
