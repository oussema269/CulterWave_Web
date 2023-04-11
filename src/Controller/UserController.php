<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Form\EemType;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository): Response
    {
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
        ]);
    }
    #[Route('/logout', name: 'logout', methods: ['GET'])]
    public function logout(SessionInterface $session): Response
    {
        $session->invalidate();
        return $this->redirectToRoute('hik', []);
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
            $user1 = $userRepository->findOneBy(['Email' => $user->getEmail()]);


            if ($user1->checklogin($user->getEmail(), $user->getPassword()) == true && $user1->getIsActive() == 1) {
                $serializedObject = serialize($user1);

                // Set the serialized object in the session
                $session->set('user1', $serializedObject);
                if ($user->getType() === 'admin') {
                    return $this->render('user/AdminUserAfficharge.html.twig', [
                        'users' => $user1,
                    ]);
                }
                if ($user1->getType() === 'vendeur') {
                    return $this->render('user/UserAfterlogin.html.twig', [
                        'user' => $user1,
                    ]);
                }
                if ($user1->getType() === 'formateur') {
                    return $this->render('user/UserAfterlogin.html.twig', [
                        'user' => $user1,
                    ]);
                }
                if ($user1->getType() === 'user') {
                    return $this->render('user/UserAfterlogin.html.twig', [
                        'user' => $user1,
                    ]);
                }


                return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
            } else {
                return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
            }
        }
        return $this->renderForm('user/login.html.twig', [
            'form' => $form,
        ]);
    }


    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/myaccount', name: 'app_user_show', methods: ['GET'])]
    public function show(SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');

        // Unserialize the object to get the User instance
        $user1 = unserialize($serializedObject);
        return $this->render('user/UserAfterlogin.html.twig', [
            'user' => $user1,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_show', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository, SessionInterface $session): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
            $session->invalidate();
            return $this->redirectToRoute('hik', []);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
