<?php

namespace App\Filament\Tables;

use App\Models\ShiftCategory;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ShiftCategories
{

    public static function configure(Table $table): Table
    {

        return $table
            ->query(fn(): Builder => ShiftCategory::query())
            ->columns([
                TextColumn::make('name')
            ])
            ->filters([
                //
            ])
            ->headerActions([
                //
            ])
            ->recordActions([
                //
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    //
                ]),
            ]);
    }
}
