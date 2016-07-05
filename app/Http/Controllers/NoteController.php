<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Note;
use App\Page;
use DB;
class NoteController extends Controller
{


    public function add(Request $request)
    {
        $note = $request->input('note');
        $no = $request->input('page');


        //Page::create(array('title' => $no));
        $page = Page::firstOrCreate(array('title' => $no));

        $id_page = $page->id;

        //Note::create(array('body' => $note,'page_id'=>$id_page));
        $note = Note::create(array('body' => $note, 'page_id' => $id_page));
        $id_note = $note->id;

        //DB::table('page_note')->insert(['page_id' => $id_page, 'note_id' => $id_note]);


        return "Done";
    }


    public function show($id)
    {

        $page = Page::find($id)->notes()->get();
        //
        $title = Page::find($id);
        return view('notes.show', compact('page', 'title'));

    }


    public function showAll()
    {

        $notes = Note::with('page')->get();


        return view('notes.showall', compact('notes'));

    }


}
