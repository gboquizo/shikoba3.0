<?php

namespace AppBundle\Twig\Extension;

class FileExtension extends \Twig_Extension
{

    /**
     * Return the functions registered as twig extensions
     *
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'file_exists' => new \Twig_SimpleFunction('file_exists', 'file_exists'), // New class
        );
    }

    public function getName()
    {
        return 'twig_extension';
    }
}
