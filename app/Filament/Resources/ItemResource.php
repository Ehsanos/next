<?php
//
//namespace App\Filament\Resources;
//
//use App\Enums\OrderStatusEnum;
//use App\Filament\Resources\ItemResource\Pages;
//use App\Filament\Resources\ItemResource\RelationManagers;
//use App\Models\Item;
//use App\Models\Order;
//use App\Models\Product;
//use App\Models\User;
//use Filament\Forms;
//use Filament\Resources\Form;
//use Filament\Resources\Resource;
//use Filament\Resources\Table;
//use Filament\Tables;
//use Illuminate\Database\Eloquent\Builder;
//use Illuminate\Database\Eloquent\SoftDeletingScope;
//
//class ItemResource extends Resource
//{
//    protected static ?string $pluralModelLabel = 'محتويات الطلب';
//
//    protected static ?string $model = Item::class;
//    protected static ?string $navigationGroup = 'عمليات الشراء';
//
//
//    protected static function getNavigationBadge(): ?string
//    {
//        return static::getModel()::count();
//    }
//
//
//    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
//
//    public static function form(Form $form): Form
//    {
//        return $form
//            ->schema([
//                Forms\Components\Select::make('order_id')->options(Order::all()->pluck('order_code','id'))->disabled(),
//
//
//
//            ]);
//    }
//
//    public static function table(Table $table): Table
//    {
//        return $table
//            ->columns([
//                Tables\Columns\TextColumn::make('order.order_code')->sortable()->label('كود الطلب')->searchable(),
//                Tables\Columns\TextColumn::make('order.user.name')->sortable()->label('اسم الزبون'),
//
//                Tables\Columns\TextColumn::make('order.status')->enum([
//
//                    OrderStatusEnum::Cancelled->value => OrderStatusEnum::Cancelled->getValue(),
//                    OrderStatusEnum::Wait->value => OrderStatusEnum::Wait->getValue(),
//                    OrderStatusEnum::Success->value => OrderStatusEnum::Success->getValue(),
//                ])->icon(fn($record) => OrderStatusEnum::tryFrom($record->status)?->getIcon())->color(fn($record) => OrderStatusEnum::tryFrom($record->status)?->getColor())->label('حالة الطلب'),
//                Tables\Columns\TextColumn::make('order.total')->label('السعر'),
//
//
//            ])
//            ->filters([
//                //
//            ])
//            ->actions([
//                Tables\Actions\ViewAction::make()->button(),
//
//                Tables\Actions\EditAction::make()->button(),
//                Tables\Actions\DeleteAction::make()->button(),
//
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
//            'view' => Pages\ViewItemss::route('/{record}'),
//            'index' => Pages\ListItems::route('/'),
//            'create' => Pages\CreateItem::route('/create'),
//            'edit' => Pages\EditItem::route('/{record}/edit'),
//
//
//        ];
//    }
//}
