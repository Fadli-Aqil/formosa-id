<?php

namespace App\Http\Controllers;

use App\Models\Investor;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InvestorController extends Controller
{
    public function store(Request $request)
    {
        $query = $request->all();
        $rules = [
            'name' => 'required|unique:investors',
            'category' => 'required',
            'file' => 'required|file'
        ];

        $credentials = Validator::make($query, $rules);

        if ($credentials->fails()) {
            $response['status'] = false;
            $response['message'] = 'Tolong input data yang masih kosong!';
            $response['errors'] = $credentials->errors();

            return inertia('Investor', [
                'response' => $response
            ]);
        }

        $db = Investor::where('name', $request->name)->where('category', $request->category)->first();

        if (!$db) {
            $codec = date('y') . date('m') . date('d') . date('H') . date('i') . date('s');
            $input = new Investor;
            $file = $request->file;
            $file->move(public_path('/assets/files/'), $codec . "_" . $file->getClientOriginalName());
            if (!empty($request->thumbnail)) {
                $filea = $request->thumbnail;
                $filea->move(public_path('/assets/files/thumbnails/'), $codec . "_" . $filea->getClientOriginalName());
                $input->thumbnail = $codec . "_" . $filea->getClientOriginalName();
            } else {
                $input->thumbnail = "comingsoon.jpg";
            }
            $input->name = $request->name;
            $input->category = $request->category;
            $input->file = $codec . "_" . $file->getClientOriginalName();
            $input->save();

            $response['status'] = true;
            $response['message'] = 'Upload file Success!';
            $response['data'] = $query;

            return inertia('Investor', [
                'response' => $response
            ]);
        }

        $response['status'] = false;
        $response['message'] = 'Data Sudah Ada!!';

        return inertia('Investor', [
            'response' => $response
        ]);
    }

    public function destroy(Request $request)
    {
        try{
        $found = Investor::where('category', $request->category)->where('name', $request->name)->firstOrFail();
        if($found){
            unlink(public_path('/assets/files/' . $found->file));
            if($found->thumbnail !== 'comingsoon.jpg') {
                unlink(public_path('/assets/files/thumbnails/' . $found->thumbnail));
            }
            $found->forceDelete();
            $response['status'] = true;
            $response['message'] = 'Data berhasil di hapus!';
    
            return inertia('Investor', [
                'response' => $response
            ]);
        }
        }catch(ModelNotFoundException $e) {
            $response['status'] = false;
            $response['message'] = $e;
            return inertia('Investor', [
                'response' => $response
            ]);
        }
    }
}
