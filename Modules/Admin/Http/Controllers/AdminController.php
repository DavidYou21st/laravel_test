<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Entities\User;

class AdminController extends BackendController
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
//        $result = User::all()->toArray();
//        var_dump($result);exit();
//        User::chunk(200, function ($items) {
//            foreach ($items as $item) {
//                var_dump($item->toArray());
//            }
//        });
        var_dump(User::findOrFail(11));exit();
        //return view('admin::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    public function hello()
    {
        $post = new User();
        $anotherPost = new User();
        if ($post->is($anotherPost)) {
            //
        }
        User::withoutEvents(function () {
            User::findOrFail(1)->delete();
            return User::find(2);
        });
    }
}
