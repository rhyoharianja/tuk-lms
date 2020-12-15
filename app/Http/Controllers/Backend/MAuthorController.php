<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MAuthor;

class MAuthorController extends Controller
{
    public function index() {
        $mauthors = MAuthor::sortable()->latest()->paginate(10);
        return view('admin.mauthors.index', compact('mauthors'))->with('i', (request()->input('page', 1) - 1) * 10);
    }

    public function create() {
        $status = array(array('value' => null, 'text' => 'Tidak Aktif'), array('value' => 1, 'text' => 'Aktif'));
        return view('admin.mauthors.create', compact('status'));
    }

    public function store(Request $request) {
        request()->validate([
            'au_fullname' => 'required',
            'au_nationality' => 'required',
            'au_synopsis' => 'required'
        ]);

        MAuthor::create($request->all());

        return redirect()->route('mauthors.index')
                         ->with('success','Book Author created successfully.');
    }

    public function show(MAuthor $mauthor) {
        $status = array(array('value' => null, 'text' => 'Tidak Aktif'), array('value' => 1, 'text' => 'Aktif'));
        return view('admin.mauthors.show', compact('mauthor', 'status'));
    }

    public function edit(MAuthor $mauthor) {
        $status = array(array('value' => null, 'text' => 'Tidak Aktif'), array('value' => 1, 'text' => 'Aktif'));
        return view('admin.mauthors.edit', compact('mauthor', 'status'));
    }

    public function update(Request $request, MAuthor $mauthor) {
        request()->validate([
            'au_fullname' => 'required',
            'au_nationality' => 'required',
            'au_synopsis' => 'required'
        ]);

        $mauthor->update($request->all());

        return redirect()->route('mauthors.index')
                         ->with('success','Book Author Update successfully.');
    }

    public function destroy(MAuthor $mauthor)
    {
        $mauthor->delete();

        return redirect()->route('mauthors.index')
                        ->with('success','Book Author deleted successfully');
    }
}
