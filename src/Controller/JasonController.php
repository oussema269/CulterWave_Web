<?php
 
namespace App\Controller;
use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\User;
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
 
 
 
 
 
class JasonController extends AbstractController
{
    #[Route('/jason', name: 'app_jason')]
    public function index(): Response
    {
        return $this->render('jason/index.html.twig', [
            'controller_name' => 'JasonController',
        ]);
    }
 
    #[Route("/Allcart", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getpanier(PanierRepository $repo, SerializerInterface $serializer)
    {
        $panier = $repo->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* students en  tableau associatif simple.
        // $studentsNormalises = $normalizer->normalize($students, 'json', ['groups' => "students"]);
 
        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($studentsNormalises);
 
        $json = $serializer->serialize($panier, 'json', ['groups' => "panier"]);
        // $json=json_encode($json);
        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }
 
    #[Route("/affcart", name: "cart")]
    public function cartid( Request $req,SerializerInterface $serializer, PanierRepository $repo,ManagerRegistry $doctrine)
    {
        $em = $doctrine->getManager();
       
        // Récupérer l'utilisateur
        $id = $req->get('id');
        $entityManager = $doctrine->getManager();
        $cart = $entityManager->getRepository(Panier::class)->findBy([
            'idClient' => $id
        ]);
        $count =count($cart);
        $formatred = [];
        foreach ($cart as $item) {
            $formatred[] = [
                'idpanier' => $item->getIdPanier(),
                'quantite' => $item->getQuantite(),
                'iduser' => $item->getIdClient()->getId(),
                'idprod' => $item->getIdProduct()->getId(),
                'nomproduit' => $item->getIdProduct()->getLib(),
                'prix' => $item->getIdProduct()->getPrix(),
                'image' => $item->getIdProduct()->getImage(),
                'count'=>$count
            ];
        }
 
        $jsonData = $serializer->serialize($formatred, 'json');
        return new Response($jsonData);
    }
 
 
    #[Route("addcart", name: "addcart")]
    public function addcartjason(Request $req,   NormalizerInterface $Normalizer,ManagerRegistry $doctrine)
    {
//iduser+idprod+qt
 
 
    $em = $doctrine->getManager();
 
        // Récupérer l'utilisateur
        $idUsercon = $req->get('idClient');
        $utilisateur = $em->getRepository(User::class)->find($idUsercon);
 
        // Récupérer le produit
        $idProduit = $req->get('idProduct');
        $produit = $em->getRepository(Produit::class)->find($idProduit);
 
        // Vérifier si le panier existe déjà pour cet utilisateur et ce produit
        $cart = $em->getRepository(Panier::class)->findOneBy([
            'idClient' => $utilisateur,
            'idProduct' => $produit,
        ]);
          
        // Incrémenter la quantité si le produit est déjà présent dans le panier
        if ($cart) {
            $cart->setQuantite($cart->getQuantite() + $req->get('qt'));
        } else {
            // Créer un nouveau panier si le produit n'est pas déjà présent dans le panier
            $cart = new Panier();
            $cart->setQuantite($req->get('qt'));
            $cart->setIdClient($utilisateur);
            $cart->setIdProduct($produit);
        }
 
        // Enregistrer le panier en base de données
        $em->persist($cart);
        $em->flush();
 
        // Retourner la réponse JSON
        $jsonContent = $Normalizer->normalize($cart, 'json', ['groups' => 'panier']);
        return new Response(json_encode($jsonContent));
     }
 
     #[Route("increment", name: "increment")]
     public function incrementcartjason(Request $req, NormalizerInterface $Normalizer,ManagerRegistry $doctrine)
     {
        $em = $doctrine->getManager();
        $idUsercon = $req->get('id');
        $utilisateur = $em->getRepository(User::class)->find($idUsercon);
 
        // Récupérer le produit
        $idProduit = $req->get('idprod');
        $produit = $em->getRepository(Produit::class)->find($idProduit);
 
        // Vérifier si le panier existe déjà pour cet utilisateur et ce produit
        $cart = $em->getRepository(Panier::class)->findOneBy([
            'idClient' => $utilisateur,
            'idProduct' => $produit,
        ]);
         $cart->setQuantite($cart->getQuantite() + 1);
 
         $em->flush();
 
         $jsonContent = $Normalizer->normalize($cart, 'json', ['groups' => 'panier']);
         return new Response("cart updated successfully " . json_encode($jsonContent));
     }
 
     #[Route("decrement", name: "decrement")]
     public function decrementcartjason(Request $req, NormalizerInterface $Normalizer,ManagerRegistry $doctrine)
     {
        $em = $doctrine->getManager();
        $idUsercon = $req->get('id');
        $utilisateur = $em->getRepository(User::class)->find($idUsercon);
 
        // Récupérer le produit
        $idProduit = $req->get('idprod');
        $produit = $em->getRepository(Produit::class)->find($idProduit);
 
        // Vérifier si le panier existe déjà pour cet utilisateur et ce produit
        $cart = $em->getRepository(Panier::class)->findOneBy([
            'idClient' => $utilisateur,
            'idProduct' => $produit,
        ]);
         $cart->setQuantite($cart->getQuantite() - 1);
 
         $em->flush();
 
         $jsonContent = $Normalizer->normalize($cart, 'json', ['groups' => 'panier']);
         return new Response("cart updated successfully " . json_encode($jsonContent));
     }
     #[Route("deletepanier", name: "deletepanier")]
     public function deletepanier(Request $req, NormalizerInterface $Normalizer,ManagerRegistry $doctrine)
     {
        $em = $doctrine->getManager();
        $idUsercon = $req->get('iduser');
        $utilisateur = $em->getRepository(User::class)->find($idUsercon);
 
        // Récupérer le produit
        $idProduit = $req->get('idprod');
        $produit = $em->getRepository(Produit::class)->find($idProduit);
 
        // Vérifier si le panier existe déjà pour cet utilisateur et ce produit
        $cart = $em->getRepository(Panier::class)->findOneBy([
            'idClient' => $utilisateur,
            'idProduct' => $produit,
        ]);
 
 
 
         $em->remove($cart);
         $em->flush();
         $jsonContent = $Normalizer->normalize($cart, 'json', ['groups' => 'panier']);
         return new Response("cart deleted successfully " . json_encode($jsonContent));
     }
 
 
 
 
     #[Route("/affqt", name: "qt")]
     public function affqt( Request $req,SerializerInterface $serializer, PanierRepository $repo,ManagerRegistry $doctrine)
     {
         $em = $doctrine->getManager();
 
         // Récupérer l'utilisateur
         $id = $req->get('id');
         $idProduit = $req->get('idprod');
         $entityManager = $doctrine->getManager();
         $cart = $entityManager->getRepository(Panier::class)->findBy([
             'idClient' => $id,
             'idProduct'=> $idProduit,
         ]);
 
         $formatred = [];
         foreach ($cart as $item) {
             $formatred[] = [
 
                 'quantite' => $item->getQuantite(),
 
             ];
         }
 
         $jsonData = $serializer->serialize($formatred, 'json');
         return new Response($jsonData);
     }
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}