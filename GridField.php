<?php

namespace Bolt\Extension\BobdenOtter\GridField;

class GridField implements \Bolt\Field\FieldInterface
{

    public function getName()
    {
        return 'grid';
    }

    public function getTemplate()
    {
        return '_grid.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return array('default' => null, 'notnull' => false);
    }

}
