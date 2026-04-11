<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests;

use CyrilVerloop\DoctrineProperties\StringExample;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests string example.
 */
#[
    PA\CoversClass(StringExample::class),
    PA\Group('string'),
    PA\Group('nonNullable')
]
final class StringTest extends TestCase
{
    // Methods :


    // Description :

    /**
     * Test that the description
     * can be initialised to an empty string.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new StringExample(description: '');

        self::assertSame('', $stringExample->description);
    }

    /**
     * Test that the description
     * can be initialised to an empty string
     * by default.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBeInitialisedToAnEmptyStringByDefault(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->description);
    }

    /**
     * Test that the description
     * can be initialised to a non empty string.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new StringExample(description: 'description');

        self::assertSame('description', $stringExample->description);
    }

    /**
     * Test that the description
     * can be publicly set to an empty string.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new StringExample(description: 'description');

        self::assertSame('description', $stringExample->description);

        $stringExample->description = '';

        self::assertSame('', $stringExample->description);
    }

    /**
     * Test that the description
     * can be publicly set to a non empty string.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBePubliclySetToAnNonEmptyString(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->description);

        $stringExample->description = 'description';

        self::assertSame('description', $stringExample->description);
    }


    // Email :

    /**
     * Test that the email
     * can be initialised to an empty string.
     */
    #[PA\Group('email')]
    public function testEmailCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new StringExample(email: '');

