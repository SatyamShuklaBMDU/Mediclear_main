<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $permission)
    {

        $Userpermission = Auth::User()->permissions;


        if (
            (in_array($permission, $Userpermission) && isset($Userpermission)) ||
            (isset($Userpermission[0]) && $Userpermission[0] == 'all')
        ) {
            return $next($request);

        } else {
            return redirect()->back()->with('permissionerror', "You have not Permission");
        }
    }
}
