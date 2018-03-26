<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\blog;
use App\staff;
use App\blogtype;

class StaffBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff_name = Auth::user()->staff->staff_name;
        $blog = blog::all();
        return view('staff.dashboard.blog.index', compact('blog', 'staff_name'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $staff_name = Auth::user()->staff->staff_name;
      $types = blogtype::all();
      return view('staff.dashboard.blog.create', compact('staff_name', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $title = $request->input('blog_title');
      $type = $request->input('type');
      $description = $request->input('blog_content');
      $date = date('d.m.y');
      $slug = strtolower(str_replace(' ', '-', str_replace('&', 'and', $title)));
          blog::create(['blog_title' => $title, 'blog_content' => $description, 'blog_date' => $date, 'slug' =>$slug, 'type' => $type] );
      return redirect('/staff/dashboard/blog');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sample = blog::findOrFail($id);
        $staff_name = Auth::user()->staff->staff_name;
        return view('staff.dashboard.blog.show', compact('sample', 'staff_name'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $blog = blog::findOrFail($id);
      $staff_name = Auth::user()->staff->staff_name;
      $type = blogtype::all();
      return view('staff.dashboard.blog.edit', compact('blog', 'staff_name', 'type'));

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
        $blog = blog::findOrFail($id);
        $title = $request->input('blog_title');
        $type = $request->input('type');
        $slug = $request->input('blog_slug');
        $description = $request->input('description');
        $blog->update(['blog_title' => $title, 'blog_content' => $description,  'slug' =>$slug, 'type' => $type]);
        return redirect('/staff/dashboard/blog');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $blog = blog::find($id);
        $blog->delete();
        return redirect('/staff/dashboard/blog');
    }
}
