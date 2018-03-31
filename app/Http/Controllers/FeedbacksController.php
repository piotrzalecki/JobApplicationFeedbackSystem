<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Questionnaire;
use App\Application;
use App\Positions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class FeedbacksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::all();

        return view('admin.feedbacks.index', compact('feedbacks'));
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

      $mail_data = [

        'token' => str_random(35),
        'role' =>'role_name',
        'questions_no' => ''

      ];



        $form_data = $request->all();

        $mail_data['questions_no'] = Questionnaire::findOrFail($form_data['questionnaire_id'])->questions_number;
        $mail_data['role'] = Application::findOrFail($form_data['application_id'])->position->name;


        $form_data['token'] = $mail_data['token'];

        Feedback::create($form_data);

        Mail::send('emails.feedback_request', $mail_data, function($message) use ($form_data) {

            $message->to($form_data['email'])->subject('Piotr Zalecki feedback request' );

        });




        return redirect('/admin/feedbacks');
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
        $feedback = Feedback::findOrFail($id);
        $questionnaires = Questionnaire::pluck('name','id');

        return view('admin.feedbacks.edit', compact('feedback','questionnaires'));

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
        $feedback = Feedback::findOrFail($id);

        $feedback->update($request->all());

        return redirect('admin/feedbacks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Feedback::findOrFail($id)->delete();
        return redirect('admin/feedbacks');

    }
}
