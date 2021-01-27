<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ContentTypes;


class ContentTypesController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content_types = ContentTypes::paginate( 20 );
        return view('admin.dashboard.contenttypes.contenttypesList', ['content_types' => $content_types]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dashboard.contenttypes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:1|max:255',                        
        ]);
        $user = auth()->user();
        $content_type = new ContentTypes();
        $content_type->name = $request->input('name');      
        $content_type->save();
        $request->session()->flash('message', 'Successfully created content type');
        return redirect()->route('content_types.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content_type = ContentTypes::find($id);
        return view('admin.dashboard.contenttypes.contenttypesShow', [ 'content_type' => $content_type ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content_type = ContentTypes::find($id);
        return view('admin.dashboard.contenttypes.edit', [ 'content_type' => $content_type ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'name'             => 'required|min:1|max:255',
        ]);
        $content_type = ContentTypes::find($id);
        $content_type->name = $request->input('name');       
        $content_type->save();
        $request->session()->flash('message', 'Successfully edited content type');
        return redirect()->route('content_types.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $content_type = ContentTypes::find($id);
        if($content_type){
            $content_type->delete();
        }
        return redirect()->route('content_types.index');
    }
}
