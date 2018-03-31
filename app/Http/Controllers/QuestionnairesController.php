<?php

namespace App\Http\Controllers;

use App\Questionnaire;
use Illuminate\Http\Request;

class QuestionnairesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qures = Questionnaire::all();

        return view('admin.questionnaires.index', compact('qures'));
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
        Questionnaire::create($request->all());

        return redirect('/admin/questionnaires');
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
        $qure = Questionnaire::findOrFail($id);

        return view('admin.questionnaires.edit', compact('qure'));

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
        $qure = Questionnaire::findOrFail($id);

        $qure->update($request->all());

        return redirect('admin/questionnaires');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Questionnaire::findOrFail($id)->delete();

        return redirect('/admin/questionnaires');
    }
}
