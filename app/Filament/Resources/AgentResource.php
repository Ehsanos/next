<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgentResource\Pages;
use App\Filament\Resources\AgentResource\RelationManagers;
use App\Models\Agent;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;

class AgentResource extends Resource
{
    protected static ?string $model = Agent::class;
    protected static ?string $pluralModelLabel = "الوكلاء";


    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('name')->label('اسم الوكيل')->required(),

                    Forms\Components\TextInput::make('password')->password()->dehydrateStateUsing(fn($state) => Hash::make($state))
                        ->dehydrated(fn($state) => filled($state))->required(),
                    Forms\Components\SpatieMediaLibraryFileUpload::make('الصورة')->collection('users')->imageResizeMode(1),
                    Forms\Components\Select::make('country_id')->relationship('country', 'name')->label('الدولة'),

                ])->columns(3),


                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('email')->label('بريد الكتروني أول')->required(),
                    Forms\Components\TextInput::make('email2')->label('بريد الكتروني ثاني'),
                    Forms\Components\TextInput::make('email3')->label('بريد الكتروني ثالث'),
                    Forms\Components\TextInput::make('phone')->label('رقم الهاتف')->required(),
                    Forms\Components\TextInput::make('whatsapp')->label('واتساب أول'),
                    Forms\Components\TextInput::make('whatsapp2')->label('واتساب ثاني'),
                    Forms\Components\TextInput::make('facebook')->label('حساب الفيس بوك'),
                    Forms\Components\TextInput::make('instegram')->label('انستغرام'),
                    Forms\Components\TextInput::make('twitter')->label('تويتر'),
                ])->columns(3),


                Forms\Components\Card::make()->schema([

                    Forms\Components\TextInput::make('address_ar')->label('العنوان بالعربي'),
                    Forms\Components\TextInput::make('address_en')->label('العنوان EN'),
                    Forms\Components\TextInput::make('address_tr')->label('TR العنوان'),
                    Forms\Components\TextInput::make('address_es')->label('ES العنوان'),
                    Forms\Components\TextInput::make('address_du')->label('DU العنوان'),


                ])->columns(3),


                Forms\Components\Card::make()->schema([
                    Forms\Components\TextInput::make('info_ar')->label('تفاصيل أخرى '),
                    Forms\Components\TextInput::make('info_en')->label('تفاصيل أخرى EN'),
                    Forms\Components\TextInput::make('info_tr')->label('تفاصيل أخرى TR'),
                    Forms\Components\TextInput::make('info_es')->label('تفاصيل أخرى ES'),
                    Forms\Components\TextInput::make('info_du')->label('تفاصيل أخرى DU'),

                ])->columns(3)


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('اسم الوكيل')->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('users')->label('الصورة'),
                Tables\Columns\TextColumn::make('email')->label('البريد ')->searchable(),
                Tables\Columns\TextColumn::make('country.name')->label('الدولة')->searchable(),


            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListAgents::route('/'),
            'create' => Pages\CreateAgent::route('/create'),
            'edit' => Pages\EditAgent::route('/{record}/edit'),
        ];
    }
}
