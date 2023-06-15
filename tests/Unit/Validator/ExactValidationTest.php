<?php

declare(strict_types=1);

namespace Kozmixb\LaravelFormKitBuilder\Tests\Unit\Validator;

use Kozmixb\LaravelFormKitBuilder\Tests\TestCase;
use Kozmixb\LaravelFormKitBuilder\ValidationFactory;

class ExactValidationTest extends TestCase
{
    /** 
     * @test
     * @dataProvider provider
     */
    public function it_can_convert_exact_laravel_validations(string $from, string $to): void
    {
        $result = ValidationFactory::convertRule($from);

        $this->assertEquals($to, $result);
    }

    /** @return array<string, string[]> */
    public function provider(): array
    {
        return [
            'accepted' => ['accepted', 'accepted'],
            'alpha_num' => ['alpha_num', 'alphanumeric'],
            'alpha' => ['alpha', 'alpha:latin'],
            'email' => ['email', 'email'],
            'integer' => ['integer', 'number'],
            'lowercase' => ['lowercase', 'lowercase'],
            'numeric' => ['numeric', 'number'],
            'required' => ['required', 'required'],
            'uppercase' => ['uppercase', 'uppercase'],
            'url' => ['url', 'url'],
        ];
    }
}
