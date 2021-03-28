<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Form\VoyageType;
use App\Entity\Guide;
use App\Repository\GuideRepository;
use App\Repository\VoyageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use  Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartController extends AbstractController
{
    /**
     * @param VoyageRepository $repository
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session , VoyageRepository $repository)
    {
        $panier = $session->get('panier');
        $panierWithData= [];

        foreach($panier as $id => $quantity);
        {
            $panierWithData[]=[
                'voyage' => $repository->find($id),
                'quantity' => $quantity
            ];
        }
        //dd($panierWithData);
        return $this->render('front/panier.html.twig', [
            'items' =>$panierWithData
        ]);
    }

    /**
     * @Route("/addPanier/{id}", name="addPanier")
     */
    public function add($id , SessionInterface $session)
    {
        $panier = $session->get('panier',[]);

        if(!empty($panier[$id]))
        {
            $panier[$id]++;
        }
        else{
            $panier[$id] = 1;
        }

        $session->set('panier' , $panier);

        return $this->redirectToRoute('panier');

    }

    /**
     * @Route("/removePanier/{id}", name="removePanier")
     */
    public function remove($id , SessionInterface $session)
    {
        $panier = $session->get('panier',[]);

        if(!empty($panier[$id]))
        {
           unset($panier[$id]);
        }

        $session->set('panier' , $panier);

        return $this->redirectToRoute('panier');

    }
}