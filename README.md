# Laravel FormKit Schema Builder

This package creation was inspired by [FormKit](https://formkit.com) Vue package.
Wanted to create a laravel schema builder where we can create a form class which points to an existing request class and using the validation rules to build up the schema.

In laravel we have eg.: 
```
GET /users/create
GET /users/edit
```
Endpoints which in laravel would return a laravel view page where the create/update forms would be present.
However if we have a restful API then we can use this package to return json schema format required for formkit builder.

[https://formkit.com/essentials/schema](https://formkit.com/essentials/schema)

## Installation
You can install the package via composer:
```
composer require kozmixb/laravel-formkit-builder
```

You can publish the config file with:
```
php artisan vendor:publish --tag="kozmixb/laravel-formkit-builder-config"
```

## Usage

Simplest way to use this package is to extend `BaseForm` and just point it to your request file you wish to generate a form schema

```php
use Kozmixb\LaravelFormKitBuilder\Contracts\BaseForm;

class ExampleForm extends BaseForm
{
    protected function getRequestClass(): string
    {
        return ExampleRequest::class;
    }
}
```

and in your controller just call it via fascade

```php
use Kozmixb\LaravelFormKitBuilder\Facades\FormBuilder;
use Kozmixb\LaravelFormKitBuilder\Resources\SchemaResource;

class ExampleController
{
    public function edit(): SchemaResource
    {
        return new SchemaResource(FormBuilder::build(new ExampleForm()));
    }
}
```

---

if you would like to get more control in the builder then you can customize `formkit-schema` config file
where you can find component mappers and validations.

You can build up your own form class, just need to implement `FormInterface` and need to define
the basic methods for casting individual components, apply unique labels for inputs and pass down the 
rules in same format laravel FormRequest rules are formed.

These mappings can be used as defaults however form specific mappings should be added to `casts()` array method in the same format.

```php
use Kozmixb\LaravelFormKitBuilder\Components\Password;
use Kozmixb\LaravelFormKitBuilder\Contracts\FormInterface;

class CustomForm implements FormInterface
{
    public function casts(): array
    {
        return [
            'password_confirmation' => Password::class,
        ];
    }

    public function labels(): array
    {
        return [
            'name' => 'Full Name',
            'password_confirmation' => 'Confirm Password'
        ];
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password'
        ];
    }
}
```

## Known limitations

At the moment this package cannot handle nested arrays keys in validations eg:
```
'cars' => ['array'], //this would show up as input field with no validation
'cars.*' => ['required','string'],
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
