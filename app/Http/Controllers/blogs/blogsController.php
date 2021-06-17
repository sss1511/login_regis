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
    public function update(Request $request, $id)
    {
       
        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    




    public function delete($id)
    {
        $product->delete();

        return redirect()->route('show')
            ->with('success', 'Product deleted successfully');
    }
}
