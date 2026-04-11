<?php

declare(strict_types=1);

namespace CyrilVerloop\DoctrineProperties\Tests;

use CyrilVerloop\DoctrineProperties\NullableStringExample;
use PHPUnit\Framework\Attributes as PA;
use PHPUnit\Framework\TestCase;

/**
 * Tests string example.
 */
#[
    PA\CoversClass(NullableStringExample::class),
    PA\Group('string'),
    PA\Group('nullable')
]
final class NullableStringTest extends TestCase
{
    // Methods :


    // Description :

    /**
     * Test that the description
     * can be initialised to null.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBeInitialisedToNull(): void
    {
        $stringExample = new NullableStringExample(description: null);

        self::assertNull($stringExample->description);
    }

    /**
     * Test that the description
     * can be initialised to null
     * by default.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBeInitialisedToNullByDefault(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->description);
    }

    /**
     * Test that the description
     * can be initialised to an empty string.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample(description: '');

        self::assertSame('', $stringExample->description);
    }

    /**
     * Test that the description
     * can be initialised to a non empty string.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new NullableStringExample(description: 'description');

        self::assertSame('description', $stringExample->description);
    }

    /**
     * Test that the description
     * can be publicly set to null.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBePubliclySetToNull(): void
    {
        $stringExample = new NullableStringExample(description: '');

        self::assertSame('', $stringExample->description);

        $stringExample->description = null;

        self::assertNull($stringExample->description);
    }

    /**
     * Test that the description
     * can be publicly set to an empty string.
     */
    #[PA\Group('description')]
    public function testDescriptionCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->description);

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
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->description);

        $stringExample->description = 'description';

        self::assertSame('description', $stringExample->description);
    }


    // Email :

    /**
     * Test that the email
     * can be initialised to null.
     */
    #[PA\Group('email')]
    public function testEmailCanBeInitialisedToNull(): void
    {
        $stringExample = new NullableStringExample(email: null);

        self::assertNull($stringExample->email);
    }

    /**
     * Test that the email
     * can be initialised to null
     * by default.
     */
    #[PA\Group('email')]
    public function testEmailCanBeInitialisedToNullByDefault(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->email);
    }

    /**
     * Test that the email
     * can be initialised to an empty string.
     */
    #[PA\Group('email')]
    public function testEmailCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample(email: '');

        self::assertSame('', $stringExample->email);
    }

    /**
     * Test that the email
     * can be initialised to a non empty string.
     */
    #[PA\Group('email')]
    public function testEmailCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new NullableStringExample(email: 'email');

        self::assertSame('email', $stringExample->email);
    }

    /**
     * Test that the email
     * can be publicly set to null.
     */
    #[PA\Group('email')]
    public function testEmailCanBePubliclySetToNull(): void
    {
        $stringExample = new NullableStringExample(email: '');

        self::assertSame('', $stringExample->email);

        $stringExample->email = null;

        self::assertNull($stringExample->email);
    }

    /**
     * Test that the email
     * can be publicly set to an empty string.
     */
    #[PA\Group('email')]
    public function testEmailCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->email);

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
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->email);

        $stringExample->email = 'email';

        self::assertSame('email', $stringExample->email);
    }


    // Firstname :

    /**
     * Test that the firstname
     * can be initialised to null.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBeInitialisedToNull(): void
    {
        $stringExample = new NullableStringExample(firstname: null);

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to null
     * by default.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBeInitialisedToNullByDefault(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to an empty string.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample(firstname: '');

        self::assertSame('', $stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to a non empty string.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new NullableStringExample(firstname: 'firstname');

        self::assertSame('firstname', $stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be publicly set to null.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBePubliclySetToNull(): void
    {
        $stringExample = new NullableStringExample(firstname: '');

        self::assertSame('', $stringExample->firstname);

        $stringExample->firstname = null;

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be publicly set to an empty string.
     */
    #[PA\Group('firstname')]
    public function testFirstnameCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->firstname);

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
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->firstname);

        $stringExample->firstname = 'firstname';

        self::assertSame('firstname', $stringExample->firstname);
    }


    // Lastname :

    /**
     * Test that the firstname
     * can be initialised to null.
     */
    #[PA\Group('firstname')]
    public function testLastnameCanBeInitialisedToNull(): void
    {
        $stringExample = new NullableStringExample(firstname: null);

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to null
     * by default.
     */
    #[PA\Group('firstname')]
    public function testLastnameCanBeInitialisedToNullByDefault(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the lastname
     * can be initialised to an empty string.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample(lastname: '');

        self::assertSame('', $stringExample->lastname);
    }

    /**
     * Test that the lastname
     * can be initialised to a non empty string.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new NullableStringExample(lastname: 'lastname');

        self::assertSame('lastname', $stringExample->lastname);
    }

    /**
     * Test that the lastname
     * can be publicly set to null.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBePubliclySetToNull(): void
    {
        $stringExample = new NullableStringExample(lastname: '');

        self::assertSame('', $stringExample->lastname);

        $stringExample->lastname = null;

        self::assertNull($stringExample->lastname);
    }

    /**
     * Test that the lastname
     * can be publicly set to an empty string.
     */
    #[PA\Group('lastname')]
    public function testLastnameCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->lastname);

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
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->lastname);

        $stringExample->lastname = 'lastname';

        self::assertSame('lastname', $stringExample->lastname);
    }


    // Name :

    /**
     * Test that the firstname
     * can be initialised to null.
     */
    #[PA\Group('firstname')]
    public function testNameCanBeInitialisedToNull(): void
    {
        $stringExample = new NullableStringExample(firstname: null);

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to null
     * by default.
     */
    #[PA\Group('firstname')]
    public function testNameCanBeInitialisedToNullByDefault(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the name
     * can be initialised to an empty string.
     */
    #[PA\Group('name')]
    public function testNameCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample(name: '');

        self::assertSame('', $stringExample->name);
    }

    /**
     * Test that the name
     * can be initialised to a non empty string.
     */
    #[PA\Group('name')]
    public function testNameCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new NullableStringExample(name: 'name');

        self::assertSame('name', $stringExample->name);
    }

    /**
     * Test that the name
     * can be publicly set to null.
     */
    #[PA\Group('name')]
    public function testNameCanBePubliclySetToNull(): void
    {
        $stringExample = new NullableStringExample(name: '');

        self::assertSame('', $stringExample->name);

        $stringExample->name = null;

        self::assertNull($stringExample->name);
    }

    /**
     * Test that the name
     * can be publicly set to an empty string.
     */
    #[PA\Group('name')]
    public function testNameCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->name);

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
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->name);

        $stringExample->name = 'name';

        self::assertSame('name', $stringExample->name);
    }


    // Slug :

    /**
     * Test that the firstname
     * can be initialised to null.
     */
    #[PA\Group('firstname')]
    public function testSlugCanBeInitialisedToNull(): void
    {
        $stringExample = new NullableStringExample(firstname: null);

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to null
     * by default.
     */
    #[PA\Group('firstname')]
    public function testSlugCanBeInitialisedToNullByDefault(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the slug
     * can be initialised to an empty string.
     */
    #[PA\Group('slug')]
    public function testSlugCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample(slug: '');

        self::assertSame('', $stringExample->slug);
    }

    /**
     * Test that the slug
     * can be initialised to a non empty string.
     */
    #[PA\Group('slug')]
    public function testSlugCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new NullableStringExample(slug: 'slug');

        self::assertSame('slug', $stringExample->slug);
    }

    /**
     * Test that the slug
     * can be publicly set to null.
     */
    #[PA\Group('slug')]
    public function testSlugCanBePubliclySetToNull(): void
    {
        $stringExample = new NullableStringExample(slug: '');

        self::assertSame('', $stringExample->slug);

        $stringExample->slug = null;

        self::assertNull($stringExample->slug);
    }

    /**
     * Test that the slug
     * can be publicly set to an empty string.
     */
    #[PA\Group('slug')]
    public function testSlugCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->slug);

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
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->slug);

        $stringExample->slug = 'slug';

        self::assertSame('slug', $stringExample->slug);
    }


    // Surname :

    /**
     * Test that the firstname
     * can be initialised to null.
     */
    #[PA\Group('firstname')]
    public function testSurnameCanBeInitialisedToNull(): void
    {
        $stringExample = new NullableStringExample(firstname: null);

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the firstname
     * can be initialised to null
     * by default.
     */
    #[PA\Group('firstname')]
    public function testSurnameCanBeInitialisedToNullByDefault(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->firstname);
    }

    /**
     * Test that the surname
     * can be initialised to an empty string.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBeInitialisedToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample(surname: '');

        self::assertSame('', $stringExample->surname);
    }

    /**
     * Test that the surname
     * can be initialised to a non empty string.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBeInitialisedToAnNonEmptyString(): void
    {
        $stringExample = new NullableStringExample(surname: 'surname');

        self::assertSame('surname', $stringExample->surname);
    }

    /**
     * Test that the surname
     * can be publicly set to null.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBePubliclySetToNull(): void
    {
        $stringExample = new NullableStringExample(surname: '');

        self::assertSame('', $stringExample->surname);

        $stringExample->surname = null;

        self::assertNull($stringExample->surname);
    }

    /**
     * Test that the surname
     * can be publicly set to an empty string.
     */
    #[PA\Group('surname')]
    public function testSurnameCanBePubliclySetToAnEmptyString(): void
    {
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->surname);

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
        $stringExample = new NullableStringExample();

        self::assertNull($stringExample->surname);

        $stringExample->surname = 'surname';

        self::assertSame('surname', $stringExample->surname);
    }
}
