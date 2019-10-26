<?php

namespace NeelBhanushali\Laravel\EloquentUUID\Traits;

use Illuminate\Support\Str;

trait HasUUID
{
    public static function bootUUID()
    {
        static::creating(function ($model) {
            $uuid = (string) Str::uuid();

            while (get_class($model)::where($model->getKeyName(), $uuid)->exists()) {
                $uuid = (string) Str::uuid();
            }

            $model->{$model->getKeyName()} = $uuid;
        });
    }

    public function getIncrementing()
    {
        return false;
    }

    public function getKeyType()
    {
        return 'string';
    }
}
