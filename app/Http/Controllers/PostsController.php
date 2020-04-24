<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function view_singular($id)
    {
        $data = \App\Posts::where('id', $id)->first();
        if($data['id']>0)
        {
            return view('post', ['data'=>$data]);
        }
        else
        {
            return 'not found';
        }
    }
    public function view_all()
    {
        return "You want to view all";
    }
    public function show_post_view()
    {
        return view('new', [
            'tags'=>[
                '',
                'life',
                'family',
                'sports',
                'cars'
            ]
        ]);
    }
    public function process_new_post(Request $re)
    {
        $val = $re->validate([
            'tag' => 'required|max:255',
            'heading' => 'required|max:255',
            'description' => 'required|max:5000'
        ]);
        $c = new \App\Posts(); 
        $c->category = $val['tag'];
        $c->heading = $val['heading'];
        $c->description = $val['description'];
        $c->author = "Joe Shmoe";//will be set with session in the future
        $c->replies = '{}';
        $c->save();
        $id = $c->id;
        return redirect('/posts/new/success/'.$id);

    }
    public function new_post_successful($id)
    {
        return "Find your post <a href='/posts/singular/".$id."'>here</a>";
    }
    public function view_by_tag($tag)
    {
        return 'Search by tag name: '.$tag;
    }
    public function show_update_view($id)
    {
        return 'Updating '.$id;
    }
    public function update_post(Request $re, $id)
    {
        //Check to see if valid
        //update and change in database
        return redirect('/posts/singular/'.$id, ['message', 'Success!']);
    }
    public function delete_post($id)
    {
        //make invisible in DB
        redirect('/dashboard', ['message'=>'Deleted post successfully!']);
        
    }
}
