<?php

namespace App\Providers;

use App\Nova\Metrics\ExposantsAsk;
use App\Nova\Metrics\NewContactMsg;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Events\ServingNova;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Whitecube\NovaPage\NovaPageTool;
use Wlmsg\Welcomemsg\Welcomemsg;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Nova::serving(function (ServingNova $event) {
            app()->setLocale('fr');
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                'vento.michael0705@hotmail.com'
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            (new Welcomemsg())->width('full'),
            (new NewContactMsg())->width('full'),
            (new ExposantsAsk)->width('2/3'),
            (new \ChrisWare\NovaClockCard\NovaClockCard)
               ->locale('be')
               ->dateFormat('dddd, Do MMMM YYYY')
               ->timeFormat('LTS')
               ->timezone('CET')
               ->display('analogue'),
        ];
    }
//getQualifiedCreatedAtColumn()
    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            NovaPageTool::make(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
