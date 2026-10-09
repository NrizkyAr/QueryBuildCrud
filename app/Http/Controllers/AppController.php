<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppController extends Controller
{
    function index(Request $request)
    {
        // $name = 'orang Jawa';
        // return view('/layouts/app',['data' => $name]);
        $title = $request->title;

        $blogs = DB::table('blogs')->where('title', 'LIKE', '%' . $title . '%')->orderBy('id', 'desc')->Paginate(5);
        return view('/layouts.app', ['blogs' => $blogs], ['title' => $title]);
    }

    function add()
    {
        return view('/layouts/blog-add');
    }
    function create(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:blogs|max:255|alpha_dash',
            'description' => 'required',
        ]);

        DB::table('blogs')->insert([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('blogs')->with('success', 'Blogs successfully created!');
    }

    function show($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->first();
        if (!$blog) {
            abort(404);
        }
        return view('/layouts/blog-detail', ['blog' => $blog]);
    }
    function edit($id)
    {
        $blog = DB::table('blogs')->where('id', $id)->first();
        if (!$blog) {
            abort(404);
        }
        return view('/layouts/blog-edit', ['blog' => $blog]);
    }
    function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:blogs,title,' . $id . '|max:255|alpha_dash',
            'description' => 'required',
        ]);
        DB::table('blogs')->where('id', $id)->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        return redirect()->route('blogs')->with('success', 'Blogs successfully Updated !');
    }
    function delete($id)
    {
        DB::table('blogs')->where('id', $id)->delete();
        return redirect()->route('blogs')->with('success', 'Blogs successfully Deleted !');
    }
}
