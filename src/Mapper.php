<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder;

use Kozmixb\LaravelFormKitBuilder\Components\TextInput;

class Mapper
{
    private static $instance;

    /** @var array<string, string> */
    private $mapper = [];

    protected function __construct()
    {
        $files = scandir(__DIR__ . '/Components');
        $namespace = __NAMESPACE__ . '\\Components\\';

        $mapper = [];

        foreach ($files as $file) {
            $class = $namespace . substr(basename($file), 0, -4);
            if (!class_exists($class)) {
                continue;
            }

            if (method_exists($class, 'casts')) {
                $mapper[$class] = $class::casts();
            }
        }

        $this->mapper = array_flip(array_filter($mapper));
    }

    public static function getInstance(): Mapper
    {
        if (!isset(self::$instance)) {
            self::$instance = new static();
        }

        return self::$instance;
    }

    public static function map(string $key): string
    {
        return self::getInstance()->byKey($key);
    }

    public function byKey(string $key): string
    {
        return $this->mapper[$key] ?? TextInput::class;
    }


}
