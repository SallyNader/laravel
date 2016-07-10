<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Upload;
class UploadController extends Controller
{

    public function postUpload(Request $request)
    {
        $comment = $request->input('comment');
        $files_name = '';
        foreach ($request->File('multi') as $file) {

            $path = public_path() . '/upload';
            $filename = time() . rand(11111, 00000) . '.' . $file->
                getClientOriginalExtension();
            if ($file->move($path, $filename)) {
                $files_name .= 'uploaded file' . $filename . "<br/>";
                Upload::create(['comment' => $comment, 'path' => $filename]);
            }

        }


        return $files_name;

    }


    public function getIndex()
    {


        return view('uploads.photos');
    }


    public function getAllPaths()
    {
        $images = Upload::all();
        return view('uploads.alluploads', compact('images'));
    }


    public function getDeletePath($path_id)
    {
        $path_id = Upload::find($path_id);
        $path_id->delete();
        return redirect('upload/trashed-paths');


    }


    public function getTrashedPaths()
    {


        $trashed = Upload::withTrashed()->get();
        return view('uploads.trashedview', compact('trashed'));
    }


    public function postRestore($id)
    {


        $path = Upload::onlyTrashed()->find($id);

        $path->restore();

        return redirect('upload/trashed-paths');


    }


    public function postForceDelete($id)
    {

        $path = Upload::onlyTrashed()->find($id);
        $path->forceDelete();
        return redirect('upload/trashed-paths');

    }

    public function getUpdatePath($id, $comment)
    {


        return view('uploads.update');
    }


    public function putUpdate(Request $request)
    {


        $comment = $request->input('comment');

        foreach ($request->File('multi') as $file) {

            $path = public_path() . '/upload';
            $filename = time() . rand(11111, 00000) . '.' . $file->
                getClientOriginalExtension();
            if ($file->move($path, $filename)) {
                $files_name .= 'uploaded file' . $filename . "<br/>";
                Upload::update(['comment' => $comment, 'path' => $filename]);
            }

        }
        //Upload::update(['comment' => $request->input('comment')]);

        return view('uploads/all-paths');
    }


    //
}
