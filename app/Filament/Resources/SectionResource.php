<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SectionResource\Pages;
use App\Filament\Resources\SectionResource\RelationManagers;
use App\Models\Section;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SectionResource extends Resource
{
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $pluralModelLabel = 'أقسام الأخبار و المدونات';


    protected static ?string $model = Section::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'الأخبار و المنشورات';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                SpatieMediaLibraryFileUpload::make('img')->collection('sections')->label('الصورة'),
                Forms\Components\Section::make('القسم')->schema([

                    Forms\Components\Wizard::make([
                        Forms\Components\Wizard\Step::make('AR')->schema([Forms\Components\TextInput::make('title')->required()->label('عنوان القسم بالعربي'),
                            Forms\Components\TextInput::make('description')->nullable()->label('وصف القسم بالعربي'),

                        ]),
                        Forms\Components\Wizard\Step::make('EN')->schema([Forms\Components\TextInput::make('title_en')->nullable()->label('ENعنوان القسم'),
                            Forms\Components\TextInput::make('description_en')->nullable()->label('وصف القسمEN'),

                        ]),
                        Forms\Components\Wizard\Step::make('TR')->schema([Forms\Components\TextInput::make('title_tr')->nullable()->label('عنوان القسمTR'),
                            Forms\Components\TextInput::make('description_tr')->nullable()->label('وصف القسمTR'),

                        ]),
                        Forms\Components\Wizard\Step::make('ES')->schema([Forms\Components\TextInput::make('title_es')->nullable()->label('عنوان القسمES'),
                            Forms\Components\TextInput::make('description_es')->nullable()->label('وصف القسمES'),

                        ]),
                        Forms\Components\Wizard\Step::make('DU')->schema([Forms\Components\TextInput::make('title_du')->nullable()->label('عنوان القسمDU'),
                            Forms\Components\TextInput::make('description_du')->nullable()->label('DU وصف القسم'),

                        ]),

                    ])->skippable(),


                ]),


                Forms\Components\TagsInput::make('tags')->label('كلمات مفتاحية'),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('description')->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('sections'),
                Tables\Columns\TagsColumn::make('tags.name')->searchable(),
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
            'index' => Pages\ListSections::route('/'),
            'create' => Pages\CreateSection::route('/create'),
            'edit' => Pages\EditSection::route('/{record}/edit'),
        ];
    }
}
