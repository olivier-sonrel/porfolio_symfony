<?php

namespace App\Controller;

use App\Repository\EducationRepository;
use App\Repository\HobbiesRepository;
use App\Repository\ProfessionalExperiencesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    /**
     * @Route("/education", name="education")
     */
    public function education(EducationRepository $repository): Response
    {
        $graduations = $repository->findAll();

        return $this->render('home/education.html.twig', [
            'graduations' => $graduations,
        ]);
    }

    /**
     * @Route("/pro", name="pro")
     */
    public function pro(ProfessionalExperiencesRepository $repository): Response
    {
        $experiences = $repository->findAll();

        return $this->render('home/pro.html.twig', [
            'experiences' => $experiences,
        ]);
    }

    /**
     * @Route("/hobbies", name="hobbies")
     */
    public function hobbies(HobbiesRepository $repository): Response
    {
        $hobbies = $repository->findAll();

        return $this->render('home/hobbies.html.twig', [
            'hobbies' => $hobbies,
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
