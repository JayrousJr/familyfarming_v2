<?php

namespace App\Filament\Resources\SlideResource\Pages;

use App\Filament\Resources\SlideResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSlide extends CreateRecord
{
    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
    protected static string $resource = SlideResource::class;
}
