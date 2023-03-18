<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;

trait HasLocalizedAttributes
{
    public function localize(string $attribute): ?string
    {
        $locale = App::getLocale();
        $column = "{$attribute}_{$locale}";
        return $this->attributes[$column] ?? $this->attributes["name_en"] ?? null;
    }
}
