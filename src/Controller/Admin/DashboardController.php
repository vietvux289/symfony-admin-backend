<?php

namespace App\Controller\Admin;
use App\Entity\School;
use App\Entity\Classes;
use App\Entity\Student;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Mysite');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('School', 'fa fa-school', School::class);
        yield MenuItem::linkToCrud('Class', 'fa fa-graduation-cap', Classes::class);
        yield MenuItem::linkToCrud('Student', 'fas fa-user', Student::class);
    }
}