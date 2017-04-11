<?php

/*
 * This file is part of the Alice package.
 *
 * (c) Nelmio <hello@nelm.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Nelmio\Alice\Throwable\Exception\Generator\Resolver;

use PHPUnit\Framework\TestCase;
use Nelmio\Alice\Throwable\ResolutionThrowable;

/**
 * @covers \Nelmio\Alice\Throwable\Exception\Generator\Resolver\FixtureNotFoundException
 */
class FixtureNotFoundExceptionTest extends TestCase
{
    public function testIsARuntimeException()
    {
        $this->assertTrue(is_a(FixtureNotFoundException::class, \RuntimeException::class, true));
    }

    public function testIsAResolutionThrowable()
    {
        $this->assertTrue(is_a(FixtureNotFoundException::class, ResolutionThrowable::class, true));
    }

    public function testIsExtensible()
    {
        $exception = new ChildFixtureNotFoundException();
        $this->assertInstanceOf(ChildFixtureNotFoundException::class, $exception);
    }
}
