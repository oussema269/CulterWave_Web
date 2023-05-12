<?php
namespace App\Controller\Mobile;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Twilio\Rest\Client;




class ProduitMobileController extends AbstractController
{

      #[Route("/produitMobile",name: "app_produit_mobile")]

    public function index(ProduitRepository $ProduitRepository): Response
    {
       
  
    }
    
   /* #[Route("addProduitMobile", name: "addProduitMobile")]

    public function addProduitJSON(Request $req,   NormalizerInterface $Normalizer, CategorieRepository $CategorieRepository)
    {

        // Récupérer la catégorie à partir de l'id de catégorie passé dans la requête
        $idCat = $req->get('idCat');
        $cat = $CategorieRepository->find($idCat);

        $em = $this->getDoctrine()->getManager();
        $Produit = new Produit();
        $Produit->setIdCat($idCat);
        $Produit->setLib($req->get('lib'));
        $Produit->setStock($req->get('stock'));
        $Produit->setPrix($req->get('prix'));
        $Produit->setCategorie($cat);
        $em->persist($Produit);
        $em->flush();

        $jsonContent = $Normalizer->normalize($Produit, 'json', ['groups' => 'Produits']);
        return new Response(json_encode($jsonContent));
    }*/
    #[Route("deleteProduitMobile/{id}", name: "deleteProduitMobile")]
    public function deleteProduitJSON(Request $req, $id, NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $Produit = $em->getRepository(Produit::class)->find($id);
        $em->remove($Produit);
        $em->flush();
        $jsonContent = $Normalizer->normalize($Produit, 'json', ['groups' => 'Produits']);
        return new Response("Produit deleted successfully " . json_encode($jsonContent));
    }



#[Route("addProduitMobile", name: "addProduitMobileProduit")]
public function addProduitJSON(Request $req, NormalizerInterface $Normalizer, CategorieRepository $CategorieRepository): Response
{
    // Récupérer la catégorie à partir de l'id de catégorie passé dans la requête
    $idCat = $req->get('idCat');
    $cat = $CategorieRepository->find($idCat);

    $em = $this->getDoctrine()->getManager();
    $Produit = new Produit();
    $Produit->setIdCat($idCat);
    $Produit->setLib($req->get('lib'));
    $Produit->setStock($req->get('stock'));
    $Produit->setPrix($req->get('prix'));
    $Produit->setCategorie($cat);
    $em->persist($Produit);
    $em->flush();

    // Intégration de l'API Twilio
    $sid = "AC2e3e3f431567d6395601f5cc2dbb1e7a";
    $token = "014d320c5dcaf40788e4953d958587a9";
    $twilio = new Client($sid, $token);

    $message = $twilio->messages
                      ->create(
                          "+21627865222", // Le numéro de téléphone destinataire
                          [
                              "body" => "Un nouveau produit a été ajouté !",
                              "from" => "+16204989929" // Le numéro de téléphone Twilio
                          ]
                      );
    
    // Conversion de l'objet Produit en format JSON et renvoi de la réponse
    $jsonContent = $Normalizer->normalize($Produit, 'json', ['groups' => 'Produits']);
    return new Response(json_encode($jsonContent));
}


    #[Route("updateProduitMobile/{id}", name: "updateProduitMobile")]
    public function updateProduitJSON(Request $req, $id, NormalizerInterface $Normalizer , CategorieRepository $CategorieRepository)
    {

        $em = $this->getDoctrine()->getManager();
        $Produit = $em->getRepository(Produit::class)->find($id);
         // Récupérer la catégorie à partir de l'id de catégorie passé dans la requête
         $idCat = $req->get('idCat');
         $cat = $CategorieRepository->find($idCat);
         $Produit->setIdCat($idCat);
         $Produit->setLib($req->get('lib'));
         $Produit->setStock($req->get('stock'));
         $Produit->setPrix($req->get('prix'));
         $Produit->setCategorie($cat);
        $em->flush();

        $jsonContent = $Normalizer->normalize($Produit, 'json', ['groups' => 'Produits']);
        return new Response("Produit updated successfully " . json_encode($jsonContent));
    }
/*
    #[Route("/AllProduitsMobile", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et StudentRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getProduits(ProduitRepository $repo, SerializerInterface $serializer)
    {
        $Produits = $repo->findAll();
        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* Produits en  tableau associatif simple.
        // $ProduitsNormalises = $normalizer->normalize($Produits, 'json', ['groups' => "Produits"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($ProduitsNormalises);

        $json = $serializer->serialize($Produits, 'json', ['groups' => "Produits"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }
*/
#[Route("/AllProduitsMobile", name: "list")]
public function getProduits(ProduitRepository $repo)
{
    $Produits = $repo->findAll();
    
    $jsonData = [];

    foreach ($Produits as $produit) {
        $data = [
            'id' => $produit->getId(),
            'id_cat' => $produit->getIdCat(),
            'lib' => $produit->getLib(),
            'stock' => $produit->getStock(),
            'prix' => $produit->getPrix(),
        ];

        $jsonData[] = $data;
    }

    return $this->json($jsonData);
}

  

}