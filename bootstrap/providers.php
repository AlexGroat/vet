<?php

use App\Providers\AppServiceProvider;
use App\Providers\Filament\admin\AdminPanelProvider;
use App\Providers\Filament\app\AppPanelProvider;

return [
    AppServiceProvider::class,
    AdminPanelProvider::class,
    AppPanelProvider::class,
];
