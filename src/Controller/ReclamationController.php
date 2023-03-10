<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\ReclamationType;

use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="app_reclamation")
     */
    public function ajout(Request $request,MailerInterface $mailer,FlashyNotifier $flashyNotifier,UserInterface $user): Response
    {
        $reclamation = new Reclamation();

        $form = $this->createForm(ReclamationType::class,$reclamation);
        $form->handleRequest($request);
        $em=$this->getDoctrine()->getManager();
        $username=$user->getPassword();
        $em=$this->getDoctrine()->getManager();
        $userr = $em->getRepository(User::class)->findOneBy(["password"=>$username]);

       // $userr = $em->getRepository(User::class)->findOneBy(["id"=>1]);
        $reclamation->setUser($userr);
        $reclamation->setEtat(0);
        $date = new \DateTime('@'.strtotime('now'));
        $reclamation->setDateEnvoi($date);
        if ($form->isSubmitted() && $form->isValid()) {
            $email = (new Email())
                ->from('pigroupe56@gmail.com')
                ->to($reclamation->getUser()->getEmail())
                //->cc('cc@example.com')
                //->bcc('bcc@example.com')
                //->replyTo('fabien@example.com')
                //->priority(Email::PRIORITY_HIGH)
                ->subject('Reclamation reçu')
                ->text('Sending emails is fun again!')
                ->html('<p>Bonjour ' . $userr->getEmail() . ', Votre reclamation a bien été reçu et sera traitée dans les meilleurs délais !</p>');

            $mailer->send($email);
            $flashyNotifier->success('Envoyer avec succes');
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($reclamation);
            $entityManager->flush();
        }
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
            'form' =>   $form->createView()
        ]);
    }

}
