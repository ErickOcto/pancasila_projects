<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogResource\Pages;
use App\Filament\Resources\BlogResource\RelationManagers;
use App\Models\Blog;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogResource extends Resource
{
    protected static ?string $model = Blog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
->schema([
            TextInput::make('title')
                ->label('Blog Title')
                ->required()
                ->maxLength(255),

            Select::make('blog_category_id')
                ->label('Blog Category')
                ->relationship('blogCategory', 'name')
                ->required(),

            TextInput::make('tags')
                ->label('Tags')
                ->placeholder('Add tags separated by commas')
                ->maxLength(255),

            TextInput::make('slug')
                ->label('Slug')
                ->unique()
                ->required()
                ->maxLength(255),

            FileUpload::make('thumbnail')
                ->label('Thumbnail')
                ->image()
                ->directory('thumbnails')
                ->maxSize(4096)
                ->required(),

            RichEditor::make('content')
                ->label('Content')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                TextColumn::make('blogCategory.name'),
                ImageColumn::make('thumbnail')
                    ->label('Thumbnail')
                    ->size(50),
                TextColumn::make('tags')
                ->label('Tags')
                ->wrap(),
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
            'index' => Pages\ListBlogs::route('/'),
            'create' => Pages\CreateBlog::route('/create'),
            'edit' => Pages\EditBlog::route('/{record}/edit'),
        ];
    }
}
