<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\admin\Category;
use Illuminate\Support\Facades\Hash;
use App\Http\Utils\Constants;
use App\Http\Utils\CommonUtils;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $page='category';  
        $data = category::all();
                $comUtils=new CommonUtils();

                foreach($data as $cat)
                {
                    $cat->id=$comUtils->doEncrypt($cat->id);
                }
                
       return view('admin.pages.category.index',compact('data','page'));
    }

    /**
     * Show the form for creating a new resource.
     *s
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $page='addcategory';  
         return view('admin.pages.category.add',compact('page'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat=new category();
        $cat->name =$request->input('name');
        $cat->remarks = $request->input('remarks');
        $result=$cat->save();
        if($result){
            return redirect('category')->with('success','Category Created successfully!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page='editcategory';
        $utils = new CommonUtils;
        $id = $utils->doDecrypt($id);
        $res=category::find($id);
         return view('admin.pages.category.edit',compact('res','page'));
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
        $res=Category::find($id);
        $res->name=$request->name;
        $res->remarks=$request->remarks;
        $result=$res->save();
        if($result)
        {
           return redirect()->route('category.index')
                        ->with('success','Category updated successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $utils = new CommonUtils;
        $id = $utils->doDecrypt($id);
        $res=Category::find($id);
        $result=$res->delete();
        if($result)
        {
            return redirect()->route('category.index')
                        ->with('success','Category deleted successfully');
        }

    }
}
