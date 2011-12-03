<?php
// src/Intel/StoryPlayAppBundle/Menu/Builder.php
namespace Thrillabyte\AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class MainMenu extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory)
    {
        $menu = $factory->createItem('root');
        $menu->setCurrentUri($this->container->get('request')->getRequestUri());
        // 
        //$menu->addChild('Home', array('route' => 'fos_user_profile'));
        // $menu->addChild('Latest', array(
        //     'route' => 'post_show', 
        //     'routeParameters' => array('id' => 1)
        // ));

        return $menu;
    }

}