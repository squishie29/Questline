<?php

namespace App\Controller;

use App\Entity\ReservationVol;
use App\Form\ReservationVolType;
use App\Repository\ReservationVolRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

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
        
        
        return $this->render('ReservationVol/ReservationVolFront.html.twig', [
            'ReservationVols' => $ReservationVolRepository->findAll(),
        ]);
    }
    /**
     * @Route("/stats", name="stats" )
     */
    public function statistique(): Response
    {
        
        return $this->render('ReservationVol/statistique.html.twig');
    }
    /**
     * @Route("/pdf", name="ReservationVol_pdf", methods={"GET"})
     */
    public function index1(ReservationVolRepository $ReservationVolRepository): Response
    {
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        
        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('ReservationVol/pdf.html.twig', [
            'ReservationVols' => $ReservationVolRepository->findAll(),
        ]);
        
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("ReservationVol.pdf", [
            "Attachment" => true
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
        $form = $this->createForm(ReservationVolType::class, $ReservationVol);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
           

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($ReservationVol);
        $entityManager->flush();
        return $this->redirectToRoute('ReservationVol_index');
        }
        

        return $this->render('ReservationVol/new.html.twig', [
            'ReservationVol' => $ReservationVol,
            'form' => $form->createView(),
          
        ]);
    }

    /**
     * @Route("/{id}", name="ReservationVol_show", methods={"GET"})
     */
    public function show(ReservationVol $ReservationVol): Response
    {
        
        return $this->render('ReservationVol/show.html.twig', [
            'ReservationVols' => $ReservationVol,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="ReservationVol_edit", methods={"GET","POST"})
     */
    public function edit($id, Request $request, ReservationVol $ReservationVols): Response
    {
    
        $form = $this->createForm(ReservationVolType::class, $ReservationVols);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ReservationVol_index');
        }

        return $this->render('ReservationVol/edit.html.twig', [
            'ReservationVols' => $ReservationVols,
            'form' => $form->createView(),
        ]);   
    }

    /**
     * @Route("/{id_res}", name="ReservationVol_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ReservationVol $ReservationVol): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ReservationVol->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($ReservationVol);
            $entityManager->flush();
        }

        return $this->redirectToRoute('ReservationVol_index');
    }
    
}
    
