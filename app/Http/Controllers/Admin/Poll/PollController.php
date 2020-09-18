<?php

namespace App\Http\Controllers\Admin\Poll;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePollRequest;
use App\Poll;
use App\Session;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function __construct()
    {
        $this->poll = new Poll();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $polls = $this->poll->paginate(5);

        return view('admin.polls.index', compact('polls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sessions = Session::paginate(5);

        return view('admin.polls.create', compact('sessions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePollRequest $request)
    {
        $this->poll->create($request->validated());
        flash('Poll created!');

        return redirect(route('admin.polls.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poll = $this->poll->find($id);

        return view('admin.polls.show', compact('poll'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
