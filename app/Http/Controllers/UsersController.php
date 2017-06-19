<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Models\User;
use App\Repositories\User\UserRepositoryContract;

class UsersController extends Controller
{
    protected $users;

    public function __construct(
        UserRepositoryContract $users
    ) {
        $this->users = $users;
    }

    public function index()
    {
        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 11;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function show($id)
    {
        return view('users.show', [
          'user' => $this->users->find($id),
          // 'companyname' => $this->settings->getCompanyName(),
          // 'task_statistics' => $this->tasks->totalOpenAndClosedTasks($id),
          // 'lead_statistics' => $this->leads->totalOpenAndClosedLeads($id)
        ]);
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
