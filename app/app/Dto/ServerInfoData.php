<?php declare(strict_types=1);

namespace App\Dto;

use Spatie\LaravelData\Data;

class ServerInfoData extends Data
{
    public function __construct(
        public string $php_version,
        public string $server_software,
    ) {}
}
