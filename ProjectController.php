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
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Controller\document;
use Symfony\Component\Validator\Constraints\DateTime;

#[Route('/project')]
final class ProjectController extends AbstractController
{
    private $hobby = null;
    private $createdAt;

    #[Route(name: 'app_project_index', methods: ['GET'])]
    public function index(Request $request, ProjectRepository $projectRepository): Response
    {
 
    $role = $request->query->get('role');   
    $status = $request->query->get('status');
    $startDate = $request->query->get('start_date');
    $endDate = $request->query->get('end_date');
  
    $qb = $projectRepository->createQueryBuilder('p');

    if ($role) {
        $qb->andWhere('p.role LIKE :role')
           ->setParameter('role',  $role )
           ->getQuery()
           ->getResult();         
    }

    if ($status !== null) {
        $qb->andWhere('p.status = :status')
           ->setParameter('status', (string)$status)
           ->getQuery()
           ->getResult(); 
  }

    if ($startDate && $endDate) {
        $qb->andWhere('p.createdAt BETWEEN :startDate AND :endDate')
           ->setParameter('startDate', new \DateTime($startDate))
           ->setParameter('endDate', new \DateTime($endDate))
           ->getQuery();
    }
    $projects = $qb->getQuery()->getResult();
 
    return $this->render('project/index.html.twig', [
        'projects' => $projects,
        
    ]);
    }

    #[Route('/new', name: 'app_project_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $project = new Project();
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $project->setCreatedAt(new \DateTime);
            $project->setUpdatedAt(new \DateTime);
            
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
    public function edit(Request $request, Project $project, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ProjectType::class, $project);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $project->setUpdatedAt(new \DateTime);
            
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
