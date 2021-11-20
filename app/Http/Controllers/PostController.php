<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //to use query builder


class PostController extends Controller
{
    public function index(){
        // non fluent method for db
        //$post = DB::select('select * from posts where id = :id', [1]); // select by id
        //$post = DB::select('select * from posts'); //select all

        $id = 7;
        //fluent method to use query builder
        // $post = DB::table('posts')
        //     ->where('id', $id) //select * from posts where id = $id
        //     ->get();

        // $post = DB::table('posts')
        //     ->select('body') // select body from posts
        //     ->get();
        
        // $post = DB::table('posts')
        //     ->where('id', '<=', '0') // select * from posts where id <= 3
        //     ->get();
        
        $post = DB::table('posts')
            ->where('id', '<', '0') // select * from posts where id <= 0 OR title = 'Mr.'
            ->orWhere('title', 'Mr.') 
            ->get();

        $post = DB::table('posts')
            ->whereBetween('id',[7,9]) // select * from posts where id between 7 and 9
            ->get();

        $post = DB::table('posts')
            ->whereNotNull('title')
            ->get();

        $post = DB::table('posts')
            ->whereNull('body') 
            ->get();

        $post = DB::table('posts')
            ->select('title') // select DISTINCT(title) from posts;
            ->distinct()
            ->get();

        $post = DB::table('posts')
            ->orderBy('id', 'desc') //select * from posts order by id desc
            ->get();

        $post = DB::table('posts')
            ->latest() // similar to order by date desc
            ->get();

        $post = DB::table('posts')
            ->oldest() // similar to order by date asc
            ->get();

        /*
            instead of get() we can use first() to get the first entry data
            we can also use find($id) to find the id or any param if its the data is empty it will result NULL
            we can also use count() to count results instead of get
            */
        $post = DB::table('posts')
            ->min('id'); // get the minimum id

        $post = DB::table('posts')
            ->max('id'); // get the minimum id

        /* min and max are good for pagination to get the first and last id */

        $post = DB::table('posts')
            ->sum('id'); // get the sum of id

        $post = DB::table('posts')
            ->avg('id'); // get the average of id

        /**************** INSERT DATA */

        $post = DB::table('posts')
            ->insert([
                'title' => 'newly inserted data 2' //insert into post (title) values ('newly insersted data 2')
            ]);
        /**************** Update DATA */
        $post = DB::table('posts')
            ->where('body', null)
            ->update([
                'body' => 'super body'
            ]);
        /**************** Delete DATA */
        $post = DB::table('posts')
            ->where('body', null)
            ->delete(); 

        

        
            


        dd($post);
    }
}
