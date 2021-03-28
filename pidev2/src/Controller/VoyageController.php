<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Form\VoyageType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GuideRepository;
use App\Repository\VoyageRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Knp\Component\Pager\PaginatorInterface;


class VoyageController extends AbstractController
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
     * @Route("/voyageFront",name="voyageFront")
     */
    public function read(Request $request, PaginatorInterface $paginator)
    {

        $r = $this->getDoctrine()->getRepository(Voyage::class);
        $voyages = $r->findAll();

        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $voyages,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );

        return $this->render('front/readV.html.twig', [
            'voyages' => $appointments
        ]);

    }


    /**
     * @Route("/voyageList",name="voyageList")
     */
    public function readVoyage(Request $request, PaginatorInterface $paginator)
    {

        $r = $this->getDoctrine()->getRepository(Voyage::class);
        $voyages = $r->findAll();

        $appointments = $paginator->paginate(
        // Doctrine Query, not results
            $voyages,
            // Define the page parameter
            $request->query->getInt('page', 1),
            // Items per page
            4
        );

        return $this->render('voyage/read.html.twig', [
            'voyages' => $appointments
        ]);

    }

    /**
     * @Route("/deleteVoyage/{id}",name="deleteVoyage")
     */
    public function deleteVoyage($id)
    {
        $em = $this->getDoctrine()->getManager();
        $voyage = $em->getRepository(Voyage::class)->find($id);
        $em->remove($voyage);
        $em->flush();
        return $this->redirectToRoute("voyageList");

    }


/**
* @Route("/addVoyage", name="addVoyage")
*/
    public function addVoyage(Request $request)
    {
$voyage = new Voyage();
$form = $this->createForm(VoyageType::class,
$voyage);
        $form->add('Ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($voyage);
            $em->flush();
            return $this->redirectToRoute('voyageList');
        }
return $this->render('voyage/newVoyage.html.twig', [
'f' => $form->createView(),
]);
    }

    /**
     * @Route("/updateVoyage/{id}", name="updateVoyage")
     */
    public function updateVoyage( Request $request , $id){
        $em = $this->getDoctrine()->getManager();
        $voyage = $em->getRepository(Voyage::class)->find($id);

        $form = $this->createForm(VoyageType::class,
            $voyage)
            ->add('modifier',SubmitType::class);
        $form ->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            $em->flush();
            return $this->redirectToRoute('voyageList');
        }
        return $this->render('voyage/updateVoyage.html.twig' , [
            'f' => $form->createView(),
            ]);
    }

        /**
     * @param VoyageRepository $repository
     * @Route("voyage/listDQL", name="listDQL")
     */
    public function orderbyprix(VoyageRepository $repository)
    {
        $voyage=$repository->orderByPrix();
        return $this->render('front/readV.html.twig', [
            'voyages' => $voyage,
        ]);
    }

}
