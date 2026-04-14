<?php

namespace App\Providers;

use App\Models\Menu;
use App\Models\Access;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        View::composer('admin.layout.sidebar', function ($view) {
            $role = auth()->user()->role;

            if($role === 'superadmin') {
                $menus = Menu::with('subMenus')->orderBy('order')->get();
                $view->with('menus', $menus);
                return;
            }else{
                $menus = Menu::with(['subMenus'])
                    ->whereHas('accesses', function ($q) use ($role) {
                        $q->where('role', $role);
                    })
                    ->orderBy('order')
                    ->get();
            }
            
            // dd($role, $menus);
            
            $view->with('menus', $menus);

        });
    }
}
