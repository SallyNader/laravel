<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;
use App\Upload;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\update;
use Validator;
class UploadController extends Controller
{
	public function __construct(){
		return $this->middleware('auth');
	}

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


    public function putUpdate(update $request)
    {


        $comment = $request->input('comment');
        $id = $request->input('id');
        $upload = Upload::find($id);

        $file = Input::file('one');
        $filename = $file->getClientOriginalName();
        $path = public_path() . '/upload/';


        if ($file->move($path, $filename)) {


            $upload->update($request->all());
            $upload->save();
        }


        //Upload::update(['comment' => $request->input('comment')]);

        return redirect('upload/all-paths');

    }


    public function getTestU($id, $comment)
    {

        //$comment = Upload::find($id)->where('id', '=', $id)->pluck('comment');
        $comment = Upload::find($id);
        //or but in blade $comment->comment
        return View('uploads.update', compact('comment'));

    }


    //
}
