<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder;

use Kozmixb\LaravelFormKitBuilder\Attributes\Validation;

class ValidationFactory
{
    /** @phpstan-ignore-next-line */
    public static function transform($validation): Validation
    {
        $rules = [];

        if (is_array($validation)) {
            $rules = $validation;
        }

        if (is_string($validation)) {
            $rules = explode('|', $validation);
        }

        foreach ($rules as $key => $rule) {
            if (is_string($rule)) {
                $rules[$key] = self::convertRule($rule);
                continue;
            }

            $rules[$key] = null;
        }

        return new Validation(implode('|', array_filter($rules)));
    }

    public static function convertRule(string $rule): ?string
    {
        if ($formkitRule = config("formkit-schema.validations.exact.{$rule}")) {
            return $formkitRule;
        }

        foreach (config('formkit-schema.validations.partial') as $key => $value) {
            if (substr($rule, 0, strlen($key)) === $key) {
                return str_replace($key, $value, $rule);
            }
        }

        return null;
    }
}
