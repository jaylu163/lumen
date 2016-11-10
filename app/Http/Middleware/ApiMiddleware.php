<?php

namespace App\Http\Middleware;

use Log;
use DB;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Http\Response;
use Illuminate\Database\query;
use Closure;

class ApiMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request,  Closure $next){

        $this->getRequestInfo($request);
        $this->getSqlLog();
        $response = $next($request);

   /*     DB::listen(function($sql, $bindings, $time) {
            \Log::debug("sql: " . $sql . "; value: " . json_encode($bindings) . "; time: " . $time);
        });*/
        return $response;
    }

    public function getRequestInfo(Request $request){
        $url   = $request->url();
        $ip    = $request->ip();
        $query = $request->getQueryString();

        Log::info($url.'---IP:'.$ip.'---querystring:'.$query);

    }
    public function getSqlLog(){

      /*  $response = new Response();

        var_dump($response);*/
    }
}
