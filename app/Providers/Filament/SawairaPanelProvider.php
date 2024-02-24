<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class SawairaPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('sawaira')
            ->path('sawaira')
            ->font('Poppins')
            ->sidebarFullyCollapsibleOnDesktop()
            ->brandLogo(asset('image/Logo.png'))
                ->colors([
                    'danger' => Color::Rose,
                    'gray' => 'rgb(000,000,000)',
                    'info' => Color::Blue,
                    'primary' =>'rgb(27, 140, 216)',
                    'success' => Color::Emerald,
                    'warning' => Color::Orange,
            
            ])
            ->discoverResources(in: app_path('Filament/Sawaira/Resources'), for: 'App\\Filament\\Sawaira\\Resources')
            ->discoverPages(in: app_path('Filament/Sawaira/Pages'), for: 'App\\Filament\\Sawaira\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Sawaira/Widgets'), for: 'App\\Filament\\Sawaira\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
