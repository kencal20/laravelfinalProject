<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appointment;

class HomeController extends Controller
{
    public function redirect()
    {
        if (Auth::id()) {

            if (Auth::user()->usertype == 'user') {

                return view('user.home');
            } else {
                return view('admin.home');
            }
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        $doctors = Doctor::all(); // Fetch the list of doctors

        return view('user.home', compact('doctors')); // Pass the $doctors variable to the doctors view
    }


    public function showappointment(Request $request)
    {
        $data = new appointment;

        $data->name = $request->name;
        $data->email = $request->email;
        $data->date = $request->date;
        $data->number = $request->number;
        $data->message = $request->message;
        $data->doctor = $request->doctor;
        $data->status = 'In progress';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();

        return redirect()->back()->with('message', "Appointment request successful .We will contact you soon");
    }

    public function my_appointments()
    {
        if (Auth::id()) {

            $userid = Auth::user()->id;

            $appoint = appointment::where('user_id', $userid)->get();


            return view('user.my_appointments', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appointment($id)
    {

        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }
}
