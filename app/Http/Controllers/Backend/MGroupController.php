<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MGroup;
use Illuminate\Http\Request;

class MGroupController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:mgroup-list|mgroup-create|mgroup-edit|mgroup-delete', ['only' => ['index','show']]);
         $this->middleware('permission:mgroup-create', ['only' => ['create','store']]);
         $this->middleware('permission:mgroup-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:mgroup-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $mgroups = MGroup::latest()->paginate(5);
        return view('admin.mgroups.index',compact('mgroups'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.mgroups.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'mg_name' => 'required',
            'mg_description' => 'required',
        ]);

        MGroup::create($request->all());

        return redirect()->route('mgroups.index')
                        ->with('success','Media Group created successfully.');
    }

    public function show(MGroup $mgroups)
    {
        return view('admin.mgroups.show',compact('mgroups'));
    }

    public function edit(MGroup $mgroups)
    {
        return view('admin.mgroups.edit',compact('mgroups'));
    }

    public function update(Request $request, MGroup $mgroups)
    {
         request()->validate([
            'mg_name' => 'required',
            'mg_description' => 'required',
        ]);

        $mgroups->update($request->all());

        return redirect()->route('mgroups.index')
                        ->with('success','Media Group updated successfully');
    }

    public function destroy(MGroup $mgroups)
    {
        $mgroups->delete();

        return redirect()->route('mgroups.index')
                        ->with('success','Media Group deleted successfully');
    }

}
