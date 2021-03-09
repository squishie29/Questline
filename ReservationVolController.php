<?php

namespace App\Controller;

use App\Entity\ReservationVol;
use App\Form\ReservationVolType;
use App\Repository\ReservationVolRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/ReservationVol")
 */
class ReservationVolController extends AbstractController
{
    /**
     * @Route("/ReservationVolFront", name="ReservationVolFront" )
     */
    public function indexFront(ReservationVolRepository $ReservationVolRepository): Response
    {
        $ReservationVol=$this->getDoctrine()
            ->getRepository(ReservationVol::class)
            ->findAll();
        
        return $this->render('ReservationVol/ReservationVolFront.html.twig', [
            'ReservationVols' => $ReservationVolRepository->findAll(),
        ]);
    }
    /**
     * @Route("/", name="ReservationVol_index", methods={"GET"})
     */
    public function index(ReservationVolRepository $ReservationVolRepository): Response
    {
        return $this->render('ReservationVol/index.html.twig', [
            'ReservationVols' => $ReservationVolRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="ReservationVol_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        
        $ReservationVol = new ReservationVol();
       
        
        
        if($request ->isMethod('POST')){
            $ReservationVol->setId_res((int)$request->get('id_res'));
            $ReservationVol->setNombre_personne((int)$request->get('nombre_personne'));
            $ReservationVol->setDate_debut(new\DateTime($request->get('date_debut')));
            $ReservationVol->setDate_fin(new\DateTime($request->get('date_fin')));
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($ReservationVol);
        $entityManager->flush();
        return $this->redirectToRoute('ReservationVol_index');
        }
        

        return $this->render('ReservationVol/new.html.twig', [
            'ReservationVol' => $ReservationVol,
          
        ]);
    }

    /**
     * @Route("/{id_res}", name="ReservationVol_show", methods={"GET"})
     */
    public function show(ReservationVol $ReservationVol): Response
    {
        return $this->render('ReservationVol/show.html.twig', [
            'ReservationVol' => $ReservationVol,
        ]);
    }

    /**
     * @Route("/{id_res}/edit", name="ReservationVol_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ReservationVol $ReservationVol): Response
    {
        $form = $this->createForm(ReservationVolType::class, $ReservationVol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ReservationVol_index');
        }

        return $this->render('ReservationVol/edit.html.twig', [
            'ReservationVol' => $ReservationVol,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id_res}", name="ReservationVol_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ReservationVol $ReservationVol): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ReservationVol->getId_res(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ReservationVol);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ReservationVol_index');
    }
    
}
