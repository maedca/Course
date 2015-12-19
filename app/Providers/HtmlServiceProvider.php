<?php
/**
 * Created by PhpStorm.
 * User: maedc
 * Date: 18/12/2015
 * Time: 7:08 PM
 */

namespace TeachMe\Providers;


use Collective\Html\HtmlServiceProvider as CollectiveHtmlServiceProvider;
use TeachMe\Components\HtmlBuilder;

class HtmlServiceProvider extends CollectiveHtmlServiceProvider
{
    /**
     * Register the HTML builder instance.
     *
     * @return void
     */
    protected function registerHtmlBuilder()
    {
        $this->app->bindShared('html', function ($app) {
            return new HtmlBuilder($app['url']);
        });
    }
}