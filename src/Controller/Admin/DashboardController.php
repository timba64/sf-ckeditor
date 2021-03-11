<?php

namespace App\Controller\Admin;

use App\Entity\News;
use App\Entity\Tag;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
//use EasyCorp\Bundle\EasyAdminBundle\Router\CrudUrlGenerator;
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
            ->setTitle('My Project Name');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('News', 'fas fa-newspaper', News::class);
        yield MenuItem::linkToCrud('Tag', 'fas fa-tags', Tag::class);
				yield MenuItem::section('Service');
				//yield MenuItem::linkToRoute('Home', 'fa fa-home', 'homepage');
				yield MenuItem::linkToUrl('to Frontend', 'fa fa-archway', '/');
        // yield MenuItem::linkToCrud('The Label', 'fas fa-accusoft', EntityClass::class);
    }
}
