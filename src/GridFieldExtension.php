<?php

namespace Bolt\Extension\BobdenOtter\GridField;

use Bolt\Extension\SimpleExtension;
use Bolt\Asset\File\JavaScript;
use Bolt\Asset\File\Stylesheet;
use Bolt\Controller\Zone;

class GridFieldExtension extends SimpleExtension
{
    protected function registerFields()
    {
        return [
            new Field\GridViewField()
        ];
    }

    protected function registerTwigPaths()
    {
        return [
            'templates'
        ];
    }

    protected function registerAssets()
    {
        $style = (new Stylesheet('css/handsontable.full.min.css'))
            ->setZone(Zone::BACKEND);
        $js = (new JavaScript('js/handsontable.full.min.js'))
            ->setZone(Zone::BACKEND);

        return [
            $style,
            $js
        ];
    }
}
