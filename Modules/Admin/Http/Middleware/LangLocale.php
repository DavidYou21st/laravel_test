<?php

namespace Modules\Admin\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LangLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $langList = ['zh-CN', 'en'];
        $local = 'zh-CN';
        // 获取路由前缀
        $routePrefix = $request->route()->getPrefix();

        if (!empty($routePrefix)) {
            // 是否有多个前缀
            $localeIndex = strrpos($routePrefix, "/");
            if ($localeIndex === false) {
                $local = $routePrefix == 'admin' ? 'zh-CN' : $routePrefix;
            } else {
                $local = substr($routePrefix, 0, $localeIndex);
            }
        }

        if (in_array($local, $langList)) {
            $request->session()->put('current_locale',  $local);
            if ($local == 'zh-CN') {
                $request->session()->put('prefix');
            } else {
                $request->session()->put('prefix',  '/'. $local);
            }
            app()->setLocale($local);
        }

        return $next($request);
    }
}
