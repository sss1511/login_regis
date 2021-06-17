<?php

namespace App\Http\Controllers\blogs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blogs;
use Auth;
use Session;
use Guard;

class blogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $blog = blogs::latest()->paginate(5);

        return view('show', compact('blog'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        
            

    }

    // public function showbyid($id){
    //     return view('showbyid');
    // }

   
    public function create()
    {
        return view('addblogs');
    }

    

    public function store(Request $request)
    {
      

        $blog= blogs::create($request->all());

        return view('admindashbord');
    

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        
        $blogs=blogs::where('id',$id)->first();
           
                return view('showbyid',compact('blogs'));
        
          }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit( $id)
    {


        $blogs=blogs::where('id',$id)->first();
           
                return view('update',compact('blogs'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updated(Request $request, $id)
    {
      
        $blog= blogs::find($id);
        $blog->title=$request->title;
        $blog->blogs=$request->blogs;
        $blog->save();
    
        return redirect('admindashbord');

    }

    
    public function delete( $id)
    {
        
       $blog=blogs::where('id', $id)->delete();
      
    //    echo"deleted sucessfully";

       return redirect('admindashbord');
       
    }
}
