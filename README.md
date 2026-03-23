# doctrine-properties

Some default doctrine entity/fields requiring PHP >=8.5 and Doctrine ORM >=3.6.

**This project is not yet stable.**

This includes :

- `AbstractIntId` : a mapped superclass with an `$id` as an integer identifier/primary key;
- `IntId` : a trait that adds an `$id` as an integer identifier/primary key;
- `IntIdInterface` : an interface for integer id;
- `Priority` : a trait that adds a `$priority` integer field;

- `Active` : a trait that adds an `$active` boolean field;
- `Available` : a trait that adds an `$available` boolean field;

- `Description` : a trait that adds a `$description` text field;
- `NullableDescription` : a trait that adds a nullable `$description` text field;
- `Email` : a trait that adds a `$email` text field;
- `NullableEmail` : a trait that adds a nullable `$email` text field;
- `Firstname` : a trait that adds a `$firstname` text field;
- `NullableFirstname` : a trait that adds a nullable `$firstname` text field;
- `Lastname` : a trait that adds a `$lastname` text field;
- `NullableLastname` : a trait that adds a nullable `$lastname` text field;
- `Name` : a trait that adds a `$name` text field;
- `NullableName` : a trait that adds a nullable `$name` text field;
- `Slug` : a trait that adds a `$slug` text field;
- `NullableSlug` : a trait that adds a nullable `$slug` text field;
- `Surname` : a trait that adds a `$surname` text field;
- `NullableSurname` : a trait that adds a nullable `$surname` text field;

[![License](https://img.shields.io/github/license/cyrilverloop/doctrine-properties)](https://github.com/cyrilverloop/doctrine-properties/blob/trunk/LICENSE)
[![Type coverage](https://shepherd.dev/github/cyrilverloop/doctrine-properties/coverage.svg)](https://shepherd.dev/github/cyrilverloop/doctrine-properties)
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
user@host doctrine-properties$ phive install --trust-gpg-keys 4AA394086372C20A,99BF4D9A33D65E1E,31C7E470E2138192,8AC0BAA79732DD42,C5095986493B4AA0
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

#### Traits

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
<field name="name" column="name" type="string" />
<field name="name" column="name" type="string" nullable="true" />
<field name="slug" column="slug" type="string" />
<field name="slug" column="slug" type="string" nullable="true" />
```

You can also look at the `resources/mappings/Example.orm.xml` file.


## Usage

### AbstractIntId / IntId / IntIdInterface

If your entities need an integer as an identifier/primary key :
- they can extend the mapped super class `CyrilVerloop\DoctrineProperties\Int\AbstractIntId`

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineProperties\Int\AbstractIntId;

class Product extends AbstractIntId
{
    // Your code here.
}
```

- use the `CyrilVerloop\DoctrineProperties\Int\IntId` trait

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineProperties\Int\IntId;

class Product
{
    use IntId;

    public function __construct()
    {
        // Do not forget to initiate the id :
        $this->id = null;
    }
}
```

- implement the `CyrilVerloop\DoctrineProperties\Int\IntIdInterface` interface

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineProperties\Int\IntIdInterface;

class Product implements IntIdInterface
{
    // Your code here.
}
```

### Active / Available / Description / Priority / Slug ...

If your entities need some other fields, they can use a trait.

```php
<?php

declare(strict_types=1);

namespace MyNamespace;

use CyrilVerloop\DoctrineProperties\Bool\Available;

class Product
{
    use Available;

    // Your code here.
}
```


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


### Standard

All PHP files in this project follows [PSR-12](https://www.php-fig.org/psr/psr-12/).
To indent the code :
```shellsession
user@host doctrine-properties$ ./tools/phpcbf --standard=PSR12 --extensions=php -p ./src/ ./tests/
```
