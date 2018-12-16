<?php

namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Support\ServiceProvider;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        if(env('APP_ENV') == 'production') {
            \URL::forceScheme('https');
        }
        // $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
        //     $event->menu->add(trans('menu.pages'));

        //     $items = Page::all()->map(function (Page $page) {
        //         return [
        //             'text' => $page['title'],
        //             'url' => route('admin.pages.edit', $page)
        //         ];
        //     });

        //     $event->menu->add(...$items);
        // });
    }
    // public function boot(Dispatcher $events)
    // {
    //     $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
    //         $event->menu->add('MAIN NAVIGATION');
    //         $event->menu->add([
    //             'text' => 'Blog',
    //             'url' => 'admin/blog',
    //         ]);
    //     });
    // }

    /**
     *
     *
     */
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
