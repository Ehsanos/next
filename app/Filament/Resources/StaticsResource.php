<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StaticsResource\Pages;
use App\Filament\Resources\StaticsResource\RelationManagers;
use App\Models\Statics;
use Faker\Provider\Text;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StaticsResource extends Resource
{
    protected static ?string $pluralModelLabel = 'الاحصائيات';
    protected static ?string $navigationGroup = 'السلايدر و الإحصائيات';


    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $model = Statics::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-pie';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('discrption')->label('وصف المجال'),
                Forms\Components\TextInput::make('discrption_en')->label('وصف المجالEN'),
                Forms\Components\TextInput::make('discrption_tr')->label('وصف المجالTR'),
                Forms\Components\TextInput::make('discrption_es')->label('ESوصف المجال'),
                Forms\Components\TextInput::make('discrption_du')->label('DUوصف المجال'),

                Forms\Components\TextInput::make('number')->integer()->label('الرقم'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('discrption')->label('الحالة')->searchable(),
                Tables\Columns\TextColumn::make('number')->label('العدد')->searchable()
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
            'index' => Pages\ListStatics::route('/'),
            'create' => Pages\CreateStatics::route('/create'),
            'edit' => Pages\EditStatics::route('/{record}/edit'),
        ];
    }
}
