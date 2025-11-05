<?php
namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function handle(Request $request, Closure $next): Response
    {

        if (
            !session()->has('LoggedAdmin') &&
            ($request->path() != 'users/login' &&
                !$request->routeIs('forgot-password') &&
                !$request->routeIs('password/reset') &&
                $request->path() != '/'
                // ! $request->routeIs('password/reset') &&
                // $request->path() != 'users/forgot-password'
            )
        ) {
            Session::put('url.intended', $request->url());

            return redirect('/users/login')->with('fail', 'You must be logged in');

        }

        if (session()->has('LoggedAdmin')) {

            // Redirecting away from login page if already logged in
            if ($request->path() === 'users/login' || $request->path() === '/') {

                $userId = session('LoggedAdmin');
                $user = User::find($userId);

                if ($user) {
                    switch ($user->user_role) {
                        case 1:
                            return redirect()->route('user.dashboard');
                        case 2:
                            return redirect()->route('doctors.dashboard');
                        case 3:
                            return redirect()->route('patients.dashboard');
                        case 4:
                            return redirect()->route('pharmacies.dashboard');
                        case 5:
                            return redirect()->route('delivery.dashboard');
                        default:
                            return redirect()->route('user.dashboard');
                    }
                }
            }
        }

        $response = $next($request);

        $response->headers->set('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate');
        $response->headers->set('Pragma', 'no-cache');
        $response->headers->set('Expires', 'Sat, 01 Jan 1990 00:00:00 GMT');

        return $response;
    }

}
