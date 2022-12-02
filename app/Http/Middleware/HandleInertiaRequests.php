<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request)
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request) {
        return array_merge(parent::share($request), [
            'auth' => function() {
                $user = auth()->user();
                return $user ? [
                    'hasRole' => [
<<<<<<< HEAD
                        // 'superAdmin' => $user->hasRole(['superAdmin']),
                        'admin' => $user->hasRole('admin'),
                        // 'moderator' => $user->hasRole('moderator'),
                        // 'developer' => $user->hasRole('developer'),
                        'user' => $user->hasRole('user'),
=======
                        // 'superAdmin' => $user->hasRole(['super-admin']),
                        'admin' => $user->hasRole('pusdalop'),
                        // 'moderator' => $user->hasRole('moderator'),
                        // 'developer' => $user->hasRole('developer'),
                        'user' => $user->hasRole('trc'),
>>>>>>> 246e1f5fff2a030a4e5e50a240466baa46bd9fb2

                    ]
                ] : null;
            },
        ]);
    }
}
