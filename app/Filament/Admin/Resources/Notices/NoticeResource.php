<?php

namespace App\Filament\Admin\Resources\Notices;

use App\Filament\Admin\Resources\Notices\Pages\CreateNotice;
use App\Filament\Admin\Resources\Notices\Pages\EditNotice;
use App\Filament\Admin\Resources\Notices\Pages\ListNotices;
use App\Filament\Admin\Resources\Notices\Pages\ViewNotice;
use App\Filament\Admin\Resources\Notices\Schemas\NoticeForm;
use App\Filament\Admin\Resources\Notices\Schemas\NoticeInfolist;
use App\Filament\Admin\Resources\Notices\Tables\NoticesTable;
use App\Models\Notice;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
 
class NoticeResource extends Resource
{
    protected static ?string $model = Notice::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedExclamationTriangle;

    protected static ?string $recordTitleAttribute = 'Notice';

    protected static ?string $modelLabel = 'Comunicado';

    protected static ?string $pluralModelLabel = 'Comunicados';

    protected static ?string $navigationLabel = 'Comunicados';

    public static function form(Schema $schema): Schema
    {
        return NoticeForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return NoticeInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return NoticesTable::configure($table);
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
            'index' => ListNotices::route('/'),
            'create' => CreateNotice::route('/create'),
            'view' => ViewNotice::route('/{record}'),
            'edit' => EditNotice::route('/{record}/edit'),
        ];
    }
}
