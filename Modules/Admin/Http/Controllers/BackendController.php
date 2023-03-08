<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BackendController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $this->showUrlPrefix();
            return $next($request);
        });
    }

    public function getUrlPrefix()
    {
        $locale = session('current_locale');
        $url_prefix = 'backend';

        if(!empty($locale) && $locale != 'zh-CN')
        {
            $url_prefix = 'backend/' . $locale;
        }
        return $url_prefix;
    }

    public function showUrlPrefix()
    {
        $url_prefix = $this->getUrlPrefix();
        view()->share('url_prefix', $url_prefix);
    }


}
