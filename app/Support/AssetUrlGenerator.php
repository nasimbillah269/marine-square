<?php

namespace App\Support;

use Illuminate\Routing\UrlGenerator;

/**
 * Generates asset URLs without the "public/" segment.
 *
 * Old code and database rows still store paths like "public/medies/...".
 * Those are stripped here, so asset() always returns a URL relative to the
 * web root (public/). It works with `php artisan serve`, XAMPP and the live server.
 */
class AssetUrlGenerator extends UrlGenerator
{
    public static function fromBase(UrlGenerator $base): static
    {
        $instance = (new \ReflectionClass(static::class))->newInstanceWithoutConstructor();

        foreach (get_object_vars($base) as $key => $value) {
            $instance->{$key} = $value;
        }

        return $instance;
    }

    public function asset($path, $secure = null)
    {
        if (is_string($path) && ! $this->isValidUrl($path)) {
            $path = preg_replace('#^/?public/#', '', $path);
        }

        return parent::asset($path, $secure);
    }
}
