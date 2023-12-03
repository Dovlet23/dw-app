<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController
{
    /**
     * list articles
    */
    public function index()
    {

    }

    /**
     * form create article
     */
    public function create()
    {

    }

    /**
     * store request in table
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        return redirect()->back();
    }

    /**
     * @param int $id
     * @param Request $request
     * @return void
     */
    public function update(int $id, Request $request)
    {

    }

    /**
     * show the article
     * @param int $id
     *
     */
    public function show(int $id)
    {

    }

    /**
     * delete article
     * @param int $id
     */
    public function delete()
    {

    }
}
