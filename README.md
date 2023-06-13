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
