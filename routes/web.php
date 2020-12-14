<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
	// BIA
	Route::get('/bia/{bia}/department/{department}/section/{section}/', 'BiaController@assessment')->name('bia.assessment');
	Route::post('/bia/{bia}/department/{department}/section/{section}/', 'BiaController@store')->name('bia.assessment');
	Route::post('/bia/{bia}/department/{department}/section/{section}/reset', 'BiaController@reset')->name('bia.reset');
	// COMPANY
	Route::get('/company/{company}/dependencies/', 'CompanyController@dependencies')->name('company.dependencies');
	// USER SWITCHING
	Route::get('/user/switch/admin', 'UserSwitchingController@switchToAdmin')->name('user.switch');
	Route::get('/user/switch/{id}', 'UserSwitchingController@switchToUser')->name('user.switch');
	// USER PROFILE
	Route::get('/user/profile', 'ProfileController@index')->name('user.profile');
	Route::get('/user/profile', 'ProfileController@edit')->name('edit-profile');
	Route::post('/user/profile', 'ProfileController@store')->name('edit-profile');
	// LOGIN - LOGOUT
	Route::get('/user/logout', 'LoginController@logOut')->name('user.logout');
	// DASHBOARDS
	Route::get('/company-dashboard', 'PagesController@companydashboard');
	Route::get('/company-dashboard2', 'PagesController@companydashboard2');
	Route::get('/dashboard-sfia', 'PagesController@dashboardsfia');
	Route::get('/bia-analysis', 'PagesController@biaanalysis');
	Route::get('/bia-plan', 'PagesController@biaplan');
	Route::get('/bia-service-process', 'PagesController@biaserviceprocess');
	Route::get('/', 'PagesController@index')->name('home');
});
Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login')->name('login');
// Route::get('/login', 'LoginController@showLoginForm')->name('login');
// FRONT END
// Demo routes
Route::get('/datatables', 'PagesController@datatables');
Route::get('/ktdatatables', 'PagesController@ktDatatables');
Route::get('/select2', 'PagesController@select2');
Route::get('/icons/custom-icons', 'PagesController@customIcons');
Route::get('/icons/flaticon', 'PagesController@flaticon');
Route::get('/icons/fontawesome', 'PagesController@fontawesome');
Route::get('/icons/lineawesome', 'PagesController@lineawesome');
Route::get('/icons/socicons', 'PagesController@socicons');
Route::get('/icons/svg', 'PagesController@svg');
// Quick search dummy route to display html elements in search dropdown (header search)
Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');


