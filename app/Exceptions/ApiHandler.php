<?php
/**
 * Created by PhpStorm.
 * User: luhuajun
 * Date: 2016/9/21
 * Time: 13:06
 */
namespace App\Exceptions;
use Exception;
use Log;
use DB;
use Symfony\Component\HttpFoundation\Request;
//use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApiHandler extends Handler{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        //HttpException::class,
        ModelNotFoundException::class,
        ValidationException::class,

    ];



    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {

        parent::report($e);

    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {
        return parent::render($request, $e);
    }


    public function getExceptionInfo(Exception $e){


    }

}