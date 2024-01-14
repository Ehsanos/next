<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CityResource\Pages;
use App\Filament\Resources\CityResource\RelationManagers;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CityResource extends Resource
{
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $pluralModelLabel = 'المدن';
    protected static ?string $navigationGroup = 'الدول و المناطق';


    protected static ?string $model = City::class;

    protected static ?string $navigationIcon = 'heroicon-o-office-building';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Fieldset::make('المدن')
                    ->schema([

                        Forms\Components\TextInput::make('name')->required()->label('المدينة'),
                        Forms\Components\TextInput::make('name_en')->required()->label('EN'),
                        Forms\Components\Toggle::make('is_active')->label('تفعيل'),
                        Forms\Components\Select::make('country_id')->options(Country::all()->pluck("name", "id")) ->searchable()
                            ->disablePlaceholderSelection()->label('الدولة')->required()


                    ]),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('المدينة')->searchable(),
                Tables\Columns\TextColumn::make('name_en')->label('EN')->searchable(),
                Tables\Columns\TextColumn::make('country.name')->label('الدولة')->searchable(),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('مفعلة'),
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
            'index' => Pages\ListCities::route('/'),
            'create' => Pages\CreateCity::route('/create'),
            'edit' => Pages\EditCity::route('/{record}/edit'),
        ];
    }
}
