<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Title'),

                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->label('Slug'),

                Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->directory('posts/images')
                    ->nullable()
                    ->columnSpan(2),

                Forms\Components\RichEditor::make('body')
                    ->required()
                    ->label('Body')
                    ->columnSpan(2),

                Forms\Components\FileUpload::make('image_author')
                    ->label('Image Author')
                    ->directory('posts/images_author')
                    ->nullable(),

                Forms\Components\TextInput::make('author')
                    ->required()
                    ->label('Author'),

                TagsInput::make('category')
                    ->label('Category Post')
                    ->placeholder('Tambahkan kategori...')
                    ->columnSpan(2),

                Checkbox::make('is_sponsored')->inline()->label('Sponsored'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Image'),

                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Title'),

                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->searchable()
                    ->label('Slug'),

                Tables\Columns\TextColumn::make('body')
                    ->label('Body')
                    ->limit(50),

                Tables\Columns\ImageColumn::make('image_author')
                    ->label('Image Author'),

                Tables\Columns\TextColumn::make('author')
                    ->sortable()
                    ->searchable()
                    ->label('Author'),

                Tables\Columns\TextColumn::make('category')
                    ->label('Category')
                    ->getStateUsing(fn($record) => implode(', ', $record->category)),

                Tables\Columns\CheckboxColumn::make('is_sponsored')
                    ->label('Sponsored'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime(),
            ])
            ->filters([
                // Add custom filters if needed
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
            // Define any relations if necessary
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
