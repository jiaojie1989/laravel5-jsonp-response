<?php

/*
 * Copyright (C) 2016 SINA Corporation
 *  
 *  
 * 
 * This script is firstly created at 2016-09-13.
 * 
 * To see more infomation,
 *    visit our official website http://app.finance.sina.com.cn/.
 */

namespace Jiaojie\Laravel\Middlewares\Jsonp;

use Response;
use Input;
use Closure;

/**
 * Description of JsonpResponse
 *
 * @encoding UTF-8 
 * @author jiaojie <jiaojie@staff.sina.com.cn> 
 * @since 2016-09-13 18:43 (CST) 
 * @version 0.1
 * @description 
 */
class JsonpResponse {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        $callback = $request->query->get("callback");
        $jsonp = $request->query->get("__jsonp");
        if ($callback && $jsonp) {
            $request->query->remove("__jsonp");
            $request->query->remove("callback");
        }
        $response = $next($request);
        if ($callback && $jsonp) {
            return Response::json($response->getOriginalContent())->setCallback($callback);
        } else {
            return $response;
        }
    }

}
