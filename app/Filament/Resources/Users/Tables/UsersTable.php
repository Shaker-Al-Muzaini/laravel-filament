<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\BulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Support\Icons\Heroicon;


class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name'),
                TextColumn::make('email')
                    ->icon(Heroicon::Envelope)
                    ->iconColor('primary')
                ,
                TextColumn::make('created_at')
                ->dateTime(),



            ])
            ->filters([

            ])
            ->recordActions([

                EditAction::make(),

                DeleteAction::make(),

            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    BulkAction::make('delete'),

                    DeleteBulkAction::make(),

                ]),
            ]);
    }
}
