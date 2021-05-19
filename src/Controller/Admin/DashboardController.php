<?php

namespace App\Controller\Admin;

use App\Controller\Admin\Crud\EducationCrudController;
use App\Entity\Education;
use App\Entity\Hobbies;
use App\Entity\ProfessionalExperiences;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(EducationCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Portfolio');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Education', 'fas fa-graduation-cap', Education::class);
        yield MenuItem::linkToCrud('Hobbies', 'fas fa-snowboarding', Hobbies::class);
        yield MenuItem::linkToCrud('ProfessionalExperiences', 'fas fa-user-tie', ProfessionalExperiences::class);
        yield MenuItem::linkToRoute('Portfolio', 'fas fa-undo-alt', 'home' );
    }
}
