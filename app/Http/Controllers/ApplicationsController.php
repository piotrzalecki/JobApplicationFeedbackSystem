<?php

namespace App\Http\Controllers;

use App\Address;
use App\Application;
use App\Company;
use App\Photo;
use App\Position;
use App\Questionnaire;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $applications = Application::all();
        $companies = Company::pluck('name','id');
        $positions = Position::pluck('name','id');
        $addresses = Address::pluck('city_name','id');
        $questionnaires = Questionnaire::pluck('name','id');

        return view('admin.applications.index', compact('applications','companies','positions','addresses','questionnaires'));
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
        $input = $request->all();

        if($file = $request->file('photo_id')){

            $name = time();

            $file->move('images',$name);

            $photo = Photo::create(['path'=>$name]);

            $input['photo_id'] = $photo->id;
        }



        Application::create($input);

        return redirect('/admin/applications');
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
        $application = Application::findOrFail($id);

        $companies = Company::pluck('name','id');
        $positions = Position::pluck('name','id');
        $addresses = Address::pluck('city_name','id');

        return view('admin.applications.edit', compact('application','companies','positions','addresses'));

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
        $input = $request->all();

        if($file = $request->file('photo_id')){

            $name = time();

            $file->move('images',$name);

            $photo = Photo::create(['path'=>$name]);

            $input['photo_id'] = $photo->id;

        }



        $application = Application::findOrFail($id);

        $application->update($input);

        return redirect('admin/applications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Application::findOrFail($id)->delete();

        return redirect('/admin/applications');
    }
}
