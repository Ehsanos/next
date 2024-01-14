<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CatalogResource\Pages;
use App\Filament\Resources\CatalogResource\RelationManagers;
use App\Models\Catalog;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Resources\Form;
use Filament\Forms\Components\FileUpload;

use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\RichEditor;


class CatalogResource extends Resource
{
    protected static ?string $model = Catalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $pluralModelLabel = 'الكتالوج';

    protected static ?string $navigationGroup = 'المنتجات';


    public static function form(Form $form): Form
    {

        return $form
            ->schema([

                Forms\Components\Card::make()->schema([
                    DatePicker::make('year')->required()->label('السنة'),

                    FileUpload::make('file')->acceptedFileTypes(['application/pdf'])->uploadButtonPosition('left')->label('الملف'),
                    SpatieMediaLibraryFileUpload::make('img')->collection('catalogs')->label('الصورة'),
//                    SpatieMediaLibraryFileUpload::make('img')->collection('catalogs-slider')->multiple()->label('صور السلايدر'),

                ])->columns(3),

                Forms\Components\Section::make('وصف')->schema([

                    Forms\Components\Wizard::make()->schema([
                        Forms\Components\Wizard\Step::make('AR')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name')->nullable()->label('الاسم')->required(),
                            TextArea::make('description')->label('وصف')->required(),
                        ])->columns(2),
                        ]),

                        Forms\Components\Wizard\Step::make('En')->schema([
                            Forms\Components\Card::make()->schema([
                                Forms\Components\TextInput::make('name_en')->nullable()->label('ENالاسم'),
                                TextArea::make('description_en')->label('وصف EN'),
                            ])->columns(2)]),
                        Forms\Components\Wizard\Step::make('TR')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_tr')->nullable()->label('TRالاسم'),
                            TextArea::make('description_tr')->label('TR وصف '),
                        ])->columns(2),
                        ]),
                        Forms\Components\Wizard\Step::make('DU')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_du')->nullable()->label('DUالاسم'),
                            TextArea::make('description_du')->label('وصفDU '),
                        ])->columns(2),
                        ]),
                        Forms\Components\Wizard\Step::make('ES')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_es')->nullable()->label('ESالاسم'),
                            TextArea::make('description_ES')->label('وصفES '),
                        ])->columns(2),
                        ]),

                    ])->skippable()

                ]),

                Forms\Components\SpatieTagsInput::make('tags')->type('catalog')->label('كلمات مفتاحية')

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('catalogs'),
                Tables\Columns\TextColumn::make('year')->label('عام'),
                Tables\Columns\TextColumn::make('description')->label('الوصف')->searchable(),
                Tables\Columns\TagsColumn::make('tags.name')->label('كلمات مفتاحية')


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
            'index' => Pages\ListCatalogs::route('/'),
            'create' => Pages\CreateCatalog::route('/create'),
            'edit' => Pages\EditCatalog::route('/{record}/edit'),
        ];
    }
}
