<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
/*
|--------------------------------------------------------------------------
| Rotas externas
|--------------------------------------------------------------------------
*/
Route::namespace('External\Principal')->group(function () {
    Route::get('/', 'PrincipalController')->name('/');
    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/{id}', 'BlogController@show')->name('blog.show');
});

// Rotas do externas (fora da administração)
Route::namespace('External')->group(function () {
    Route::namespace('Chalet')->group(function () {
        Route::get('chales', 'SearchChaletController')->name('chalets.search');
        Route::get('resultados-chale', 'ResultChaletController')->name('chalets.result');

        Route::get('hospedagem/marcar-camping', 'CampingController')->name('camping.reserve');
    });

    Route::namespace('Principal')->group(function () {
        Route::prefix('titulos')->group(function () {
            Route::get('contratar-titulo', 'PlansTitleController@step1')->name('title.contract');
            Route::post('contratar-titulo', 'PlansTitleController@store')->name('title.store');

            Route::get('dependentes-titulo/{id}', 'PlansTitleController@step2')->name('title.step2');
            Route::post('store-dependents', 'PlansTitleController@storeDependents')->name('title.storeDependent');
            Route::get('remove-dependents/{id}', 'PlansTitleController@removeDependent')->name('title.removeDependent');
        });
    });
});

Route::namespace('PagSeguro')->group(function () {
    Route::get('/checkout', 'PagSeguroController@index')->name('checkout.index');
    Route::post('/checkout-notifications', 'PagSeguroController@notifications')->name('checkout.notifications');
    Route::get('/payment-success', 'PaymentCompleteController')->name('checkout.complete');
});


// Rotas do Hotpark
Route::namespace('Hotpark')->prefix('eco-park')->group(function () {
    Route::get('ingressos', 'HotparkController@index')->name('buy-ticket');
    Route::get('comprar', 'BuyController@index')->name('buy.index');
});

/*
|--------------------------------------------------------------------------
| Rotas administrativas
|--------------------------------------------------------------------------
*/

Route::get('/hom', 'HomeController@index')->name('home');
Route::redirect('/home', 'admin/home');

Route::namespace('Admin')->prefix('admin')->middleware(['auth'])->group(function () {

    Route::resource('home', 'AdminController');

    Route::middleware(['isAdmin'])->group(function () {
        Route::namespace('Hotpark')->group(function () {
            Route::resource('plans', 'PlanController');
            Route::resource('days', 'DayController');
            Route::resource('products', 'ProductController')->except('edit');
        });
        Route::namespace('Control')->prefix('control')->group(function () {
            Route::resource('posts', 'PostController');
            Route::resource('users', 'UserController');
            Route::resource('chalets', 'ChaletController');
            Route::resource('category', 'CategoryController');

            Route::resource('transactions', 'TransactionController')->only(['index', 'show']);
            Route::get('camping', 'CampingController@index')->name('camping.index');
            Route::post('camping', 'CampingController@store')->name('camping.store');

            Route::post('chalets-image', 'ChaletController@upload')->name('chalet.upload');
            Route::get('chalets-delete-image/{id}', 'ChaletController@deleteImage')->name('chalet.deleteImage');

            Route::resource('titles', 'TitleController')->only(['index', 'show', 'destroy']);
            Route::post('titles-delete-dependent/{id}', 'DeleteDependentController')->name('titles.deleteDependent');

            Route::namespace('Search')->prefix('search')->name('search.')->group(function () {
                Route::get('search-transaction', 'SearchTransactionController')->name('transaction');
                Route::get('search-title', 'SearchTitleController')->name('title');
            });

        });
    });
});
