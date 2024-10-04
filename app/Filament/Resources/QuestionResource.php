<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Models\Question;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('question')
                ->label('Question')
                ->required(),

            Select::make('difficulty')
                ->label('Difficulty Level')
                ->options([
                    'low' => 'Low',
                    'medium' => 'Medium',
                    'hard' => 'Hard',
                ])
                ->required(),

            Repeater::make('answers') // Relasi ke Answer
                ->relationship('answers')
                ->label('Answers')
                ->schema([
                    TextInput::make('answer')
                        ->label('Answer')
                        ->required(),
                    Toggle::make('value')
                        ->label('Correct Answer')
                        ->inline(false) // Checkbox untuk jawaban benar atau salah
                        ->default(false),
                ])
                ->minItems(2) // Minimal dua pilihan jawaban
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('question')
                    ->label('Question')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('difficulty')
                    ->label('Difficulty')
                    ->formatStateUsing(function ($state) {
                        switch ($state) {
                            case 'low':
                                return "<span style='padding: 2px; border-radius: 4px; background-color: #4CAF50; color: white; font-weight: bold;'>Easy</span>";
                            case 'medium':
                                return "<span style='padding: 2px; border-radius: 4px; background-color: #FFC107; color: white; font-weight: bold;'>Medium</span>";
                            case 'hard':
                                return "<span style='padding: 2px; border-radius: 4px; background-color: #F44336; color: white; font-weight: bold;'>Hard</span>";
                        }
                        return $state;
                    })
                    ->html()
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
