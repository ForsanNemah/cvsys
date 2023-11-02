<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Cv;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
 

class ListService extends Component implements HasForms, HasTable
{

    use InteractsWithTable;
    use InteractsWithForms;

    public function render()
    {
        return view('livewire.list-service');
    }


    public function table(Table $table): Table
    {
        return $table
            ->query(
















                

                Cv::query()

                /*
               [

                "name"=>"name",
                
                "age"=>"age",
               ]
                */
                
                
                
                
                )
            ->columns([
                TextColumn::make('name'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }
    



}
