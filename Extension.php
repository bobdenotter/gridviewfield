<?php

namespace Bolt\Extension\BobdenOtter\GridField;

use Bolt\Application;
use Bolt\BaseExtension;
use Symfony\Component\HttpFoundation\Request;
use Bolt\Controller\Zone;

require_once('GridField.php');

class Extension extends BaseExtension
{


    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->app['config']->getFields()->addField(new GridField());

    }

    public function initialize() {
        $this->app->before(array($this, 'addAssets'));
    }

    public function getName()
    {
        return "Gridfield";
    }

    public function addAssets(Request $request)
    {
        if (Zone::isBackend($request)) {
            $request->attributes->set('allow_snippets', true);
            $this->addCss('assets/handsontable.full.min.css');
            $this->addJavascript('assets/handsontable.full.min.js', true);
            $this->addJavascript('assets/start.js', true);
        }
        $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");

    }

}






