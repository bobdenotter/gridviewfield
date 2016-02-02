<?php

namespace Bolt\Extension\BobdenOtter\GridField;

use Bolt\BaseExtension;
use Symfony\Component\HttpFoundation\Request;

class Extension extends BaseExtension
{

    public function getName()
    {
        return "Gridfield";
    }

    public function initialize() {
        $this->app->before(array($this, 'addAssets'));
        $this->app['config']->getFields()->addField(new GridField());
    }

    public function addAssets(Request $request)
    {
        if ($this->app['config']->getWhichEnd() === 'backend') {
            $this->app['htmlsnippets'] = true;
            $this->addCss('assets/handsontable.full.min.css');
            $this->addJavascript('assets/handsontable.full.min.js', array('late' => true));
        }

        $this->app['twig.loader.filesystem']->prependPath(__DIR__."/twig");
    }

}
