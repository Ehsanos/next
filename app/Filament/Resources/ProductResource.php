<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Department;
use App\Models\Product;
use App\Models\Tag;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use RalphJSmit\Filament\SEO\SEO;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Tables\Actions\ReplicateAction;


class ProductResource extends Resource
{
    public function isTableSearchable(): bool
    {
        return true;
    }

    protected static ?string $model = Product::class;
    protected static ?string $navigationGroup = 'المنتجات';
    protected static ?string $pluralModelLabel = 'المنتجات';

    protected static ?string $navigationIcon = 'heroicon-o-color-swatch';

    protected static ?int $navigationSort = 3;


    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Card::make()->schema([
                    Forms\Components\Toggle::make('is_active')->label('متوفر'),
                    SpatieMediaLibraryFileUpload::make('img')->collection('products')->multiple()->label('الصورة')->imageCropAspectRatio('1:1')->hint('يجي ان يكون قياس الصورة متناسق'),

                ]),


                Forms\Components\Section::make('المنتج')->schema([
                    Forms\Components\Wizard::make()->schema([

                        Forms\Components\Wizard\Step::make("AR")->schema([
                            Forms\Components\Card::make()->schema([
                                Forms\Components\TextInput::make('name')->label('اسم المنتج بالعربي')->default('AltinMix34')->required(),
                                Forms\Components\TextInput::make('marke_ar')->label('علامة المنتج بالعربي')->default('AltinMix34')->required(),
                                Forms\Components\RichEditor::make('description')->label('توصيف المنتج بالعربي')->default('AltinMix34'),


                            ]),
                        ]),
                        Forms\Components\Wizard\Step::make("EN")->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_en')->label('اسم EN')->default('AltinMix34'),
                            Forms\Components\TextInput::make('marke_en')->label('ماركة EN')->default('AltinMix34'),
                            Forms\Components\RichEditor::make('description')->label('توصيف EN')->default('AltinMix34'),


                        ])]),
                        Forms\Components\Wizard\Step::make("TR")->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_tr')->label('اسم TR')->default('AltinMix34'),
                            Forms\Components\TextInput::make('marke_tr')->label('ماركة TR')->default('AltinMix34'),
                            Forms\Components\RichEditor::make('description_tr')->label('وصف TR')->default('AltinMix34'),


                        ])]),
                        Forms\Components\Wizard\Step::make("ES")->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_es')->label('اسم ES')->default('AltinMix34'),
                            Forms\Components\TextInput::make('marke_es')->label('ماركة ES')->default('AltinMix34'),
                            Forms\Components\RichEditor::make('description_es')->label('توصيف ES')->default('AltinMix34'),


                        ])])->hidden(),
                        Forms\Components\Wizard\Step::make("DU")->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('name_du')->label('اسم DU')->default('AltinMix34'),
                            Forms\Components\TextInput::make('marke_du')->label('ماركة DU')->default('AltinMix34'),
                            Forms\Components\RichEditor::make('description_du')->label('وصف DU')->default('AltinMix34'),


                        ])])->hidden(),

                    ])->skippable(),

                ]),


                Forms\Components\Section::make('مواصفات أخرى')->schema([
                    Forms\Components\Card::make()->schema([
                        Forms\Components\Select::make('department_id')->options(Department::all()->pluck("name", "id"))->required()->label('القسم'),
                        Forms\Components\TextInput::make('code')->default('AltinMix34'),
                        Forms\Components\TextInput::make('price')->required()->default(1),
                        Forms\Components\TextInput::make('pakcing')->default('AltinMix34'),
                        Forms\Components\TextInput::make('length')->default('1'),
                        Forms\Components\TextInput::make('width')->default(1),
                        Forms\Components\TextInput::make('height')->default(1),
                        Forms\Components\TextInput::make('weigth')->default(1),
                        Forms\Components\TextInput::make('area')->default(1),
                        Forms\Components\ColorPicker::make('color')->default('#ffff'),
                    ])->columns(4),

                ]),


//                SpatieTagsInput::make('tags')->type('product')->label('كلمات مفتاحية'),
//                Forms\Components\TagsInput::make('tags')->label('كلمات مفتاحية انجليزي'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([


                Tables\Columns\TextColumn::make('name')->label('اسم المنتج')->searchable(),
                Tables\Columns\TextColumn::make('department.name')->label('القسم')->searchable(),
                Tables\Columns\IconColumn::make('is_active')->boolean()->label('متوفر'),
                Tables\Columns\TextColumn::make('description')->words(5)->label('وصف')->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('products')->label('صورة المنتج'),
                Tables\Columns\ColorColumn::make('color')->copyable()
                    ->copyMessage('تم نسخ رقم اللون')->label('لون المنج'),
                Tables\Columns\TextColumn::make('pakcing')->label('التعبئة')->searchable(),


//                Tables\Columns\TagsColumn::make('tags.name')->label('كلمات مفتاحية')->searchable(),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                ReplicateAction::make()->excludeAttributes(['description_es'])
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
