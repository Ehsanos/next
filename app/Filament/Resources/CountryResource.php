<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CountryResource\Pages;
use App\Filament\Resources\CountryResource\RelationManagers;
use App\Models\Country;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\IconColumn;
use Filament\Forms\Components\Toggle;



class CountryResource extends Resource
{
    protected static ?string $pluralModelLabel = 'الدول';
    protected static ?string $navigationGroup = 'الدول و المناطق';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $model = Country::class;

    protected static ?string $navigationIcon = 'heroicon-o-location-marker';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('is_active')->label('تفعيل الدولة'),
                Forms\Components\Toggle::make('is_user_active')->label('السماح لمستدمي هذه الدولة'),
                Forms\Components\TextInput::make('name')->label('الدولة'),
                Forms\Components\TextInput::make('name_en')->label('EN'),
                Forms\Components\TextInput::make('code')->label('رمز الدولة'),



            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('الدولة')->searchable(),
                Tables\Columns\TextColumn::make('name_en')->label('En')->searchable(),

                Tables\Columns\IconColumn::make('is_active')->boolean()->label('مفعلة'),
                Tables\Columns\IconColumn::make('is_user_active')->boolean()->label('مستخدمي الدولة')->searchable(),
                Tables\Columns\TextColumn::make('code')->label('كود الدولة')->searchable(),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->button(),
                Tables\Actions\DeleteAction::make()->button(),
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
            'index' => Pages\ListCountries::route('/'),
            'create' => Pages\CreateCountry::route('/create'),
            'edit' => Pages\EditCountry::route('/{record}/edit'),
        ];
    }
}
