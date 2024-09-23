<?php

declare(strict_types=1);

use Tempest\Core\DiscoveryLocation;
use Tempest\Http\HttpApplication;

require_once __DIR__ . '/../vendor/autoload.php';

HttpApplication::boot(
    root: __DIR__ . '/../',
    discoveryLocations: [
        new DiscoveryLocation('Config', 'config'),
    ])->run();

exit;
