<?php

namespace Bolt\Extension\BobdenOtter\GridField\Field;

use Bolt\Storage\EntityManager;
use Bolt\Storage\Field\Type\FieldTypeBase;
use Bolt\Storage\QuerySet;

class GridViewField extends FieldTypeBase
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
        return [
            'default' => null,
            'notnull' => false
        ];
    }
}
