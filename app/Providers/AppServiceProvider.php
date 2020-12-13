<?php
namespace App\Providers;
use App\User;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {
        Schema::defaultStringLength(191);
        $this->debugQueries();
        // $this->bladeDirectives();
        $this->globalViewComposer();
    }
    public function globalViewComposer() {
        view()->composer('*', function($view) {
            $switchableUsers = $hasSwitchUserpermissin = $old_user = false;
            $currentUser = Auth::user();
            $id = Session::get('old_user');
            // dd($id);
            if ( $currentUser ) {
                $hasSwitchUserpermissin = $currentUser->hasRoleWithPermission('switchUsers');
                $switchableUsers = $currentUser->hasRoleWithPermission('switchUsers') ? $currentUser->switchableUsers() : false;
            }
          $view
            ->with('currentUser', $currentUser)
            ->with('switchableUsers', $switchableUsers)
            ->with('hasSwitchUserpermissin', $hasSwitchUserpermissin)
            ->with('old_user', $id)
            ->with('icon', new \App\Helpers\Icon)
            ->with('sidebarMenu', new \App\Helpers\SidebarMenu($currentUser));
        });
    }
    public function debugQueries() {
        /*........add this code to bottom boot function........*/
        if (env('APP_ENV') !== 'production') {
            \Illuminate\Support\Facades\DB::connection()->enableQueryLog();
            \Illuminate\Support\Facades\Event::listen('kernel.handled', function ($request, $response) {
                if ( $request->has('debug') ) {
                    $queries = \Illuminate\Support\Facades\DB::getQueryLog();
                    $formattedQueries = [];
                    foreach( $queries as $query ) :
                        $prep = $query['query'];
                        foreach( $query['bindings'] as $binding ) :
                            $prep = preg_replace("#\?#", is_numeric($binding) ? $binding : "'" . $binding . "'", $prep, 1);
                        endforeach;
                        $formattedQueries[] = $this->removeLineBreaks($prep);
                    endforeach;
                    dd($formattedQueries);
                }
            });
        }
    }
    function removeLineBreaks(string $item){
       return str_replace(["\r\n", "\r", "\n"], ' ', $item);
    }
}