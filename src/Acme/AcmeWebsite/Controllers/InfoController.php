<?php
namespace Acme\AcmeWebsite\Controllers;

use Markei\SilexWebsiteFramework\Controllers\BaseController;

class InfoController extends BaseController
{
    public function showPhpVersionAction()
    {
        return $this->app['twig']->render('info.html.twig', ['php' => phpversion()]);
    }
}