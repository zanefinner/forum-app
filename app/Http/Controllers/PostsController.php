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
        return 'send back a template';
    }
    public function process_new_post()
    {
        /*Process*/$success = true;//or false
        if($success)
        {
            //store
            return redirect('/posts/new/success');
        }
        else
        {
            return redirect('posts/new/false');
        }
    }
    public function new_post_successful($successful)
    {
        if($successful){
            return 'Posted!';
        }else{
            $error = '';
            redirect('/posts/new/', ['error', $error]);
        }
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
