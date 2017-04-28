<?php
namespace Acme\AcmeWebsite;

use Markei\SilexWebsiteFramework\Application as BaseApplication;
use Symfony\Component\HttpFoundation\Request;

class Application extends BaseApplication
{
    protected function getRequiredConfigurationFields()
    {
        return array_merge(parent::getRequiredConfigurationFields(), []);
    }

    protected function registerRoutes()
    {
        $this->get('/about', function (Application $app, Request $request) { return $app['controllers.page']->showPageAction($request, 'about'); });
        $this->get('/info', function (Application $app, Request $request) { return $app['controllers.info']->showPhpVersionAction(); });
        parent::registerRoutes();
    }

    protected function registerControllers()
    {
        $this['controllers.info'] = function ($this) { return new Controllers\InfoController($this); };
        parent::registerControllers();
    }
}