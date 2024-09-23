<?php

declare(strict_types=1);

namespace Tests;

use Tempest\Core\DiscoveryLocation;
use Tempest\Framework\Testing\IntegrationTest;

abstract class TestCase extends IntegrationTest
{
    protected function setUp(): void
    {
        $this->root = __DIR__ . '/../';
        $this->discoveryLocations = [
            new DiscoveryLocation('Tests\\Feature', __DIR__ . DIRECTORY_SEPARATOR . 'Feature'),
        ];

        parent::setUp();
    }
}
