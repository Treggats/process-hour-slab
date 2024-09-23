<?php

declare(strict_types=1);

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\Test;
use Tempest\Http\Status;
use Tests\TestCase;

final class HomeControllerTest extends TestCase
{
    #[Test]
    public function homepage_route_gives_http_ok_response(): void
    {
        $this->http->get('/')
            ->assertStatus(Status::OK);
    }
}
