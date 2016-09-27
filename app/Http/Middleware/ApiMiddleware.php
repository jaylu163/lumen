<?php

namespace App\Http\Middleware;

use Log;
use DB;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Response;
use Closure;

class ApiMiddleware{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next){

        return $next($request);
    }

    public function getRequestInfo(Request $request){
        $server = $request->createFromGlobals();
        Log::info('no found route ',[],[]);


    }
    public function getSqlLog(){
        $queries = DB::getQueryLog();
        var_dump($queries);die;
    }
}
