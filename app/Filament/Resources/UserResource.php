<?php

namespace App\Filament\Resources;

use App\Enums\UserTypeEnum;
use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\Category;
use App\Models\User;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;



class UserResource extends Resource
{
    protected static ?string $pluralModelLabel = 'المستخدمين';
    protected static ?string $modelLabel="المستخدمين";
    protected static ?string $navigationGroup = 'المستخدمين و الزبائن';
    protected static ?int $navigationSort=2;



    protected static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required()->label('الاسم'),
                SpatieMediaLibraryFileUpload::make('img')->collection('users')->label('الصورة'),
                Forms\Components\TextInput::make('password')->password()->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->dehydrated(fn($state) => filled($state))->required(),
                Forms\Components\TextInput::make('email')->required()->label('البريد'),
                Forms\Components\TextInput::make('phone')->required()->label('الهاتف'),
                Forms\Components\Select::make('type')->options([
                    UserTypeEnum::Admin->value=>UserTypeEnum::Admin->getValue(),
                    UserTypeEnum::Agent->value=>UserTypeEnum::Agent->getValue(),
                    UserTypeEnum::Delegte->value=>UserTypeEnum::Delegte->getValue(),
                ]) ,


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                SpatieMediaLibraryImageColumn::make('الصورة')->collection('users'),

                Tables\Columns\TextColumn::make('email')->searchable()->label('البريد الالكتروني'),
                Tables\Columns\TextColumn::make('phone')->searchable()->label('رقم الهاتف'),
                Tables\Columns\BadgeColumn::make('type')->label('نوع المستخدم')
                    ->searchable()->colors([
                        UserTypeEnum::Admin->color()=>UserTypeEnum::Admin->value,
                        UserTypeEnum::Agent->color()=>UserTypeEnum::Agent->value,
                        UserTypeEnum::Delegte->color()=>UserTypeEnum::Delegte->value,
                        UserTypeEnum::User->color()=>UserTypeEnum::User->value,
                    ]),

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
