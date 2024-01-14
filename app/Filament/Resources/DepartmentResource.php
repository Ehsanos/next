<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DepartmentResource\Pages;
use App\Filament\Resources\DepartmentResource\RelationManagers;
use App\Models\Category;
use App\Models\User;
use Filament\Forms\Components\Radio;

use App\Models\Department;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class DepartmentResource extends Resource
{
    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    protected static ?string $pluralModelLabel = 'الأقسام';


    protected static ?string $model = Department::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-duplicate';
    protected static ?string $navigationGroup = 'المنتجات';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Card::make()->schema([
                    Toggle::make('is_active')->onColor('success')->offColor('black')->label('متوفر'),
                    SpatieMediaLibraryFileUpload::make('img')->collection('departments')->label('صورة القسم'),

                ]),


                Forms\Components\Section::make('تفاصيل القسم')->schema([
                    Forms\Components\Wizard::make()->schema([
                        Forms\Components\Wizard\Step::make('AR')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name')->required()->label('الاسم عربي'),
                            Textarea::make('description')->label('وصف عربي'),
                        ])->columns(2),
                        ]),
                        Forms\Components\Wizard\Step::make('EN')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_en')->label('اسم القسم EN'),
                            Textarea::make('description_en')->label('وصف EN'),
                        ])->columns(2),
                        ]),
                        Forms\Components\Wizard\Step::make('TR')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_tr')->label('الاسمTR'),
                            Textarea::make('description_tr')->label('وصفTR'),
                        ])->columns(2)]),
                        Forms\Components\Wizard\Step::make('ES')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_es')->label('الاسمES '),
                            Textarea::make('description_es')->label('وصف ES'),
                        ])->columns(2)]),
                        Forms\Components\Wizard\Step::make('DU')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_du')->label('DU الاسم'),
                            Textarea::make('description_du')->label('وصف DU'),
                        ])->columns(2)]),

                    ])->skippable(),
                ]),

                Forms\Components\Card::make()->schema([
                    Forms\Components\Select::make('category_id')->options(Category::all()->pluck("name", "id"))->required()->label('الفئة'),
                    Forms\Components\TagsInput::make('tags')->label('كلمات مفتاحية'),

                ])->columns(2),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('اسم القسم')->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('departments')->label('صورة القسم'),
                Tables\Columns\TextColumn::make('category.name')->label('الفئة')->searchable(),

                Tables\Columns\IconColumn::make('is_active')->label('مفعلة')->boolean(),
                TextColumn::make('description')->words(5)->label('وصف القسم')->searchable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDepartments::route('/'),
            'create' => Pages\CreateDepartment::route('/create'),
            'edit' => Pages\EditDepartment::route('/{record}/edit'),
        ];
    }
}
