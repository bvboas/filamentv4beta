<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;

class UserForm
{

    public static function configure(Schema $schema): Schema
    {

        return $schema
            ->components([
                    Tabs::make('main')
                        ->schema(
                            [
                                Tabs\Tab::make('name')->schema([
                                    TextInput::make('name'),
                                ]),
                                Tabs\Tab::make('email')->schema([
                                    TextInput::make('email'),
                                ]),
                            ]
                        )
                        ->columnSpanFull()
                        ->persistTabInQueryString(),
                ]
            );
    }
}
