<?php

namespace App\Filament\Resources\CurriculumResource\Pages;

use App\Filament\Resources\CurriculumResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCurriculum extends EditRecord
{
    protected static string $resource = CurriculumResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
