<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CvOrderResource\Pages;
use App\Filament\Resources\CvOrderResource\RelationManagers;
use App\Models\Cv_order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Auth;
use Redirect;
use Response;

class CvOrderResource extends Resource
{
    protected static ?string $model = Cv_order::class;

    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                


                TextColumn::make('id')->searchable() ,
                TextColumn::make('cv_id')->searchable() ,
                TextColumn::make('cv.name')->searchable() ,
                TextColumn::make('cv.age')->searchable() ,

                TextColumn::make('cv.country.country')->searchable() ,

                TextColumn::make('cv.experience')->label('experience')->searchable() ,
                TextColumn::make('User.name')->searchable() ,
                TextColumn::make('created_at')->searchable() ,
            ])
            ->filters([
                //
            ])
            ->actions([
                 
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                     
                ]),
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
            'index' => Pages\ListCvOrders::route('/'),
  
        ];
    }  
    
    











    public static function getModelLabel(): string
    {
        return __('Cv_orders_nav');
    }








}
