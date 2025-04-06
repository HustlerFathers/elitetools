<?php
namespace App\Middleware;

use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;
use App\Core\Session;
use Pecee\SimpleRouter\SimpleRouter as Route; // ✅ Import Pecee's SimpleRouter

class AuthMiddleware implements IMiddleware 
     {
    public function handle(Request $request): void
     {
        // Start session if not started
        Session::start();

        // Check if user is logged in
        if (!Session::get('user_id')) 
     {
            Route::response()->redirect('/login'); // ✅ Correct Pecee SimpleRouter redirect
        }
    }
}
