<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

use App\Models\Doctor;
use App\Notifications\SendEmailNotification;

use Illuminate\Support\Facades\Notification;


class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;


        $doctor->name = $request->name;

        $doctor->phone = $request->phone;

        $doctor->specialty = $request->specialty;

        $doctor->room = $request->room;

        $doctor->save();

        return redirect()->back()->with('message', 'Doctor save successfully');
    }

    public function  showappointments()
    {

        $data = appointment::all();

        return view('admin.showappointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status = "approved";
        $data->save();
        return  redirect()->back();
    }

    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status = "canceled";
        $data->save();
        return  redirect()->back();
    }


    public function showdoctors()
    {
        $data = doctor::all();

        return view('admin.showdoctor', compact('data'));
    }
    public function deletedoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updatedoctor($id)
    {
        $data = doctor::find($id);

        return  view('admin.update_doctor', compact('data'));
    }

    public function editdoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->number;
        $doctor->specialty = $request->specialty;
        $doctor->room = $request->room;

        $doctor->save();
        return redirect()->back()->with('message', 'Doctor update successfully');
    }

    public function emailview($id)
    {
        $data = appointment::find($id);
        return view('admin.email_view', compact('data'));
    }

    public function sendemail(Request $request, $id)
    {
        $data = appointment::find($id);
        $details = [
            'greeting' => $request->greeting,

            'body' => $request->greeting,

            'actiontext' => $request->actiontext,

            'actionurl' => $request->actionurl,

            'endpart' => $request->endpart
        ];

        Notification::send($data, new SendEmailNotification($details));

        return redirect()->back();    }
}
