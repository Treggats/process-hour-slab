<?php

declare(strict_types=1);

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tempest\Framework\Testing\IntegrationTest;
use Tempest\Http\Status;

final class HomeControllerTest extends IntegrationTest
{
    #[Test]
    public function homepage_route_gives_http_ok_response(): void
    {
        $this->http->get('/')
            ->assertStatus(Status::OK);
    }
}
