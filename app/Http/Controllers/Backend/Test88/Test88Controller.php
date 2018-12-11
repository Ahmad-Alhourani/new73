<?php

namespace App\Http\Controllers\Backend\Test88;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Backend\Test88\CreateTest88;
use App\Http\Requests\Backend\Test88\UpdateTest88;
use App\Repositories\Backend\Test88Repository;
use App\Events\Backend\Test88\Test88Created;
use App\Events\Backend\Test88\Test88Updated;
use App\Events\Backend\Test88\Test88Deleted;
use Prettus\Repository\Criteria\RequestCriteria;
//use XLabTechs\AdminListing\Facades\AdminListing;
use App\Models\Test88;

class Test88Controller extends Controller
{
    /** @var test88Repository */
    private $test88Repository;

    public function __construct(Test88Repository $test88Repo)
    {
        $this->test88Repository = $test88Repo;
    }

    /**
     * Display a listing of the Test88.
     *
     * @param  Request $request
     * @return Response | \Illuminate\View\View|Response
     */

    public function index(Request $request)
    {
        $this->test88Repository->pushCriteria(new RequestCriteria($request));
        $data = $this->test88Repository->paginate(25);

        return view('backend.test88s.index')->with('test88s', $data);
    }

    /**
     * Show the form for creating a new Test88.
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function create()
    {
        return view('backend.test88s.create');
    }

    /**
     * Store a newly created Test88 in storage.
     *
     * @param CreateTest88Request $request
     *
     * @return Response | \Illuminate\View\View|Response
     */
    public function store(CreateTest88 $request)
    {
        $obj = $this->test88Repository->create(
            $request->only(["name", "status"])
        );

        event(new Test88Created($obj));
        return redirect()
            ->route('admin.test88.index')
            ->withFlashSuccess(__('alerts.frontend.test88.saved'));
    }

    /**
     * Display the specified Test88.
     *
     * @param Test88 $test88
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function show(Test88 $test88)
    {
        return view('backend.test88s.show')->with('test88', $test88);
    }

    /**
     * Show the form for editing the specified Test88.
     *
     * @param Test88 $test88
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function edit(Test88 $test88)
    {
        return view('backend.test88s.edit')->with('test88', $test88);
    }

    /**
     * Update the specified Test88 in storage.
     *
     * @param UpdateTest88Request $request
     *
     * @param Test88 $test88
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     */
    public function update(UpdateTest88 $request, Test88 $test88)
    {
        $obj = $this->test88Repository->update($test88, $request->all());

        event(new Test88Updated($obj));
        return redirect()
            ->route('admin.test88.index')
            ->withFlashSuccess(__('alerts.frontend.test88.updated'));
    }

    /**
     * Remove the specified Test88 from storage.
     *
     * @param Test88 $test88
     * @return \Illuminate\View\View|Response
     * @internal param int $id
     *
     */
    public function destroy(Test88 $test88)
    {
        $obj = $this->test88Repository->delete($test88);
        event(new Test88Deleted($obj));
        return redirect()
            ->back()
            ->withFlashSuccess(__('alerts.frontend.test88.deleted'));
    }
}
