<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Event;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;

class CategController extends AbstractController
{
    /**
     * @Route("/categories", name="categ")
     */
    public function index(CategorieRepository $categorieeRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        $categories=$this->getDoctrine()
            ->getRepository(Categorie::class)
            ->findAll();

        return $this->render('categ/index.html.twig', [
            'categories' => $categorieeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/ajoutCategorie", name="categorienew", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($categorie);
            $entityManager->flush();

            return $this->redirectToRoute('categ');
        }

        return $this->render('categ/ajoutCategorie.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/modifierCategorie", name="modifierCategorie", methods={"GET","POST"})
     */
    public function edit(Request $request, Categorie $categorie): Response
    {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categ');
        }

        return $this->render('categ/modifierCategorie.html.twig', [
            'categorie' => $categorie,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}/suppCat", name="supprimerCategorie", methods={"GET"})
     */
    public function delete($id): Response
    {

            $entityManager = $this->getDoctrine()->getManager();
            $categorie=$this->getDoctrine()->getRepository(Categorie::class)
                ->find($id);
            if($categorie!=null){
                $entityManager->remove($categorie);
                $entityManager->flush();
            }



        return $this->redirectToRoute('categ');
    }

    /**
     * @Route("/tricat", name="tricat")
     */

    public function Tricat()
    {
        $categ= $this->getDoctrine()->getRepository(Categorie::class)->listOrderByName();
        return $this->render('categ/index.html.twig',['categories'=>$categ]);

    }



}
