<?php

namespace AppBundle\Twig;

class MontantHTExtension extends \Twig_Extension
{

    public function getFilters()
    {
        return array(new \Twig_SimpleFilter('montantHT', array($this, 'montantHT')));
    }

    function montantHT($prixHT, $tva)
    {
        $tva = ($tva / 100) + 1;
        return round(($prixHT / $tva),2);
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'montant_ht_extension';
    }
}
