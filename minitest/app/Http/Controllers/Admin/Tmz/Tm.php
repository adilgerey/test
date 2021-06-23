<?php

namespace App\Http\Controllers\Admin\Tmz;


use App\Http\Controllers\Admin\Tmz\Repository\TmzRepository;
use App\Http\Controllers\Admin\Tmz\Utils\CommonBody;
use App\Http\Controllers\Admin\Tmz\Utils\ListBody;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Tmzs;
use App\Http\Controllers\Admin\Tmz\Service\TmzService;

class Tm extends Controller
{
    private TmzService $tmzService;

    /**
     * Display a listing of the resource.
     *
     * @param $tmzService
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function __construct(TmzService $tmzService){
        $this -> tmzService = $tmzService;
    }
    public function index()
    {
        $tms = $this->tmzService->latest(3);
        return view ('admin.tmz.index', compact('tms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tmz.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required',
            'address' => 'required',

        ]);
        Tmzs\Tmzs::create($request->all());
        return redirect()->route('tmz.index')
            -> with('success','Product created successfully');
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
