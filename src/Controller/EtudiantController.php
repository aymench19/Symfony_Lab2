<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EtudiantController extends AbstractController
{
    #[Route('/list', name: 'list_etudiant')]
    public function listEtudiant(): Response
    {
        // Tableau simple
        $etudiants = ['Ali', 'Sarra', 'Ahmed'];

        // Tableau associatif
        $modules = [
            ["id" => 1 ,"enseignant" => "Ali" ,"nbr_heures" => 30 , "date_creation" => "2023-01-15" ],
            ["id" => 2 ,"enseignant" => "Sarra" ,"nbr_heures" => 25 , "date_creation" => "2023-01-16" ],
            ["id" => 3 ,"enseignant" => "Ahmed" ,"nbr_heures" => 20 , "date_creation" => "2023-01-17" ],
        ];

return $this->render('etudiant/list.html.twig', [
    'etudiants' => $etudiants,
    'modules' => $modules,
]);

    }

    #[Route('/affecter', name: 'affecter_etudiant')]
    public function affecter(): Response
    {
        return $this->render('etudiant/affecter.html.twig');
    }

    #[Route('/', name: 'index_fils')]
    public function indexFils(): Response
    {
$etudiants = ['Ali', 'Sarra', 'Ahmed'];
    $modules = [
        ["id" => 1 ,"enseignant" => "Ali" ,"nbr_heures" => 30 , "date_creation" => "2023-01-15" ],
        ["id" => 2 ,"enseignant" => "Sarra" ,"nbr_heures" => 25 , "date_creation" => "2023-01-16" ],
        ["id" => 3 ,"enseignant" => "Ahmed" ,"nbr_heures" => 20 , "date_creation" => "2023-01-17" ],
    ];

    return $this->render('etudiant/index.html.twig', [
        'etudiants' => $etudiants,
        'modules' => $modules,
    ]);    }
}