<?php

namespace App\Filament\Resources\CvResource\RelationManagers;

use App\Models\Cv;
use App\Models\Job;
use App\Models\Country;
use App\Models\Type_of_estgdam;
use App\Models\Religion;
use App\Models\Status;
use App\Models\User;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
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

class FollowUpsRelationManager extends RelationManager
{
    protected static string $relationship = 'follow_ups';

    public function form(Form $form): Form
    {
        return $form
            ->schema([


                /*
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(255),

*/



                    Hidden::make('user_id')->default(Auth::id()),

                   
    
    
    
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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([



               






                TextColumn::make('id'),
                TextColumn::make('cv_id'),


                TextColumn::make('User.name'),

                TextColumn::make('Status.name'),

                TextColumn::make('id'),
                TextColumn::make('created_at'),
                TextColumn::make('updated_at'),




















                

                
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
