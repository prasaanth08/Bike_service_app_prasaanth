<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;


class ServiceController extends Controller
{

public function add_services(){ //to viwe create service page
    try {
        
        return view('admin.Create_service');
    } catch (Exception $e) {
        return redirect()->back()->withMessage('failed updated');
    }
}
    public function store(Request $request)   //used to store services in detabase
    {
        try {
            $request->validate([
                'topic' => 'required',
                'pic' => 'required|mimes:jpeg,jpg,png,gif|max:2048',
                'descript' => 'required'
            ]);



            $service = new Service;
            $service->topic = $request['topic'];
            if ($request->hasfile('pic')) {
                $file = $request->file('pic');
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('image', $filename);
                $service->pic = $filename;
            }

            $service->description = $request['descript'];
            $service->save();

            return redirect()->back()->withMessage('service successfully created');
        } catch (Exception $e) {
            return redirect()->back()->withMessage('failed updated');
        }
    }


    public function edit_service(string $id)//used to show  service edit form with particular service details
    {
        try {
            $data = Service::where('id', $id)->first();
            return view('admin.edit_service', compact('data'));
        } catch (Exception $e) {
            return redirect()->back()->withMessage('failed updated');
        }
    }


    public function updatestatus(Request $request,  $id) //used  to update  edited service
    {
        try {
            $service = Service::where('id', $id)->first();
            $service->topic = $request['topic'];
            if ($request->hasFile('pic')) {
                $file = $request->file('pic');
                $extension = $file->extension();
                $filename = time() . '.' . $extension;
                $file->move('image', $filename);
                $service->pic = $filename;
            }

            $service->description = $request['descript'];

            $service->update();
            return redirect()->back()->withMessage('successfully updated');
        } catch (Exception $e) {
            return redirect()->back()->withMessage('failed updated');
        }
    }

    public function destroy(string $id) // used to destroy particular service 
    {
        try {
            $service = Service::find($id);
            $service->delete();
            return redirect()->back()->withMessage('service deleted successfully ');
        } catch (Exception $e) {
            return redirect()->back()->withMessage('failed updated');
        }
    }
}
