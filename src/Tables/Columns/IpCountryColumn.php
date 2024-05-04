<?php

namespace HaoSheng\IpCountryColumn\Tables\Columns;

use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Torann\GeoIP\GeoIP;
use Torann\GeoIP\Location;

class IpCountryColumn extends TextColumn
{
    protected string $view = 'filament-ip-country-column::ip-country-column';

    protected function setUp(): void
    {
        parent::setUp();
    }

    public function getGeoIP(): GeoIP|Location|null
    {
        $ip = $this->getState();

        if (! $ip) {
            return null;
        }

        if (! filter_var($ip, FILTER_VALIDATE_IP)) {
            return null;
        }

        return geoip($ip);
    }

    public function getCountryFlag(): string
    {
        $geoip = $this->getGeoIP();

        if (! $geoip) {
            return '';
        }

        if (! $geoip->iso_code) {
            return '';
        }

        /** @var Collection $categories_flag */
        $categories_flag = Cache::rememberForever('ip-country-column:categories-flag', function (): Collection {
            return collect(require_once __DIR__ . '/../../../resources/data/countries-flag.php');
        });

        return $categories_flag->where('code', $geoip->iso_code)->value('flag');
    }

    public function getLocation(): string
    {
        $geoip = $this->getGeoIP();

        if (! $geoip) {
            return '';
        }

        return $geoip->country . ' ' . $geoip->city;
    }
}
