<?php

namespace App\Controller;

use App\Entity\Review;
use App\Repository\ReviewRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class ChartController extends AbstractController
{
    /**
     * @Route("/chart", name="chart")
     */
    public function index(chartBuilderInterface $chartBuilder,ReviewRepository $reviewRepository): Response
    {
        $reviews = $reviewRepository->findAll();
        $revcount1 = 0;
        $revcount2 = 0;
        $revcount3 = 0;
        $revcount4 = 0;
        $revcount5 = 0;
        foreach ($reviews as $review){
            if ($review->getRating()==1){
                $revcount1+=1;
            }elseif ($review->getRating()==2){
                $revcount2+=1;
            }
            elseif ($review->getRating()==3){
                $revcount3+=1;
            }elseif ($review->getRating()==4){
                $revcount4+=1;
            }elseif ($review->getRating()==5){
                $revcount5+=1;
            }

        }
        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        $chart->setData([
            'labels' => ['1Star', '2Stars', '3Stars', '4Stars', '5Stars'],
            'datasets' => [
                [
                    'label' => 'Taux de reviews',
                    'backgroundColor' => ['rgb(255, 99, 132)','rgb(128,255,0)','rgb(51,255,255)','rgb(255,102,255)','rgb(255,178,102)'],
                    'borderColor' => 'rgb(0,0, 0)',
                    'data' => [$revcount1, $revcount2, $revcount3, $revcount4, $revcount5,],
                ],
            ],
        ]);

        $chart->setOptions([/* ... */]);
        return $this->render('chart/index.html.twig', [
            'chart' => $chart,
        ]);
    }
    /**
     * @Route("/chart2", name="chart2")
     */
    public function index2(chartBuilderInterface $chartBuilder,ReviewRepository $reviewRepository): Response
    {
        $reviews = $reviewRepository->findAll();
        $revcount1 = 0;
        $revcount2 = 0;
        $revcount3 = 0;
        $revcount4 = 0;
        $revcount5 = 0;
        foreach ($reviews as $review){
            if ($review->getRating()==1){
                $revcount1+=1;
            }elseif ($review->getRating()==2){
                $revcount2+=1;
            }
            elseif ($review->getRating()==3){
                $revcount3+=1;
            }elseif ($review->getRating()==4){
                $revcount4+=1;
            }elseif ($review->getRating()==5){
                $revcount5+=1;
            }

        }
        $chart = $chartBuilder->createChart(Chart::TYPE_PIE);
        $chart->setData([
            'labels' => ['1Star', '2Stars', '3Stars', '4Stars', '5Stars'],
            'datasets' => [
                [
                    'label' => 'Taux de reviews',
                    'backgroundColor' => ['rgb(255, 99, 132)','rgb(128,255,0)','rgb(51,255,255)','rgb(255,102,255)','rgb(255,178,102)'],
                    'borderColor' => 'rgb(0,0, 0)',
                    'data' => [$revcount1, $revcount2, $revcount3, $revcount4, $revcount5,],
                ],
            ],
        ]);

        $chart->setOptions([/* ... */]);
        return $this->render('chart/index.html.twig', [
            'chart' => $chart,
        ]);
    }
    /**
     * @Route("/chart3", name="chart3")
     */
    public function index3(chartBuilderInterface $chartBuilder,ReviewRepository $reviewRepository): Response
    {
        $reviews = $reviewRepository->findAll();
        $revcount1 = 0;
        $revcount2 = 0;
        $revcount3 = 0;
        $revcount4 = 0;
        $revcount5 = 0;
        foreach ($reviews as $review){
            if ($review->getRating()==1){
                $revcount1+=1;
            }elseif ($review->getRating()==2){
                $revcount2+=1;
            }
            elseif ($review->getRating()==3){
                $revcount3+=1;
            }elseif ($review->getRating()==4){
                $revcount4+=1;
            }elseif ($review->getRating()==5){
                $revcount5+=1;
            }

        }
        $chart = $chartBuilder->createChart(Chart::TYPE_DOUGHNUT);
        $chart->setData([
            'labels' => ['1Star', '2Stars', '3Stars', '4Stars', '5Stars'],
            'datasets' => [
                [
                    'label' => 'Taux de reviews',
                    'backgroundColor' => ['rgb(255, 99, 132)','rgb(128,255,0)','rgb(51,255,255)','rgb(255,102,255)','rgb(255,178,102)'],
                    'borderColor' => 'rgb(0,0, 0)',
                    'data' => [$revcount1, $revcount2, $revcount3, $revcount4, $revcount5,],
                ],
            ],
        ]);

        $chart->setOptions([/* ... */]);
        return $this->render('chart/index.html.twig', [
            'chart' => $chart,
        ]);
    }
}
