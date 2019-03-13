<?php

namespace App\Http\Controllers;

use App\Mail\AppointmentMail;
use Mail;
use App\Mail\WelcomePeeper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Mail;
use App\Peeper;
use App\Appointment;
use Mockery\Exception;

class PeeperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('book_photographer');
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
        if($request->all()) {
            Peeper::create([
               'first_name' => $request['first_name'],
               'last_name' => $request['last_name'],
               'email' => $request['email'],
                'number' => $request['number'],
                'address' => $request['address'],
                'city' => $request['city'],
                'skillset' => $request['skillset'],
                'instagram_username' => $request['instagram_username'],
                'gender' => $request['gender'],
                'password' => Hash::make($request['password']),
                'category' => $request['category'],
            ]);

            //Send confirmation email here

            try {
                Mail::to($request['email'])->queue(new WelcomePeeper($request['first_name']));
            } catch(Exception $e) {
                return $e;
            }

            return redirect('home')->with('status', 'We have sent you a confirmation email.');
        }


    }

    public function planner(Request $request)
    {
        //
        if($request->all()) {
            Peeper::create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'email' => $request['email'],
                'number' => $request['number'],
                'address' => $request['address'],
                'city' => $request['city'],
                'skillset' => $request['skillset'],
                'instagram_username' => $request['instagram_username'],
                'gender' => $request['gender'],
                'password' => Hash::make($request['password']),
                'category' => $request['category'],
            ]);

//            $firstName =

            //Send confirmation email here

            try {
                Mail::to($request['email'])->queue(new WelcomePeeper($request['first_name']));
            } catch(Exception $e) {
                return $e;
            }

            return redirect('home')->with('status', 'We have sent you a confirmation email.');
        }

        return view('planner');
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

    public function plan(Request $request) {
        if($request->all()) {

        }
        return view('plan');
    }

    public function bookPhotographer(Request $request) {
        if($request->all()) {
            Appointment::create([
                'first_name' => $request['first_name'],
                'last_name' => $request['last_name'],
                'telephone' => $request['telephone'],
                'email' => $request['email'],
                'venue' => $request['venue'],
                'quantity' => $request['adults'],
                'time' => $request['time'],
                'date' => $request['dates'],
                'event' => $request['event'],
                'notes' => $request['notes'],
            ]);

            try {
                Mail::to($request['email'])->queue(new AppointmentMail($request['first_name'], $request['last_name'], $request['telephone'], $request['email'], $request['venue'], $request['adults'], $request['time'], $request['dates'], $request['event'], $request['notes']));
            } catch(Exception $e) {
                return $e;
            }

            return redirect()->route('home')->with('success_appointment', 'Your appointment has been booked successfully!');
        }
        return view('book_photographer');
    }

    public function book(Request $request) {
        if($request->all()) {
//            Peeper::create([
//                'first_name' => $request['first_name'],
//                'last_name' => $request['last_name'],
//                'number' => $request['telephone'],
//                'gender' => $request->gender,
//                'address' => $request->address,
//                'city' => $request->city,
//                'skillset' => $request->skillset,
//                'instagram_username' => $request->instagram_username,
//                'email' => $request->email,
//                'password' => Hash::make($request->password),
//                'category' => $request->category,
//            ]);
//            return redirect()->route('home')->with('success', 'Your message has been sent successfully!');
        }
        return view('photographer');
    }

}
