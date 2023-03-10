<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Repository\ReclamationRepository;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackReclamationController extends AbstractController
{
    /**
     * @Route("/back/reclamation", name="app_back_reclamation")
     */
    public function index(Request $request,ReclamationRepository $reclamationRepository): Response
    {$rech=null;
        $em=$this->getDoctrine()->getManager();
    $reclamations=$reclamationRepository->findAll();
        if($request->isMethod("POST"))
        {
            $rech=$request->get('rech');
            $reclamations= $em->getRepository(Reclamation::class)->findByString($rech);


        }
        $r1=0;
        $r2=0;
        foreach ($reclamations as $reclamation)
        {
            if ( $reclamation->getEtat()==0)  :
                $r1+=1;
            else:
                $r2+=1;
            endif;
        }
        $pieChart = new PieChart();
        $pieChart->getData()->setArrayToDataTable(
            [['etat', 'nombre'],
                ['Non traité', $r1],
                ['Traité', $r2],

            ]
        );
        $pieChart->getOptions()->setHeight(500);
        $pieChart->getOptions()->setWidth(900);
        $pieChart->getOptions()->setBackgroundColor('#191c24');
        $pieChart->getOptions()->getLegend()->getTextStyle()->setColor('#FFFFFF');
        $pieChart->getOptions()->getLegend()->setPosition('bottom');





        return $this->render('back_reclamation/index.html.twig', [
            'controller_name' => 'BackReclamationController',
            "reclamations"=>$reclamations,'piechart' => $pieChart,"rech"=>$rech
        ]);
    }

    /**
     * @Route("back/reclamation/{id}/valide", name="backreclamation_valide")
     * @param Reclamation $reclamation
     * @return RedirectResponse
     */
    public function valide (Reclamation $reclamation,FlashyNotifier $flashyNotifier): RedirectResponse
    {
        $reclamation->setEtat(1);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        $flashyNotifier->success("l'etat de la reclamation a été changé a traité avec succes");
        return $this->redirectToRoute("app_back_reclamation");
    }
    /**
     * @Route("reclamation/{id}/delete", name="reclamation_delete")
     * @param Reclamation $reclamation
     * @return RedirectResponse
     */
    public function delete (Reclamation $reclamation,FlashyNotifier $flashyNotifier): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamation);
        $em->flush();
        $flashyNotifier->message("la reclamation a été supprimer avec succées");
        return $this->redirectToRoute("app_back_reclamation");
    }
}
