<?php

namespace App\Controller;

use App\Entity\LigneEvaluation;
use App\Form\LigneEvaluationType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SaisirNoteController extends AbstractController
{
    // import et export excel pas réussi à le mettre en place 
    // #[Route('saisir/note/export/excel',name:'app_saisir_export_excel')]
    // public function exportExcel(EntityManagerInterface $em): Response
    // {
    //     $file = "../public/modele-document/modele-fichier-client.xlsx";
    //     $spreadsheet = IOFactory::load($file);
    //     $sheet = $spreadsheet->getActiveSheet();
    //     $clients = $em->getRepository(Client::class)->findAll();
    //     $row = 4;
    //     $nbre = 0;
    //     foreach ($clients as $client) {
    //         $sheet->insertNewRowBefore($row);
    //         $sheet->setCellValue("A$row", $client->getNumClient());
    //         $sheet->setCellValue("B$row", $client->getNomClient());
    //         $sheet->setCellValue("C$row", $client->getAdresseClient());
    //         $row++;
    //         $nbre++;
    //     }
    //     $row--;
    //     $nbre = count($clients);
    //     $sheet->setCellValue("A$row", "Nombre Clients = $nbre");
    //     $destination = "../public/partage-document/liste_clients.xlsx";
    //     $writer=new Xlsx($spreadsheet);
    //     $writer->save($destination);
    //     echo "Exportation termine";
    //     exit;
        
    // }

    #[Route('/saisir/note/', name: 'app_saisir_note')]
    public function index(EntityManagerInterface $em, Request $request): Response
    {
        $ligneEval = $em->getRepository(LigneEvaluation::class)->findAll();

        // Crée une nouvelle ligne évaluation
        $ligneEvaluation = new LigneEvaluation();

        // Crée le form
        $form = $this->createForm(LigneEvaluationType::class, $ligneEvaluation);

        // Handle la requête
        $form->handleRequest($request);

        // vérifier si le form est soumis et valider
        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegarder la LigneEvaluation entity
            $em->persist($ligneEvaluation);
            $em->flush();

            // redirection
        }

       
        return $this->render('saisir_note/index.html.twig', [
            'controller_name' => 'SaisirNoteController',
            'ligneEval' => $ligneEval,
            'form' => $form->createView(), // envoyer vers le template
        ]);
    }

    #[Route('/saisir/note/show/{id}', name: 'app_saisir_show')]
    public function show(EntityManagerInterface $em, $id, Request $request)
    {
        $note = $em->getRepository(LigneEvaluation::class)->find($id);

        $form  = $this->createForm(LigneEvaluationType::class, $note);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($note);
            $em->flush();
            return $this->redirectToRoute('app_saisir_note');
        }
        return $this->render('saisir_note/form.html.twig', [
            'note' => $note,
            'form' => $form
        ]);
    }
}
