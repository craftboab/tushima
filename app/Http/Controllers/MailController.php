<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\User;
use Auth;
use Exception;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function reward()
    {
        $user = Auth::user();


        $email = new \SendGrid\Mail\Mail();
        $email->setFrom(getenv('FROM_EMAIL'), getenv('FROM_NAME'));
        $email->setSubject("おめでとうございます");
        $email->addTo('$user->email');

        $sendGrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        $email->addContent(
            "text/plain",
            strval(
                view(
                    'emails/templates/notificationMail',
                    compact('user')
                )
            )
        );
        $email->addContent(
            "text/html",
            strval(
                view(
                    'emails/templates/notificationMail',
                    compact('user')
                )
            )
        );
        try {
            $sendGrid->send($email);
            return true;
        } catch (Exception $e) {
            Log::debug($e->getMessage());
            return false;
        }
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
        //
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
