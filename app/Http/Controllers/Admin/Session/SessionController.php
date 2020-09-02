<?php

namespace App\Http\Controllers\Admin\Session;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSessionRequest;
use App\Session;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->session = new Session();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessions = $this->session->all();
        return view('admin.sessions.index', compact('sessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sessions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSessionRequest $request)
    {
        $this->session->create($request->validated());
        flash(__('Session stored!'))->success()->important();
        return redirect(route('admin.sessions.index'), $request->get('redirectTo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $session = $this->session->findOrFail($id);
        return view('admin.sessions.edit', compact('session'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSessionRequest $request, $id)
    {
        $this->session->findOrFail($id)->update($request->validated());
        flash('Updated successfully!')->success();
        return redirect(route('admin.sessions.index'));
    }

    /**
     * * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->session->find($id)->delete();
        flash('Deleted successfully')->important();
        return back();
    }
}
