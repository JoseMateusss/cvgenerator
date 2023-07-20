<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CurriculumResource\Pages;
use App\Filament\Resources\CurriculumResource\RelationManagers;
use App\Models\Curriculum;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CurriculumResource extends Resource
{
    protected static ?string $model = Curriculum::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $modelLabel = 'Currículo';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nome completo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('occupation')
                    ->label('Cargo')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->label('Endereço')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->label('E-mail')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('profile')
                    ->label('Perfil')
                    ->required()
                    ->maxLength(65535),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Candidato'),
                Tables\Columns\TextColumn::make('occupation')
                    ->label('Vaga'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data de criação')
                    ->dateTime('d/m/Y h:i:s'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCurricula::route('/'),
            'create' => Pages\CreateCurriculum::route('/create'),
            'edit' => Pages\EditCurriculum::route('/{record}/edit'),
        ];
    }
}
