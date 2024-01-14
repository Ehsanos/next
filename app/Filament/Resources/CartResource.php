<?php
//
//namespace App\Filament\Resources;
//
//use App\Filament\Resources\CartResource\Pages;
//use App\Filament\Resources\CartResource\RelationManagers;
//use App\Models\Cart;
//use Filament\Forms;
//use Filament\Resources\Form;
//use Filament\Resources\Resource;
//use Filament\Resources\Table;
//use Filament\Tables;
//use Illuminate\Database\Eloquent\Builder;
//use Illuminate\Database\Eloquent\SoftDeletingScope;
//
//class CartResource extends Resource
//{
//    protected static ?string $model = Cart::class;
//
//    protected static ?string $pluralModelLabel = 'السلة';
//    protected static ?string $navigationGroup = 'عمليات الشراء';
//
//
//    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
//    protected static function getNavigationBadge(): ?string
//    {
//        return static::getModel()::count();
//    }
//
//    public static function form(Form $form): Form
//    {
//        return $form
//            ->schema([
//                //
//            ]);
//    }
//
//    public static function table(Table $table): Table
//    {
//        return $table
//            ->columns([
//                //
//            ])
//            ->filters([
//                //
//            ])
//            ->actions([
//                Tables\Actions\EditAction::make(),
//            ])
//            ->bulkActions([
//                Tables\Actions\DeleteBulkAction::make(),
//            ]);
//    }
//
//    public static function getRelations(): array
//    {
//        return [
//            //
//        ];
//    }
//
//    public static function getPages(): array
//    {
//        return [
//            'index' => Pages\ListCarts::route('/'),
//            'create' => Pages\CreateCart::route('/create'),
//            'edit' => Pages\EditCart::route('/{record}/edit'),
//        ];
//    }
//}
