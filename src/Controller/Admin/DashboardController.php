<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Controller\Admin\PostCrudController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator){}

    #[Route('/admin', name: 'app_admin')]
    #[IsGranted('ROLE_ADMIN')] 
    public function index(): Response
    {
        return $this->redirect($this->adminUrlGenerator->setController(PostCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Newspreneuriat')->setLocales(['fr']);
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToRoute('Revenir sur le site', routeName:'app_home', icon: 'fa fa-home');
        yield MenuItem::section();
        yield MenuItem::linkToCrud('Articles', 'fa fa-file-text', Post::class);
    }
}
