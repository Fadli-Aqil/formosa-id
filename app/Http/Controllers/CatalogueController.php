<?php

namespace App\Http\Controllers;

use App\Models\Catalogue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class CatalogueController extends Controller
{
    public function store(Request $request)
    {
        $query = $request->all();
        $rules = [
            'folder' => 'required|file',
            'categories' => 'required',
            'flavour' => 'required',
            'description' => 'required',
            'size' => 'required',
            'bpom' => 'required',
            'halal' => 'required',
        ];

        $credentials = Validator::make($query, $rules);

        if ($credentials->fails()) {
            $response['status'] = false;
            $response['message'] = 'Tolong input data yang masih kosong!';
            $response['errors'] = $credentials->errors();

            return inertia('Catalogue', [
                'response' => $response
            ]);
        }
        $found = Catalogue::where('categories', $request->categories)->where('flavour', $request->flavour)->first();
        if (!$found) {
            $str = str_replace(" ", "_", $request->categories);
            $codec = date('y') . date('m') . date('d') . date('H') . date('i') . date('s');
            $file = $request->folder;
            $file->move(public_path('/assets/img/catalogue/' . $str), $codec . "_" . $file->getClientOriginalName());
            $db = new Catalogue;
            $db->folder = $codec . "_" . $file->getClientOriginalName();
            $db->categories = $request->categories;
            $db->flavour = $request->flavour;
            $db->description = $request->description;
            $db->size = $request->size;
            $db->bpom = $request->bpom;
            $db->halal = $request->halal;
            $db->save();
            $response['status'] = true;
            $response['message'] = 'Upload file Success!';
            $response['data'] = $query;

            return inertia('Catalogue', [
                'response' => $response
            ]);
        }
        $response['status'] = false;
        $response['message'] = 'Data Sudah Ada!!';

        return inertia('Catalogue', [
            'response' => $response
        ]);
    }
    public function destroy(Request $request) {
        $found = Catalogue::where('categories', $request->categories)->where('flavour', $request->flavour)->first();
        if($found){
            $categories = str_replace(" ", "_", $found->categories);
            unlink(public_path('/assets/img/catalogue/' . $categories . '/' . $found->folder));
            $found->forceDelete();
            $response['status'] = true;
            $response['message'] = 'Data berhasil di hapus!';
    
            return inertia('Catalogue', [
                'response' => $response
            ]);
        }
    }
}
