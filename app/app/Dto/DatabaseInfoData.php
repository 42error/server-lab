<?php declare(strict_types=1);

namespace App\Dto;

use Spatie\LaravelData\Data;

class DatabaseInfoData extends Data
{
    public function __construct(
        public string $driver,
        public string $host,
        public string $version,
    ) {}
}
