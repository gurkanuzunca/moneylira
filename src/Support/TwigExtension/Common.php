<?php

namespace Src\Support\TwigExtension;

use Twig_Extension;
use Twig_SimpleFunction;
use Twig_SimpleFilter;


class Common extends Twig_Extension
{

    public function getName()
    {
        return 'moneylira';
    }

    public function getFilters()
    {
        return array(
            new Twig_SimpleFilter('callable', function ($value, $callable, $arguments = array()) {
                array_unshift($arguments, $value);
                return call_user_func_array($callable, $arguments);
            })
        );
    }
}
