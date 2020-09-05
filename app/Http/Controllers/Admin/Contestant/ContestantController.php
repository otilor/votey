<?php

namespace App\Http\Controllers\Admin\Contestant;

use App\Contestant;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateContestantRequest;
use App\User;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    /**
     * @var $contestant
     *
     * Returns a new instance of Contestant
     */
    private $contestant;

    public function __construct()
    {
        $this->contestant = new Contestant;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $users = User::role('student')->paginate(29);
        return view('admin.contestants.create', compact('id', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateContestantRequest $request)
    {
        if (! empty(($this->contestant->where('user_id', $request->user_id)->first()))) {
            flash(__('User already taken!'))->error();
            return back();
        }

        $this->contestant->create($request->validated());
        flash(__('New contestant added'))->success();
        return redirect(route('admin.polls.index') . "/{$request->poll_id}");
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
