<?php

namespace App;
use Tightenco\Collect\Support\Collection;

class CollectionMacros
{
    public static function init()
    {
        Collection::macro('odd', function() {
            return $this->filter(function ($value) {
                return $value % 2 !== 0;
            });
        });
    }
}
