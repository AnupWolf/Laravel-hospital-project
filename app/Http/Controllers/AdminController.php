<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Appointment;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor= new Doctor;
        $image =$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;
        
        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;

        $doctor->save();
    
        return redirect()->back()->with('message','Doctor added successfully.');
    }

    public function showappointment()
    {
        $data = appointment::all();
        
        return view('admin.showappointment',compact('data'));
    }
    
    public function approved($id)
    {
        $data=appointment::find($id);

        $data->status='approved';
        $data->save();

        return redirect()->back();
    }

    public function canceled($id)
    {
        $data=appointment::find($id);

        $data->status='canceled';
        $data->save();

        return redirect()->back();
    }

    public function showdoctor()
    {
        $data = Doctor::all();
        return view('admin.showdoctors',compact('data'));
    }

    public function updatedoctor($id)
    {
        $data = Doctor::find($id);
        

        return view('admin.update_doctor',compact('data'));
    }

    public function editdoctor(Request $request,$id)
    {
        $doctor = Doctor::find($id);

        $doctor->name=$request->name;
        $doctor->phone=$request->phone;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;
        
        $image =$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->save();

        return redirect()->back()->with('message','Update done successfully.');
    }

    public function deletedoctor($id)
    {
        $data =Doctor::find($id);
        $data->delete();

        return redirect()->back();
    }
}