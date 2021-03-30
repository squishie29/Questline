<?php

namespace App\Controller;


use App\Entity\Review;
use App\Form\ReviewType;
use App\Repository\ReviewRepository;
use App\Entity\Utilisateur;
use App\Form\UtilisateurType;
use App\Repository\UtilisateurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class FrontController extends AbstractController
{/**
     *@Route("/", name="front2")
     */
    public function index(): Response
    {
        return $this->render('front.html.twig', [
            'controller_name' => 'FrontController',

        ]);

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
            'user' => $user = $this->get('security.token_storage')->getToken()->getUser(),
        ]);
    }











    
     /**
     * @Route("/sign", name="sign", methods={"GET","POST"})
     */
    public function new(Request $request,UserPasswordEncoderInterface $passwordEncoder,TokenStorageInterface $tokenStorage): Response
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurType::class, $utilisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $image = $form->get('img')->getData();


            if ($image)
            {
                $originalFilename = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $originalFilename;
                $fileName = $safeFilename.'-'.uniqid().'.'.$image->guessExtension();

                try{
                    $image->move(
                        $this->getParameter('imageuser_directory'),$fileName);
                } catch (FileException $e)
                {

                }

                $utilisateur->setImg($fileName);
            }
            $password = $passwordEncoder->encodePassword($utilisateur, $utilisateur->getPassword());
            $utilisateur->setMdp($password);
            $utilisateur->setRoles(['ROLE_USER']);


            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($utilisateur);
            $entityManager->flush();
            $token = new UsernamePasswordToken($utilisateur, $utilisateur->getPassword(), 'main', $utilisateur->getRoles());
            $tokenStorage->setToken($token);


            $this->addFlash('success', 'You have been successfully registered! Congratulations');
            //return $this->redirectToRoute('login');

        }

        return $this->render('front/ajoutUtil.html.twig', [
            'utilisateur' => $utilisateur,
            'form' => $form->createView(),
        ]);
    }
    
    

    
}
