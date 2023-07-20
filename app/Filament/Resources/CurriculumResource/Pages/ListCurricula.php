<?php

namespace App\Filament\Resources\CurriculumResource\Pages;

use App\Filament\Resources\CurriculumResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCurricula extends ListRecords
{
    protected static string $resource = CurriculumResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
