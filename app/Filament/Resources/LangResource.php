<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LangResource\Pages;
use App\Filament\Resources\LangResource\RelationManagers;
use App\Models\Lang;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LangResource extends Resource
{
    protected static ?string $model = Lang::class;
    protected static ?string $pluralModelLabel = 'اللغات';

    protected static ?string $navigationIcon = 'heroicon-o-translate';
    protected static ?string $navigationGroup = 'الاعدادات';
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('key')->required(),
                Forms\Components\TextInput::make('ar'),
                Forms\Components\TextInput::make('en'),
                Forms\Components\TextInput::make('tr'),
                Forms\Components\TextInput::make('du'),
                Forms\Components\TextInput::make('es'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('key'),
                Tables\Columns\TextColumn::make('ar'),
                Tables\Columns\TextColumn::make('en'),
                Tables\Columns\TextColumn::make('tr'),
                Tables\Columns\TextColumn::make('du'),
                Tables\Columns\TextColumn::make('es'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListLangs::route('/'),
            'create' => Pages\CreateLang::route('/create'),
            'edit' => Pages\EditLang::route('/{record}/edit'),

        ];
    }
}
