<?php declare(strict_types=1);

namespace App\Dto;

use Spatie\LaravelData\Data;

class ClientInfoData extends Data
{
    public function __construct(
        public string $ip,
        public ?string $user_agent,
    ) {}
}
