<?php

namespace Pfe\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller {

    public function sidebarAction($route) {
        $menu = array(
            array(
                'route' => 'pfe_web_homepage',
                'icon' => 'dashboard',
                'class' => 'start',
                'title' => 'dashboard.name',
            ),
            array(
                'routes' => array('pfe_tool_index', 'pfe_tool_new', 'pfe_tool_edit'),
                'icon' => 'wrench',
                'title' => 'tool.name',
                'submenu' => array(
                    array(
                        'route' => 'pfe_tool_index',
                        'title' => 'tool.index',
                    ),
                    array(
                        'route' => 'pfe_tool_new',
                        'title' => 'tool.new',
                    )
                )
            ),
            array(
                'routes' => array('pfe_user_index', 'pfe_user_new', 'pfe_user_edit'),
                'icon' => 'users',
                'title' => 'user.name',
                'submenu' => array(
                    array(
                        'route' => 'pfe_user_index',
                        'title' => 'user.index',
                    ),
                    array(
                        'route' => 'pfe_user_new',
                        'title' => 'user.new',
                    )
                )
            ),
            array(
                'routes' => array('homologation', 'homologation_new', 'homologation_edit'),
                'icon' => 'edit',
                'title' => 'homologation.name',
                'submenu' => array(
                    array(
                        'route' => 'homologation',
                        'title' => 'homologation.index',
                    ),
                    array(
                        'route' => 'homologation_new',
                        'title' => 'homologation.new',
                    )
                )
            ),
            array(
                'routes' => array('checklist', 'checklist_new', 'checklist_edit'),
                'icon' => 'tasks',
                'title' => 'checklist.name',
                'submenu' => array(
                    array(
                        'route' => 'checklist',
                        'title' => 'checklist.index',
                    ),
                    array(
                        'route' => 'checklist_new',
                        'title' => 'checklist.new',
                    )
                )
            ),
        );

        return $this->render('PfeWebBundle:Menu:sidebar.html.twig', array(
                    'menu' => $menu,
                    'route' => $route
        ));
    }

}
