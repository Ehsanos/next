<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Filament\Resources\CategoryResource\Widgets\CategoryOverview;
use App\Models\Category;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Widgets\StatsOverviewWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Tables\Columns\SpatieTagsColumn;
use Filament\Tables\Actions\EditAction;


class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;
    protected static ?string $pluralModelLabel = 'الفئات';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }


    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';
    protected static ?string $navigationGroup = 'المنتجات';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Card::make()->schema([
                    Toggle::make('is_active')->onColor('success')
                        ->offColor('black')->label('متوفر'),

                ]),

                Forms\Components\Card::make()->schema([
                    SpatieMediaLibraryFileUpload::make('img')
                        ->collection('categories')->multiple()
                        ->enableReordering()->label('الصورة')
                        ->enableOpen()->columns(2),

                ]),


                Forms\Components\Section::make("الفئات")->schema([

                    Forms\Components\Wizard::make()->schema([
                        Forms\Components\Wizard\Step::make('AR')->schema([
                            Forms\Components\Card::make()->schema([
                                Forms\Components\TextInput::make('name')->required()->label('اسم الفئة بالعربي'),
                                Textarea::make('description')->label('وصف الفئة عربي'),
                            ])->columns(2),

                        ]),
                        Forms\Components\Wizard\Step::make('En')->schema([
                            Forms\Components\Card::make()->schema([
                                Forms\Components\TextInput::make('name_en')->label('اسم الفئة EN'),
                                Textarea::make('description_en')->nullable()->label('وصف الفئة EN'),
                            ])->columns(2),

                        ]),
                        Forms\Components\Wizard\Step::make('TR')->schema([
                            Forms\Components\Card::make()->schema([
                                Forms\Components\TextInput::make('name_tr')->label('اسم الفئة TR'),
                                Textarea::make('description_tr')->nullable()->label('وصف الفئة TR'),

                            ])->columns(2),

                        ]),
                        Forms\Components\Wizard\Step::make('ES')->schema([
                            Forms\Components\Card::make()->schema([
                                Forms\Components\TextInput::make('name_es')->label('اسم الفئة ES'),
                                Textarea::make('description_es')->nullable()->label('وصف الفئة ES'),

                            ])->columns(2),

                        ]),
                        Forms\Components\Wizard\Step::make('DU')->schema([
                            Forms\Components\Card::make()->schema([
                                Forms\Components\TextInput::make('name_du')->label('اسم الفئة DU'),
                                Textarea::make('description_du')->nullable()->label('وصف الفئة DU'),

                            ])->columns(2),

                        ])

                    ])->skippable(),

                ]),


                Forms\Components\TagsInput::make('tags')->label('كلمات مفتاحية'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('اسم الفئة')->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('categories')->label('صورة الفئة'),
                Tables\Columns\BooleanColumn::make('is_active')->label('متوفر'),
                TextColumn::make('description')->words(5)->label('وصف الفئة')->searchable(),
                Tables\Columns\TagsColumn::make('tags.name')->label('كلمات مفتاحية')->searchable(),


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

    public static function getWidgets(): array
    {
        return [
            CategoryOverview::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
