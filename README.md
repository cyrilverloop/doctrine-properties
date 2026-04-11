# doctrine-properties

Some default doctrine entity/fields requiring PHP >=8.5 and Doctrine ORM >=3.6.

**This project is not yet stable.**

This includes :

- `AbstractIntId` : a mapped superclass with an `$id` as an integer identifier/primary key;
- `IntIdInterface` : an interface for integer id;

- `BoolExample` : a class with `$active`, `$available` boolean properties;
- `IntExample` : a class with `$priority` integer property;
- `NullableStringExample` : a class with `$description`, `$email`, `$firstname`, `$lastname`, `$name`, `$slug` and `$surname` nullable string properties;
- `StringExample` : a class that adds `$description`, `$email`, `$firstname`, `$lastname`,  `$name`,  `$slug` and `$surname` string properties;

[![License](https://img.shields.io/github/license/cyrilverloop/doctrine-properties)](https://github.com/cyrilverloop/doctrine-properties/blob/trunk/LICENSE)
[![Minimum PHP version](https://img.shields.io/badge/php-%3E%3D8.5-%23777BB4?logo=php&style=flat)](https://www.php.net/)


## Installation

### As a Composer depedency

In your project directory run

```shellsession
user@host project$ composer require "cyril-verloop/doctrine-properties"
```

### For development purposes

```shellsession
user@host ~$ cd [PATH_WHERE_TO_PUT_THE_PROJECT] # E.g. ~/projects/
user@host projects$ git clone https://github.com/cyrilverloop/doctrine-properties.git
user@host projects$ cd doctrine-properties
user@host doctrine-properties$ composer install -o
user@host doctrine-properties$ phive install
```


## Mappings

There are attributes and XML mappings.

### Symfony

To use with Symfony, copy the attribute or XML configuration below
and add it to the `config/packages/doctrine.yaml` file of your project.

```yaml
doctrine:
    orm:
        mappings:
            # For attribute :
            CVDP:
                alias: CVDP
                dir: '%kernel.project_dir%/vendor/cyril-verloop/doctrine-properties/src'
                prefix: 'CyrilVerloop\DoctrineProperties'
                type: attribute

            # For XML :
            CVDP:
                alias: CVDP
                dir: '%kernel.project_dir%/vendor/cyril-verloop/doctrine-properties/config/doctrine'
                prefix: CyrilVerloop\DoctrineProperties
                type: xml
```

You can also look at the `resources/config/packages/doctrine.yaml` file.

### XML

#### Entity

The XML file is located in the `config/doctrine/` directory.
You just have to copy or reference it depending on your needs.

#### Properties

You need to copy the require configuration in your XML file.

For example :
```xml
<id name="id" type="integer">
    <generator strategy="AUTO" />
    <options>
        <option name="unsigned">true</option>
    </options>
</id>

<field name="active" column="active" type="boolean" />
<field name="available" column="available" type="boolean" />

<field name="priority" column="priority" type="smallint">
    <options>
        <option name="default">0</option>
    </options>
</field>

<field name="description" column="description" type="text" />
<field name="description" column="description" type="text" nullable="true" />
<field name="email" column="email" type="string" />
<field name="email" column="email" type="string" nullable="true" />
<field name="firstname" column="firstname" type="string" />
<field name="firstname" column="firstname" type="string" nullable="true" />
<field name="lastname" column="lastname" type="string" />
<field name="lastname" column="lastname" type="string" nullable="true" />
<field name="name" column="name" type="string" />
<field name="name" column="name" type="string" nullable="true" />
<field name="surname" column="surname" type="string" />
<field name="surname" column="surname" type="string" nullable="true" />
<field name="slug" column="slug" type="string" />
<field name="slug" column="slug" type="string" nullable="true" />
```

You can also look at the `resources/mappings/Example.orm.xml` file.


## Usage

### AbstractIntId / IntIdInterface

If your entities need an integer as an identifier/primary key :
- they can extend the mapped super class `CyrilVerloop\DoctrineProperties\AbstractIntId`

```php
use CyrilVerloop\DoctrineProperties\AbstractIntId;

class Product extends AbstractIntId
{
    public function __construct()
    {
        // You can call the parent constructor
        // to initiate the id to null
        // or initiate it yourself :
        parent::__construct();
    }
}
```

- implement the `CyrilVerloop\DoctrineProperties\IntIdInterface` interface

```php
use CyrilVerloop\DoctrineProperties\IntIdInterface;

class Product implements IntIdInterface
{
    // Your code here.
}
```

### Properties

Example properties are in `*Example.php` files.

### Unit tests

Example unit tests for PHPUnit are in `./tests/`.


## Continuous integration

### Tests

To run the tests :
```shellsession
user@host doctrine-properties$ ./tools/phpunit -c ./ci/phpunit.xml
```
The generated outputs will be in `./ci/phpunit/`.
Look at `./ci/phpunit/html/index.html` for code coverage
and `./ci/phpunit/testdox.html` for a verbose list of passing / failing tests.

To run mutation testing, you must run PHPUnit first, then :
```shellsession
user@host doctrine-properties$ ./tools/infection -c./ci/infection.json
```
The generated outputs will be in `./ci/infection/`.

### Static analysis

To do a static analysis :
```shellsession
user@host doctrine-properties$ ./tools/psalm -c ./ci/psalm.xml [--report=./psalm/psalm.txt --output-format=text]
```
Use "--report=./psalm/psalm.txt --output-format=text"
if you want the output in a file instead of on screen.

### PHPDoc

To generate the PHPDoc :
```shellsession
user@host doctrine-properties$ ./tools/phpdocumentor --config ./ci/phpdoc.xml
```
The generated HTML documentation will be in `./ci/phpdoc/`.
