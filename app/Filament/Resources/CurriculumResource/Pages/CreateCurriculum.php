<?php

namespace App\Filament\Resources\CurriculumResource\Pages;

use App\Filament\Resources\CurriculumResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Wizard\Step;

class CreateCurriculum extends CreateRecord
{
    use CreateRecord\Concerns\HasWizard;

    protected static string $resource = CurriculumResource::class;

    protected function getSteps(): array
    {
        return [
            Step::make('Dados Pessoais')
                ->schema([
                    TextInput::make('name')
                        ->label('Nome completo')
                        ->required(),
                    TextInput::make('email')
                        ->label('E-mail para contato')
                        ->required(),
                    TextInput::make('occupation')
                        ->label('Cargo desejado')
                        ->required(),
                    TextInput::make('address')
                        ->label('Endereço atual')
                        ->required(),
                    MarkdownEditor::make('profile')
                        ->label('Resumo profissional')
                ]),
            Step::make('Experiâncias')
                ->schema([
                    Repeater::make('experiences')
                        ->label('Adicione todas as suas experiências')
                        ->schema([
                            TextInput::make('company')
                                ->label('Empresa')
                                ->required(),
                            TextInput::make('occupation')
                                ->label('Cargo')
                                ->required(),
                            TextInput::make('city')
                                ->label('Cidade'),
                            Select::make('modality')
                                ->label('Modalidade')
                                ->options([
                                    'in person' => 'Presencial',
                                    'home office' => 'Home office',
                                    'hybrid' => 'Hibrido',
                                ])
                                ->required(),
                            DatePicker::make('start_date')
                                ->label('Data de início')
                                ->displayFormat('d/m/Y')
                                ->required(),
                            DatePicker::make('final_date')
                                ->label('Data de termino')
                                ->displayFormat('d/m/Y')
                                ->helperText('Deixe em branco se estiver trabalhando nesta empresa atualmente')
                        ])
                        ->columns(2),

                ])
                ->columns(1),

            Step::make('Formação')
                ->schema([
                    Toggle::make('is_visible')
                        ->label('Visible to customers.')
                        ->default(true),
                ]),
        ];
    }
}
