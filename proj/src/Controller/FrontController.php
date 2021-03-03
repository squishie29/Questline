<?php

namespace App\Controller;


use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\ReviewRepository;
use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{/**
     *@Route("/", name="front")
     */
    public function index(): Response
    {
        return $this->render('front.html.twig');
    }
    /**
     *@Route("/front", name="front_review")
     */
    public function affichage(Request $request,ReviewRepository $reviewRepository): Response
    {
        
        $review = new Review();
        $formreview = $this->createForm(ReviewType::class, $review);
        $formreview->handleRequest($request);

        if ($formreview->isSubmitted() && $formreview->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($review);
            $entityManager->flush();

            #return $this->redirectToRoute('review_index');
        }

        return $this->render('front/hotel-details.html.twig', [
            'controller_name' => 'FrontController',
            'reviews' => $review,
            'formreview' => $formreview->createView(),
            'reviewss' => $reviewRepository->findAll(),
        ]);
    }











    
     /**
     * @Route("/sign", name="sign", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utilisateur);
            $entityManager->flush();

            return $this->redirectToRoute('front_utilisateur_show');
        }

        return $this->render('front/ajoutUtil.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }
    
    

    
}