        self::assertSame('', $stringExample->email);
    }

    /**
     * Test that the email
     * can be initialised to an empty string
     * by default.
     */
    #[PA\Group('email')]
    public function testEmailCanBeInitialisedToAnEmptyStringByDefault(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->email);
    }

    /**
     * Test that the email
     * can be initialised to a non empty string.
     */
    #[PA\Group('email')]
    public function testEmailCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new StringExample(email: 'email');

        self::assertSame('email', $stringExample->email);
    }

    /**
     * Test that the email
     * can be publicly set to an empty string.
     */
    #[PA\Group('email')]
    public function testEmailCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new StringExample(email: 'email');

        self::assertSame('email', $stringExample->email);

        $stringExample->email = '';

        self::assertSame('', $stringExample->email);
    }

    /**
     * Test that the email
     * can be publicly set to a non empty string.
     */
    #[PA\Group('email')]
    public function testEmailCanBePubliclySetToAnNonEmptyString(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->email);

        $stringExample->email = 'email';

        self::assertSame('email', $stringExample->email);
    }


    // Firstname :

    /**
     * Test that the firstname
     * can be initialised to an empty string.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new StringExample(firstname: '');

        self::assertSame('', $stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to an empty string
     * by default.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBeInitialisedToAnEmptyStringByDefault(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to a non empty string.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new StringExample(firstname: 'firstname');

        self::assertSame('firstname', $stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be publicly set to an empty string.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new StringExample(firstname: 'firstname');

        self::assertSame('firstname', $stringExample->firstname);

        $stringExample->firstname = '';

        self::assertSame('', $stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be publicly set to a non empty string.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBePubliclySetToAnNonEmptyString(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->firstname);

        $stringExample->firstname = 'firstname';

        self::assertSame('firstname', $stringExample->firstname);
    }


    // Lastname :

    /**
     * Test that the lastname
     * can be initialised to an empty string.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new StringExample(lastname: '');

        self::assertSame('', $stringExample->lastname);
    }

    /**
     * Test that the lastname
     * can be initialised to an empty string
     * by default.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBeInitialisedToAnEmptyStringByDefault(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->lastname);
    }

    /**
     * Test that the lastname
     * can be initialised to a non empty string.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new StringExample(lastname: 'lastname');

        self::assertSame('lastname', $stringExample->lastname);
    }

    /**
     * Test that the lastname
     * can be publicly set to an empty string.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new StringExample(lastname: 'lastname');

        self::assertSame('lastname', $stringExample->lastname);

        $stringExample->lastname = '';

        self::assertSame('', $stringExample->lastname);
    }

    /**
     * Test that the lastname
     * can be publicly set to a non empty string.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBePubliclySetToAnNonEmptyString(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->lastname);

        $stringExample->lastname = 'lastname';

        self::assertSame('lastname', $stringExample->lastname);
    }


    // Name :

    /**
     * Test that the name
     * can be initialised to an empty string.
     */
    #[PA\Group('name')]
    public function testNameCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new StringExample(name: '');

        self::assertSame('', $stringExample->name);
    }

    /**
     * Test that the name
     * can be initialised to an empty string
     * by default.
     */
    #[PA\Group('name')]
    public function testNameCanBeInitialisedToAnEmptyStringByDefault(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->name);
    }

    /**
     * Test that the name
     * can be initialised to a non empty string.
     */
    #[PA\Group('name')]
    public function testNameCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new StringExample(name: 'name');

        self::assertSame('name', $stringExample->name);
    }

    /**
     * Test that the name
     * can be publicly set to an empty string.
     */
    #[PA\Group('name')]
    public function testNameCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new StringExample(name: 'name');

        self::assertSame('name', $stringExample->name);

        $stringExample->name = '';

        self::assertSame('', $stringExample->name);
    }

    /**
     * Test that the name
     * can be publicly set to a non empty string.
     */
    #[PA\Group('name')]
    public function testNameCanBePubliclySetToAnNonEmptyString(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->name);

        $stringExample->name = 'name';

        self::assertSame('name', $stringExample->name);
    }


    // Slug :

    /**
     * Test that the slug
     * can be initialised to an empty string.
     */
    #[PA\Group('slug')]
    public function testSlugCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new StringExample(slug: '');

        self::assertSame('', $stringExample->slug);
    }

    /**
     * Test that the slug
     * can be initialised to an empty string
     * by default.
     */
    #[PA\Group('slug')]
    public function testSlugCanBeInitialisedToAnEmptyStringByDefault(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->slug);
    }

    /**
     * Test that the slug
     * can be initialised to a non empty string.
     */
    #[PA\Group('slug')]
    public function testSlugCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new StringExample(slug: 'slug');

        self::assertSame('slug', $stringExample->slug);
    }

    /**
     * Test that the slug
     * can be publicly set to an empty string.
     */
    #[PA\Group('slug')]
    public function testSlugCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new StringExample(slug: 'slug');

        self::assertSame('slug', $stringExample->slug);

        $stringExample->slug = '';

        self::assertSame('', $stringExample->slug);
    }

    /**
     * Test that the slug
     * can be publicly set to a non empty string.
     */
    #[PA\Group('slug')]
    public function testSlugCanBePubliclySetToAnNonEmptyString(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->slug);

        $stringExample->slug = 'slug';

        self::assertSame('slug', $stringExample->slug);
    }


    // Surname :

    /**
     * Test that the surname
     * can be initialised to an empty string.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new StringExample(surname: '');

        self::assertSame('', $stringExample->surname);
    }

    /**
     * Test that the surname
     * can be initialised to an empty string
     * by default.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBeInitialisedToAnEmptyStringByDefault(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->surname);
    }

    /**
     * Test that the surname
     * can be initialised to a non empty string.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new StringExample(surname: 'surname');

        self::assertSame('surname', $stringExample->surname);
    }

    /**
     * Test that the surname
     * can be publicly set to an empty string.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new StringExample(surname: 'surname');

        self::assertSame('surname', $stringExample->surname);

        $stringExample->surname = '';

        self::assertSame('', $stringExample->surname);
    }

    /**
     * Test that the surname
     * can be publicly set to a non empty string.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBePubliclySetToAnNonEmptyString(): void
    {
        $stringExample = new StringExample();

        self::assertSame('', $stringExample->surname);

        $stringExample->surname = 'surname';

        self::assertSame('surname', $stringExample->surname);
    }
}
