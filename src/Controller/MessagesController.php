<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\MessageType;
use App\Repository\MessagesRepository;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;

class MessagesController extends AbstractController
{
    /**
     * @Route("/messages", name="app_messages")
     */
    public function index(): Response
    {
        return $this->render('messages/listeUsers.html.twig', [
            'controller_name' => 'MessagesController',
        ]);
    }
    /**
     * @Route("/messages/{id}", name="app_messages")
     */
    public function discussion(int $id,MessagesRepository $messagesRepository,Request $request,UserInterface $user): Response
    {
        $NewMessage=New Messages();
        $username=$user->getPassword();
        $em=$this->getDoctrine()->getManager();
        $user1 = $em->getRepository(User::class)->findOneBy(["password"=>$username]);

        //$user1 = $this->getDoctrine()->getRepository(User::class)->find(1);
        $user2 = $this->getDoctrine()->getRepository(User::class)->find($id);
        $url = 'https://www.babyjoey.tn/profile/'.$id;
        $form = $this->createForm(MessageType::class,$NewMessage);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $date = new \DateTime('@'.strtotime('now'));
            $NewMessage->setDate($date);
            $NewMessage->setSenderId($user1);
            $NewMessage->setRecipientId($user2);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($NewMessage);
            $entityManager->flush();
        }
        return $this->render('messages/index.html.twig', [
            'controller_name' => 'MessagesController',
            "messages" => $messagesRepository->findBySenderAndRecipient($user1,$user2),
            "ConnectedUser"=>$user1,
            "OtherUser"=>$user2,
            "userId" =>$user1->getId(),
            'form' => $form->createView(),
            "myurl"=>$url
        ]);
    }
    /**
     * @Route("message/{id}/{idPath}/delete", name="message_delete")
     * @param Messages $messages
     * @return RedirectResponse
     */
    public function delete (Messages $messages,int $idPath,FlashyNotifier $flashyNotifier): RedirectResponse
    {
        $em = $this->getDoctrine()->getManager();

        $em->remove($messages);
        $em->flush();
        $flashyNotifier->message("votre message a été supprimé avec succées");
        return $this->redirect("/messages/".$idPath);

    }
}
