<?php

namespace AppBundle\Service;
/**
 * Created by PhpStorm.
 * User: urartu
 * Date: 28/07/2018
 * Time: 14:33
 */
class MarkdownTransformer
{

    public function parse($str)

    {
        return strtoupper($str);

    }

}