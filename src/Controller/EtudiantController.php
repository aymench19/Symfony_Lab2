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
   #[Route('/list', name: 'liste')]
    public function listEtudiant()
   {
    $etudiants=array("aymen","ali");
    
    $modules= array(
        array("nom"=>"symfony","id"=>1,"enseignant"=>"mohamed","nbre_heures"=>42,"date"=>"12-12-2021"),
        array("nom"=>"JEE","id"=>2,"enseignant"=>"salah","nbre_heures"=>31,"date"=>"12-10-2021"),
        array("nom"=>"BD","id"=>3,"enseignant"=>"Islem","nbre_heures"=>21,"date"=>"12-09-2021"),);

    return $this->render('etudiant/list.html.twig',
        array ('etudiants' => $etudiants, 'listemodules' => $modules));
   }

}