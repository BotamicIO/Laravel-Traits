<?php

namespace DraperStudio\Traits;

use Stringy\StaticStringy;

trait HasSlug
{
    protected static $slugColumn = 'slug';
    protected static $slugField = 'title';

    public static function bootHasSlug()
    {
        static::saving(function ($model) {
            $model->{static::$slugColumn} = StaticStringy::slugify($model->{static::$slugField});
        });
    }
}
