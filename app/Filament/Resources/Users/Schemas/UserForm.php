<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\ModalTableSelect;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Schema;

class UserForm
{

    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->components([
                    TextInput::make('name'),
                    TextInput::make('email'),
                    Group::make()
                        ->relationship('shifts')
                        ->schema(
                            [
                                ModalTableSelect::make('category_id')
                                    ->relationship('categories')
                                    ->tableConfiguration(\App\Filament\Tables\ShiftCategories::class),

                            ]
                        ),
                ]
            );
    }
}
