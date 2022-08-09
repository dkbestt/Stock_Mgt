<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class WorkerController extends Controller
{
    public function viewWorker()
    {
        $worker = Worker::get();
        // both line will be worked for show data in table(view file)
        // return view('worker.view_worker', compact('worker'));
        return view('worker.view_worker')->with('worker', $worker);
    }

    public function addWorker()
    {
        return view('worker.add_worker');
    }

    public function createWorker(Request $request)
    {
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile_no' => 'required|min:10',
        ]);
        if ($validator->fails()) {
            return $validator->errors()->first();
        }
        $check = Worker::create($data);
        // dd($check);
        if ($check) {
            return redirect("/worker")->withSuccess('Great! You have Successfully add');
        } else {
            return redirect("/worker")->withSuccess('Something Gone Wrong...!!!');
        }
    }

    public function show(Worker $worker, $id)
    {
        $single_worker = Worker::where('id', $id)->first();
        return view('worker.show_worker')->with('single_worker', $single_worker);
    }

    public function edit(Worker $worker, $id)
    {
        $edit_worker = Worker::where('id', $id)->first();
        return view("worker.edit_worker")->with('edit_worker', $edit_worker);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile_no' => 'required',
        ]);
        $update = Worker::where('id', $id)->update([
            "name" => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
        ]);

        if ($update) {
            return redirect('/worker')
                ->with('success', 'worker updated successfully');
        }
    }


    public function destroy(Worker $worker, $id)
    {
        $delete_worker = Worker::where('id', $id)->delete();
        if ($delete_worker) {
            return redirect('/worker')
                ->with('success', 'worker deleted successfully');
        }
    }
}
