<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FollowUpResource\Pages;
use App\Filament\Resources\FollowUpResource\RelationManagers;
use App\Models\Follow_up;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;


use App\Models\Cv;
use App\Models\Job;
use App\Models\Country;
use App\Models\Type_of_estgdam;
use App\Models\Status;
use App\Models\User;


use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Hidden;
use Filament\Tables\Actions\Action;
use Filament\Notifications\Notification;
use Auth;
use Filament\Tables\Filters\SelectFilter;

class FollowUpResource extends Resource
{
    protected static ?string $model = Follow_up::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-path-rounded-square';















    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //






                
                Hidden::make('user_id')->default(Auth::id()),

                Select::make('cv_id')
                ->options(

                   Cv::all()->pluck('id','id')
                    
                )->required()->label("CV ID"),




                Select::make('status_id')
                ->options(

                    Status::all()->pluck('name','id')
                    
                )->required()->label("CV Status"),



                Select::make('owner_id')
                ->options(

                    User::all()->pluck('name','id')
                    
                )->required()->label("Owner Name"),










            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //


                TextColumn::make('id'),
                TextColumn::make('cv_id'),


                TextColumn::make('User.name'),

                TextColumn::make('Status.name'),

                TextColumn::make('owner.name'),
                TextColumn::make('created_at'),
                TextColumn::make('updated_at'),





            ])
            ->filters([
                //
                SelectFilter::make('cv_id')

                ->options(

                    Cv::all()->pluck('id','id')



                )


            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListFollowUps::route('/'),
            'create' => Pages\CreateFollowUp::route('/create'),
            'edit' => Pages\EditFollowUp::route('/{record}/edit'),
        ];
    } 
    
    





    public static function getModelLabel(): string
    {
        return __('Followups_nav');
    }











}
