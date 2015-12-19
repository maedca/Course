<?php

/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 18/12/2015
 * Time: 4:25 PM
 */
namespace TeachMe\Components;
use Collective\Html\HtmlBuilder as CollectiveHtmlBuilder;

class HtmlBuilder extends CollectiveHtmlBuilder
{
    public static function menu()
    {
        return view('partials/menu');
    }
}