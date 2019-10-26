# Laravel UUID
A trait that provides support for uuid for eloquent models.

`composer require neelbhanushali/laravel-uuid`

- use `NeelBhanushali\LaravelUUID\Traits\UUID` trait in your Eloquent Model.
- Make sure the `primary key` in the migration for that model is added using `$table->uuid('KEY_NAME')->primary();`.
