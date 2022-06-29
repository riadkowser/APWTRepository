<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\Http\Request;

class ClientController extends Controller
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
     * @param  \App\Http\Requests\StoreClientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClientRequest  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClientRequest $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }

    public function clientLogin()
    {
        return view('client.clientLogin');
    }

    public function clientLoginSubmitted(Request $request)
    {
        $validate = $request->validate([
            "client_email"=>'required | email',
            "client_password"=>'required'
        ],
        [
            "client_email.required"=>"Please provide your email",
            "client_password.required"=>"Please provide your password",
        ]

    );
    // return redirect()->route('clientLogin');

        $c=Client::where('client_email',$request->client_email)
                            ->where('client_password',md5($request->client_password))->first();

        if($c){
           session()->put('session_email',$c->client_email);
           session()->put('anik',$c->client_name);
            return redirect()->route('home');
        }
        else {
            session()->flash('msg','User Not found');
            Session()->flash('alert-class', 'alert-danger'); 
        return back();
}
    }

    public function home()
    {
        return view('client.client_home');
    }

    








    public function clientRegistration()
    {
        return view('client.clientRegistration');
    }


    public function clientRegistrationSubmitted(Request $request)
    {
        $validate = $request->validate([
            "client_name"=>'required|string|min:3|max:10',
            "client_email"=>'required|email',
            "client_password"=>'required|min:8|string',
            "client_cpassword"=>'required|same:client_password',
            "client_dob"=>'required|before:-3 years',
            "client_gender"=>'required',
            "client_bg"=>'required',
            "client_phone"=>'required|numeric|min:11',
            "client_address"=>'required|string|max:50'
        ],
        [
            "client_name.required"=>"Please provide your name",
            "client_name.string"=>"Name must be alphabets",
            "client_email.required"=>"Please provide your email",
            "client_cpassword.same"=>"Password & Confirm Password doesnot match",
            "client_password.required"=>"Please provide your password",
            "client_dob.before"=>"Must be more than 3 years to registration",
            "client_bg.required"=>"Type your blood group",
            "client_phone.numeric"=>"Phone number must be an integer number",
            "client_address.required"=>"Please provide your address",
                           
        ]

    );

      $client=new Client();
      $client->client_name=$request->client_name;
      $client->client_email=$request->client_email;
      $client->client_password=md5($request->client_password);

      $client->client_dob=$request->client_dob;
      $client->client_gender=$request->client_gender;
      $client->client_bg=$request->client_bg;

      $client->client_phone=$request->client_phone;
      $client->client_address=$request->client_address;
      $client->save();

      return redirect()->route('clientLogin');

    }

    
}