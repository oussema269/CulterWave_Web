<?php

namespace App\Controller;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
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
use Dompdf\Options;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UserRepository;
use App\Repository\CodeRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Controller\MyControllerMailer;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('/api')]
class UserMobileController extends AbstractController
{
    #[Route('/register', name: 'app_user_mobil_new')]
    public function new(Request $request, UserRepository $userRepository, NormalizerInterface $Normalizer): JsonResponse
    {
        $user = new User();
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setEmail($request->get('email'));
        $user->setType($request->get('roles'));
        $user->setPassword($request->get('password'));
        $user->setIsActive(1);


        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        $jsoncontent = $Normalizer->normalize($user, 'json', ['groups' => 'users']);

        return new JsonResponse(json_encode($jsoncontent));
    }




    #[Route('/log', name: 'log')]
    public function loginmobile(Request $request, UserRepository $userRepository, NormalizerInterface $Normalizer): JsonResponse
    {

        $user1 = new User();
        $user = new User();
        $user->setEmail($request->get('email'));
        $user->setPassword($request->get('password'));




        $user1 = $userRepository->findOneBy(['email' => $user->getEmail()]);

        if ($user1) {
            if ($user1->checklogin($user->getEmail(), $user->getPassword()) == true && $user1->getIsActive() == 1) {
                $data = [
                    'nom' => $user1->getNom(),
                    'prenom' => $user1->getPrenom(),
                    'id' => $user1->getId(),
                    'password' => $user1->getPassword(),
                    'email' => $user1->getEmail(),
                    'role' => $user1->getType()

                ];

                $jsonData = json_encode($data);

                return new JsonResponse($jsonData, 200, [], true);
                // $jsoncontent = $Normalizer->normalize($user, 'json', ['groups' => 'users']);

                // return new JsonResponse(json_encode($jsoncontent));
            }
        }
        return new JsonResponse(['message' => 'failed'], 201);
    }
    #[Route('/edit', name: 'edit')]
    public function editmobile(Request $request, UserRepository $userRepository, NormalizerInterface $Normalizer): JsonResponse
    {

        $user1 = new User();
        $user = new User();
        $user->setId($request->get('id'));
        $user->setEmail($request->get('email'));
        $user->setNom($request->get('nom'));
        $user->setPrenom($request->get('prenom'));
        $user->setType($request->get('role'));
        $user->setPassword($request->get('password'));

        $user->setIsActive(1);



        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();


        $data = [
            'nom' => $user1->getNom(),
            'prenom' => $user1->getPrenom(),
            'id' => $user1->getId(),
            'password' => $user1->getPassword(),
            'email' => $user1->getEmail(),
            'role' => $user1->getType()

        ];

        $jsonData = json_encode($data);

        return new JsonResponse($jsonData, 200, [], true);
    }
    #[Route('/delete', name: 'delete')]
    public function delete(Request $request, UserRepository $userRepository, NormalizerInterface $Normalizer): JsonResponse
    {

        $id = $request->get('id');
        $user = $userRepository->find($id);
        $userRepository->remove($user, true);
        return new JsonResponse(['message' => 'sucss'], 201);
    }
    #[Route('/Forget', name: 'Forget')]
    public function ForgetPassword(Request $request, UserRepository $userRepository, NormalizerInterface $Normalizer, CodeRepository $codeRepository, MailerInterface $mailer): JsonResponse
    {
        $email = $request->get('email');
        $code = new Code();
        $code->setEmail($email);

        $user = $userRepository->findOneBy(['email' => $email]);
        if ($user != null) {
            $codeRepository->deleteByEmail($email);
            $codeRepository->save($code, true);
            $thecodesent = $codeRepository->findOneBy(['email' => $email]);

            $email = (new Email())
                ->from('heelos.gcfhvgjbhknj@gmail.com')
                ->to('mhmad.hafez@hotmail.com')
                // ->to($sss)
                // ->cc('cc@example.com')
                // ->bcc('bcc@example.com')
                // ->replyTo('fabien@example.com')
                // ->priority(Email::PRIORITY_HIGH)
                ->subject('Time for Symfony Mailer!' . $thecodesent->getcodeEmail())
                ->text('your code is :' . $thecodesent->getcodeEmail())
                ->html('<p>your code is:</p>' . $thecodesent->getcodeEmail());

            $mailer->send($email);
        }



        return new JsonResponse(['message' => 'sucss'], 201);
    }
    #[Route('/MakeNewPassword', name: 'MakeNewPassword')]
    public function MakeNewPassword(Request $request, UserRepository $userRepository, NormalizerInterface $Normalizer, CodeRepository $codeRepository, MailerInterface $mailer): JsonResponse
    {
        $emailsubmited = $request->get('email');
        $codesubmited = $request->get('code');
        $passwordsubmited = $request->get('password');
        $code = $codeRepository->findOneBy(['email' => $emailsubmited]);
        if ($code->getcodeEmail() == $codesubmited) {
            $user = $userRepository->findOneBy(['email' => $emailsubmited]);
            if ($user != null) {
                $user->setPassword($passwordsubmited);
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($user);
                $entityManager->flush();

                return new JsonResponse(['message' => 'sucss'], 201);
            } else {
                return new JsonResponse(['message' => 'failed'], 201);
            }
        } else {
            return new JsonResponse(['message' => 'failed'], 201);
        }
    }
}
