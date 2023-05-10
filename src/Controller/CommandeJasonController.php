<?php
 
namespace App\Controller;
use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\User;
use App\Entity\Commande;
use App\Repository\PanierRepository;
use App\Repository\ProduitRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use DateTimeImmutable;

class CommandeJasonController extends AbstractController
{
    #[Route('/commande/jason', name: 'app_commande_jason')]
    public function index(): Response
    {
        return $this->render('commande_jason/index.html.twig', [
            'controller_name' => 'CommandeJasonController',
        ]);
    }
 
    #[Route("/affcommande", name: "affcommande")]
    public function affcommande( Request $req,SerializerInterface $serializer, PanierRepository $repo,ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
 
        // Récupérer l'utilisateur
        $id = $req->get('iduser');
        $entityManager = $doctrine->getManager();
        $commande = $entityManager->getRepository(Commande::class)->findBy([
            'idClient' => $id
        ]);
 
        $formatred = [];
        foreach ($commande as $item) {
            $formatred[] = [
                'idcommande' => $item->getIdc(),
                'iduser' => $item->getIdClient()->getId(),
                'nom' => $item->getNom(),
                'prenom' => $item->getPrenom(),
                'total' => $item->getTotale(),
 
 
            ];
        }
 
        $jsonData = $serializer->serialize($formatred, 'json');
        return new Response($jsonData);
    }
 
    #[Route("addcommande", name: "addcommande")]
    public function addcommande(Request $req,   NormalizerInterface $Normalizer,ManagerRegistry $doctrine)
    {
//iduser+idprod+qt
$entityManager=$doctrine->getManager();
 
    $em = $doctrine->getManager();
 
        // Récupérer l'utilisateur
        $idUsercon = $req->get('iduser');
        $utilisateur = $em->getRepository(User::class)->find($idUsercon);
        $nom = $req->get('nom');
        $prenom = $req->get('prenom');
        $email = $req->get('email');
 
 
        $panier = $entityManager->getRepository(Panier::class)->findBy([
            'idClient' => $idUsercon
        ]);
        $totalPrice = 0;
 
        foreach ($panier as $item) {
            $product = $item->getIdProduct();
            $quantity = $item->getQuantite();
            $totalPrice += $product->getPrix() * $quantity;
        }
        // Récupérer le produit
 
 
        // Vérifier si le panier existe déjà pour cet utilisateur et ce produit
 
            // Créer un nouveau panier si le produit n'est pas déjà présent dans le panier
            $commande = new commande();
            $commande->setIdClient($utilisateur);
            $commande->setNom($nom);
            $commande->setPrenom($prenom);
            $commande->setTotale($totalPrice);
            $commande->setDate(new DateTimeImmutable());
            $commande->setEmail($email);
 
        // Enregistrer le panier en base de données
        $em->persist($commande);
        $em->flush();
 
        // Retourner la réponse JSON
        $jsonContent = $Normalizer->normalize($commande, 'json');
        return new Response(json_encode($jsonContent));
     }
 
 
 
 
 
 
 
 
}