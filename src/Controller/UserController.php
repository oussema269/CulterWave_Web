<?php

namespace App\Controller;

use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use App\Entity\User;
use App\Entity\Code;
use Knp\Component\Pager\PaginatorInterface;
use App\Form\UserType;
use App\Form\EemType;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use App\Form\NewadminType;
use App\Form\NewpasswordType;
use App\Form\CodeType;
use Dompdf\Dompdf;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;
use App\Repository\CodeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Controller\MyControllerMailer;


#[Route('/user')]
class UserController extends AbstractController
{
    private $myControllerMailer;
    public function __construct(MyControllerMailer $myControllerMailer)
    {
        $this->myControllerMailer = $myControllerMailer;
    }

    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(Request $request, UserRepository $userRepository, SessionInterface $session, PaginatorInterface $paginator): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            // Unserialize the object to get the User instance
            $user1 = unserialize($serializedObject);
            $users = $userRepository->findAll();
            $users = $paginator->paginate(
                $users, /* query NOT result */
                $request->query->getInt('page', 1),
                5
            );
            return $this->render('user/index.html.twig', [
                'users' => $users,
                'user1' => $user1,
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }

    #[Route('/logout', name: 'logout', methods: ['GET'])]
    public function logout(SessionInterface $session): Response
    {
        $session->invalidate();
        return $this->redirectToRoute('hik', []);
    }
    #[Route('/rechercher', name: 'app_rechercher')]
    public function rechercher(Request $request, UserRepository $userRepository, PaginatorInterface $paginator): Response
    {
        $nom = $request->query->get('nom');
        $prenom = $request->query->get('nom');
        $email = $request->query->get('nom');


        $users = $userRepository->createQueryBuilder('l')
            ->where('l.nom LIKE :nom')
            ->orWhere('l.prenom LIKE :prenom')
            ->orWhere('l.Email LIKE :email')
            ->setParameter('nom', '%' . $nom . '%')
            ->setParameter('prenom', '%' . $prenom . '%')
            ->setParameter('email', '%' . $email . '%')
            ->getQuery();
        $users = $paginator->paginate(
            $users,
            $request->query->getInt('page', 1),
            2
        );

        return $this->render('user/index.html.twig', [
            'users' => $users,
        ]);
    }
    #[Route('/makenewpassword', name: 'makenewpassword', methods: ['GET', 'POST'])]
    public function makenewpassword(Request $request, UserRepository $userRepository, CodeRepository $codeRepository, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(NewpasswordType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $emailsubmited = $form->get('Email')->getData();
            $codesubmited = $form->get('code')->getData();
            $passwordsubmited = $form->get('password')->getData();
            $confirmpasswordsubmited = $form->get('password1')->getData();
            $code = $codeRepository->findOneBy(['email' => $emailsubmited]);
            if ($code->getcodeEmail() == $codesubmited && $code->getEmail() == $emailsubmited && $passwordsubmited == $confirmpasswordsubmited) {
                $user = $userRepository->findOneBy(['Email' => $emailsubmited]);
                if ($user != null) {
                    $user->setPassword($passwordsubmited);
                    $userRepository->save($user, true);
                    return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
                }
            }
        }

        return $this->renderForm('user/makeNewpassword.html.twig', [
            'form' => $form,
        ]);
    }
    #[Route('/forgetpassword', name: 'forgetpassword', methods: ['GET', 'POST'])]
    public function forgetpassword(Request $request, UserRepository $userRepository, MailerInterface $mailer, CodeRepository $codeRepository): Response
    {
        $thecodesent = new Code();
        $user = new User();
        $code = new Code();
        $form = $this->createForm(CodeType::class, $code);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $sss =  $code->getEmail();
            $user = $userRepository->findOneBy(['Email' => $sss]);
            if ($user != null) {
                $codeRepository->deleteByEmail($sss);
                $codeRepository->save($code, true);
                $thecodesent = $codeRepository->findOneBy(['email' => $sss]);

                $email = (new Email())
                    ->from('heelos.gcfhvgjbhknj@gmail.com')
                    ->to('mhmad.hafez@hotmail.com')
                    //->cc('cc@example.com')
                    //->bcc('bcc@example.com')
                    //->replyTo('fabien@example.com')
                    //->priority(Email::PRIORITY_HIGH)
                    ->subject('Time for Symfony Mailer!' . $thecodesent->getcodeEmail())
                    ->text('your code is :' . $thecodesent->getcodeEmail())
                    ->html('<p>your code is:</p>' . $thecodesent->getcodeEmail());

                $mailer->send($email);
                return $this->redirectToRoute('makenewpassword', [], Response::HTTP_SEE_OTHER);
            }
        }

        return $this->renderForm('user/forgetpassword.html.twig', [
            'form' => $form,
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
            $user1 = $userRepository->findOneBy(['Email' => $user->getEmail()]);


            if ($user1->checklogin($user->getEmail(), $user->getPassword()) == true && $user1->getIsActive() == 1) {
                $serializedObject = serialize($user1);
                $token = new UsernamePasswordToken(
                    $user1,
                    null,   // Credentials
                    'main', // Firewall name

                );

                // Set token in the security context
                $tokenStorage = $this->container->get('security.token_storage');
                $tokenStorage->setToken($token);
                // Set the serialized object in the session
                $session->set('user1', $serializedObject);
                if ($user1->getType() === 'admin') {
                    return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
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


                return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
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

    #[Route('/newforadmin', name: 'app_user_new-for-admin', methods: ['GET', 'POST'])]
    public function newforadmin(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(NewadminType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/newforadmin.html.twig', [
            'user' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/myaccount', name: 'app_user_show', methods: ['GET'])]
    public function show(SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            // Unserialize the object to get the User instance
            $user1 = unserialize($serializedObject);

            return $this->render('user/UserAfterlogin.html.twig', [
                'user' => $user1,
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/adminprofile', name: 'app_profil_admin', methods: ['GET'])]
    public function adminprofile(SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            // Unserialize the object to get the User instance
            $user1 = unserialize($serializedObject);

            return $this->render('user/AdminProfile.html.twig', [
                'user' => $user1,
            ]);
        } else {



            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/makepdf', name: 'app-make-pdf', methods: ['GET'])]
    public function makepdf(SessionInterface $session, UserRepository $userRepository, Dompdf $dompdf): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            $html = $this->renderView('user/pdf.html.twig', [
                'users' => $userRepository->findAll(),
            ]);

            // Generate the PDF using Dompdf
            $dompdf->loadHtml($html);
            $dompdf->setPaper('A4', 'portrait');
            $dompdf->render();

            // Return the PDF as a response
            return new Response(
                $dompdf->output(),
                200,
                [
                    'Content-Type' => 'application/pdf',
                    'Content-Disposition' => 'inline; filename="document.pdf"',
                ]
            );
        } else {
            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/testpdf', name: 'app-test-pdf', methods: ['GET', 'POST'])]
    public function testpdf(SessionInterface $session, UserRepository $userRepository): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject !== null) {
            return $this->render('user/pdf.html.twig', [
                'users' => $userRepository->findAll(),

            ]);
        } else {
            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
    }
    #[Route('/sendmail', name: 'sendmail')]
    public function sendmail(MailerInterface $mailer): Response
    {
        $email = (new Email())
            ->from('heelos.gcfhvgjbhknj@gmail.com')
            ->to('mhmad.hafez@hotmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            //->replyTo('fabien@example.com')
            //->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>See Twig integration for better HTML integration!</p>');

        $mailer->send($email);



        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/desactive', name: 'app_user_desactive', methods: ['POST'])]
    public function desactive(Request $request, EntityManagerInterface $entityManager, UserRepository $userRepository, $id, SessionInterface $session): Response
    {
        $serializedObject = $session->get('user1');
        if ($serializedObject == null) {
            // Unserialize the object to get the User instance

            return $this->redirectToRoute('hik', [], Response::HTTP_SEE_OTHER);
        }
        $user = $userRepository->find($id);

        if (!$user) {
            throw $this->createNotFoundException('The user does not exist');
        }

        $user->setIsActive(0);
        $entityManager->flush();

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/{id}/adminedit', name: 'app_user_editadmin', methods: ['GET', 'POST'])]
    public function Editforadmin(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_profil_admin', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/Editadmin.html.twig', [
            'user' => $user,
            'form' => $form,
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
            $serializedObject = $session->get('user1');

            $user1 = unserialize($serializedObject);
            if ($user1->getId() === $user->getId()) {
                // Unserialize the object to get the User instance

                $session->invalidate();
                return $this->redirectToRoute('', []);
            }
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
