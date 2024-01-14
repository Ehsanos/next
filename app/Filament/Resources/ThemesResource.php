<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThemesResource\Pages;
use App\Filament\Resources\ThemesResource\RelationManagers;
use App\Models\Themes;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ThemesResource extends Resource
{
    protected static ?string $model = Themes::class;

    protected static ?string $navigationIcon = 'heroicon-o-sun';
    protected static ?string $navigationGroup = 'الاعدادات';
    protected static ?string $pluralModelLabel = 'الثيمات';
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Radio::make('key')->options(
                    [
                        'main' => "الرئيسية",
                        'product' => "المنتجات",
                        'agents' => "الوكلاء",
                        'news' => "الأخبار",
                        'about' => "من نحن",
                        'catalogs' => "الكتالوج",
                        'policy' => "الخصوصية",
//                        'delegtes' => "المندوبون",
                    ]
                )->required()->label(' الصفحة'),
               Forms\Components\ColorPicker::make('primary')->required()->label('لون الخلفية'),
                Forms\Components\ColorPicker::make('secondary')->default('1')->hidden(),
                Forms\Components\ColorPicker::make('success')->default('1')->hidden(),
                Forms\Components\ColorPicker::make('info')->default('1')->hidden(),
                Forms\Components\ColorPicker::make('warning')->default('1')->hidden(),
                Forms\Components\ColorPicker::make('danger')->default('1')->hidden(),
                Forms\Components\ColorPicker::make('light')->default('1')->hidden(),
               Forms\Components\ColorPicker::make('head_color')->default('1')->hidden(),
               Forms\Components\ColorPicker::make('paragraph_color')->default('1')->hidden(),
                Forms\Components\ColorPicker::make('link_color')->default('1')->hidden(),
                Forms\Components\ColorPicker::make('hover_color')->default('1')->hidden(),
               Forms\Components\TextInput::make('font_family')->default('1')->hidden(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('key')->label('الصفحة '),
                Tables\Columns\ColorColumn::make('primary')->label('اللون الرئيسي'),
//                Tables\Columns\ColorColumn::make('secondary')->label('اللون الثانوي'),
//                Tables\Columns\TextColumn::make('font_family')->label('نوع الخط'),

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
            'index' => Pages\ListThemes::route('/'),
            'create' => Pages\CreateThemes::route('/create'),
            'edit' => Pages\EditThemes::route('/{record}/edit'),
        ];
    }
}
