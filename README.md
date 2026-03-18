# doctrine-properties

Some default doctrine entity/fields requiring PHP >=8.5 and Doctrine ORM >=3.6.

**This project is not yet stable.**

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
