<?php  
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/etudiant', name: 'etudiant')]
    public function index(): Response
    {
        return new Response("Bonjour mes étudiants");
    }
    #[Route('/etudiant/{id}', name: 'affichage_etudiant', requirements: ['id' => '\d{2}'])]
    public function affichageEtudiant($id): Response
    {
        return new Response("Bonjour étudiant numéro : " . $id);
    }
    

    #[Route('/etudiant/{name}', name: 'etudiant_name')]
    public function voirNom(string $name): Response
   {
    return $this->render('etudiant/etudiant.html.twig', [
        'name' => $name,
    ]);
   }

}