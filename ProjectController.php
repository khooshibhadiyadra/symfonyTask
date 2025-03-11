<?php

namespace App\Controller;

use App\Entity\Project;
use App\Form\ProjectType;
use App\Repository\ProjectRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Doctrine\ORM\EntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\Tools\Pagination\Paginator;


#[Route('/project')]
final class ProjectController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine) {}
    
    #[Route(name: 'app_project_index', methods: ['GET'])]
public function index(ProjectRepository $projectRepository, Request $request, EntityManagerInterface $em): Response
{
    $page = $request->query->getInt('page', 1);
    $limit = 10;

    $qb = $em->getRepository(Project::class)->createQueryBuilder('e')->orderBy('e.id', 'DESC');

    $nameInput = $request->query->get('nameInput', null);
    if ($nameInput !== null) {
        
        $qb->andWhere('e.name LIKE :name') 
           ->setParameter('name', '%' . $nameInput . '%'); 
    }

    $query = $qb->getQuery();
    $paginator = new Paginator($query);

    $paginator->getQuery()->setFirstResult(($page - 1) * $limit)->setMaxResults($limit);

    $totaldata = count($paginator);

    $totalPages = ceil($totaldata / $limit);

    $pagination = [
        'currentPage' => $page,
        'totalPages' => $totalPages,
        'project' => $paginator,
        'nameInput' => $nameInput,
    ];

    return $this->render('project/index.html.twig', [
        'projects' => $paginator,
        'pagination' => $pagination,
        'nameInput' => $nameInput,  
    ]);
}


    #[Route('/new', name: 'app_project_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $project->setCreatedAt(new \DateTime());
            $project->setUpdatedAt(new \DateTime());
            $documentfile=$form->get('document')->getData();
            if($documentfile){
                $orignalfilename=pathinfo($documentfile->getClientOriginalName(),PATHINFO_FILENAME);
                $safefilename=$slugger->slug($orignalfilename);
                $newfilename=$safefilename.'-'.uniqid().'.'.$documentfile->guessExtension();
                try {
                    $documentfile->move($this->getParameter('documents_directory'), $newfilename);
                }
                catch(FileException $e){

                }
                $project->setDocument($newfilename);

            }
            $entityManager->persist($project);
            $entityManager->flush();

            return $this->redirectToRoute('app_project_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('project/new.html.twig', [
            'project' => $project,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_project_show', methods: ['GET'])]
    public function show(Project $project): Response
    {
        return $this->render('project/show.html.twig', [
            'project' => $project,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_project_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Project $project, EntityManagerInterface $entityManager,SluggerInterface $slugger): Response
    {
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $project->setUpdatedAt(new \DateTime());
            $documentfile = $form->get('document')->getData();
            if ($documentfile) {
                $orignalfilename = pathinfo($documentfile->getClientOriginalName(), PATHINFO_FILENAME);
                $safefilename = $slugger->slug($orignalfilename);
                $newfilename = $safefilename.'-'.uniqid().'.'.$documentfile->guessExtension();
                try {
                    $documentfile->move($this->getParameter('documents_directory'), $newfilename);
                }catch (FileException $e){

                }
                if($project->getDocument())
                {
                    @unlink($this->getParameter('documents_directory').'/'.$project->getDocument());
                }
                $project->setDocument($newfilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('app_project_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('project/edit.html.twig', [
            'project' => $project,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_project_delete', methods: ['POST'])]
    public function delete(Request $request, Project $project, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$project->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($project);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_project_index', [], Response::HTTP_SEE_OTHER);
    }
}
