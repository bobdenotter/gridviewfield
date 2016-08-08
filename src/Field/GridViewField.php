<?php

namespace Bolt\Extension\BobdenOtter\GridField\Field;

use Bolt\Storage\Field\FieldInterface;

class GridViewField implements FieldInterface
{

    public function getName()
    {
        return 'grid';
    }

    public function getTemplate()
    {
        return '_gridview-field.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return ['default' => null, 'notnull' => false];
    }
}
