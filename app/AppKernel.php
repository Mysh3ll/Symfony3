<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new AppBundle\AppBundle(),
            // FOSUserBundle -> gestion des utilisateurs
            new FOS\UserBundle\FOSUserBundle(),
            // VichBundle -> gestion de l'upload de fichier
            new Vich\UploaderBundle\VichUploaderBundle(),
            // FOSJsRoutingBundle -> gestion des routes en Jquery/Ajax
            new FOS\JsRoutingBundle\FOSJsRoutingBundle(),
            // KnpPaginatorBundle -> gestion de la pagination des pages
            new Knp\Bundle\PaginatorBundle\KnpPaginatorBundle(),
            // KnpSnappyBundle -> génère un fichier pdf/img
            new Knp\Bundle\SnappyBundle\KnpSnappyBundle(),
            // QRcodeBundle -> génère un qrcode/barcode
            new Skies\QRcodeBundle\SkiesQRcodeBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
