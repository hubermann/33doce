<?php

namespace App\Http\Controllers;
use Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use Mail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders'] = Slider::all();
        $data['categories'] = Category::all();
        $data['outstandings'] = Product::where('outstanding', 1)->get();
        $data['products'] = Product::where('outstanding', 0)->take(9)->get();

        #return view('frontend_common.home', $data );
        return view('coming_soon');
    }




    public function process_contact()
    {
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'mensaje' => 'required',
        ];

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
            return redirect('/'.'#contacto')->withErrors($validator)->withInput();
        }


        #ContactUS::create($request->all());
        $name       = Input::get('name');
        $email      = Input::get('email');
        $mensaje    = Input::get('mensaje');

        Mail::send(

            'email',
             array(
                 'name'       => $name,
                 'email'      => $email,
                 'mensaje'    => $mensaje
             ),

            function ($mensaje) {
                $mensaje->from('info@cocinnovation.com');
                $mensaje->to('info@cocinnovation.com', 'Admin')->subject('Website Feedback');
            }

        );

        return redirect('/enviado')->with('success', 'Thank you! Your mensaje has been sent successfully.');
    }




}
