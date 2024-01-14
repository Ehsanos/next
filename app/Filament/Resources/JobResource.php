<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobResource\Pages;
use App\Filament\Resources\JobResource\RelationManagers;
use App\Models\Job;
use Filament\Forms;
use Filament\Forms\Components\Wizard;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobResource extends Resource
{
    protected static ?string $model = Job::class;
    protected static ?string $pluralModelLabel = 'طلبات التوظيف';
    protected static ?string $navigationGroup = 'المستخدمين و الزبائن';

    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $navigationIcon = 'heroicon-o-users';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('الوظائف ')->schema([
                    Wizard::make()->schema([
                        Wizard\Step::make('AR')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('title')->required()->label('اسم الوظيفة'),
                            Forms\Components\RichEditor::make('discrption')->required()->label('تفاصيل الوظيفة'),

                        ])->columns(2)]),
                        Wizard\Step::make('EN')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('title_en')->nullable()->label('ENاسم الوظيفة'),
                            Forms\Components\RichEditor::make('discrption_en')->nullable()->label('تفاصيل الوظيفةEN'),

                        ])->columns(2)]),
                        Wizard\Step::make('TR')->schema([Forms\Components\Card::make()->schema([

                            Forms\Components\TextInput::make('title_tr')->nullable()->label('TRاسم الوظيفة'),
                            Forms\Components\RichEditor::make('discrption_tr')->nullable()->label('Tتفاصيل الوظيفةر'),
                        ])->columns(2),
                        ]),
                        Wizard\Step::make('ES')->schema([Forms\Components\Card::make()->schema([

                            Forms\Components\TextInput::make('title_du')->nullable()->label('DUاسم الوظيفة'),

                            Forms\Components\RichEditor::make('discrption_du')->nullable()->label('DUتفاصيل الوظيفة'),

                        ])->columns(2),
                        ]),
                        Wizard\Step::make('DU')->schema([Forms\Components\Card::make()->schema([
                            Forms\Components\TextInput::make('title_es')->nullable()->label('اسم الوظيفةES'),
                            Forms\Components\RichEditor::make('discrption_es')->nullable()->label('تفاصيل الوظيفةES'),
                        ])->columns(2),
                        ]),
                    ])->skippable()

                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->searchable(),
                Tables\Columns\TextColumn::make('discrption')->searchable(),
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
            'index' => Pages\ListJobs::route('/'),
            'create' => Pages\CreateJob::route('/create'),
            'edit' => Pages\EditJob::route('/{record}/edit'),
        ];
    }
}
