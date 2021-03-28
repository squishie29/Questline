<?php

namespace App\Controller;

use App\Entity\Guide;
use App\Entity\Voyage;
use App\Form\GuideType;
use App\Form\VoyageType;
use App\Repository\VoyageRepository;
use App\Repository\GuideRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;

class GuideController extends AbstractController
{
    /**
     * @Route("/back", name="back")
     */
    public function back(): Response
    {
        return $this->render('back.html.twig');
    }

    /**
     * @Route("/front", name="front")
     */
    public function front(): Response
    {
        return $this->render('front.html.twig');
    }



    /**
     * @Route("/guideList",name="guideList")
     */
    public function readGuide()
    {

        $r = $this->getDoctrine()->getRepository(Guide::class);
        $guides = $r->findAll();

        return $this->render('guide/read.html.twig', [
            'guides' => $guides
        ]);

    }


    /**
     * @Route("/guideFront",name="guideFront")
     */
    public function read(Request $request, PaginatorInterface $paginator)
    {

        $r = $this->getDoctrine()->getRepository(Guide::class);
        $guides = $r->findAll();

        return $this->render('front/readG.html.twig', [
            'guides' => $guides
        ]);

    }


    /**
     * @Route("/deleteGuide/{id}",name="deleteGuide")
     */
    public function deleteGuide($id)
    {
        $em = $this->getDoctrine()->getManager();
        $guide= $em->getRepository(Voyage::class)->find($id);
        $em->remove($guide);
        $em->flush();
        return $this->redirectToRoute("guideList");

    }


    /**
     * @Route("/addGuide", name="addGuide")
     */
    public function addGuide(Request $request)
    {
        $guide = new Guide();
        $form = $this->createForm(GuideType::class,
            $guide);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($guide);
            $em->flush();
            return $this->redirectToRoute('guideList');
        }
        return $this->render('guide/newGuide.html.twig', [
            'f' => $form->createView(),
        ]);
    }

    /**
     * @Route("/updateGuide/{id}", name="updateGuide")
     */
    public function updateGuide( Request $request , $id){
        $em = $this->getDoctrine()->getManager();
        $guide= $em->getRepository(Guide::class)->find($id);

        $form = $this->createForm(GuideType::class,
            $guide)
            ->add('modifier',SubmitType::class);
        $form ->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            return $this->redirectToRoute('guideList');
        }
        return $this->render('guide/updateGuide.html.twig' , [
            'f' => $form->createView(),
        ]);
    }

    /**
     * @Route("/rechercheGuide", name="rechercheGuide")
     */
    public function Recherche(GuideRepository $repository, Request $request)
    {
        $data =$request->get('search');
        $guide=$repository->findBy(['prenom'=>$data]);
        return $this->render('guide/read.html.twig', [
                'guides' => $guide]
        );

    }

    /**
     * @Route("guide/listDQLG", name="listDQLG")
     */
    public function orderbyEmail(GuideRepository $repository)
    {
        $guide=$repository->orderByEmail();
        return $this->render('front/readG.html.twig', [
            'guides' => $guide,
        ]);
    }
}
