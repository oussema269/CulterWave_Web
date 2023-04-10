<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\EemType;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'login')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    #[Route('/userr', name: 'dashbord')]
    public function indexx(): Response
    {
        return $this->render('user/dashbordadmin.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/hik', name: 'hik', methods: ['GET', 'POST'])]
    public function logg(Request $request, UserRepository $userRepository, SessionInterface $session): Response
    {

        $user1 = new User();
        $user = new User();
        $form = $this->createForm(EemType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $user = $this->findOneBy(['Email' => $user->getEmail()]);
            $user1 = $userRepository->findOneBy(['email' => $user->getEmail()]);


            if ($user1->checklogin($user->getEmail(), $user->getPassword()) == true && $user1->getIsActive() == 1) {
                $serializedObject = serialize($user1);

                // Set the serialized object in the session
                $session->set('user1', $serializedObject);
                if ($user->getType() === 'admin') {
                    return $this->render('user/dashbordadmin.html.twig', [
                        'users' => $user1,
                    ]);
                }
                if ($user1->getType() === 'vendeur') {
                    return $this->render('user/dashbordadmin.html.twig', [
                        'user' => $user1,
                    ]);
                }
                if ($user1->getType() === 'formateur') {
                    return $this->render('user/dashbordadmin.html.twig', [
                        'user' => $user1,
                    ]);
                }
                if ($user1->getType() === 'user') {
                    return $this->render('user/dashbordadmin.html.twig', [
                        'user' => $user1,
                    ]);
                }


                return $this->redirectToRoute('dashbord', [], Response::HTTP_SEE_OTHER);
            } else {
                return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->renderForm('user/index.html.twig', [
            'form' => $form,
        ]);
    }


}
