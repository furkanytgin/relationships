<?php

use Illuminate\Support\Facades\Route;

use App\Models\User;
use App\Models\Task;
use App\Models\Post;
use App\Models\Project;
use App\Models\Video;
use App\Models\Comment;
use App\Models\Tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

Route::get('/', function () {



    $tag = Tag::find(1);

    $tag->videos()->create(['title' => 'Video 2']);
    dd($tag->videos);
    // $video = Video::create([
    //     'title' => 'Python'
    // ]);

    // $tag = Tag::find(1);

    // $video->tags()->attach($tag); 



    // $video->tags()->create([
    //     'name' => 'Yazılım dilleri'
    // ]);


    // $post = Post::find(1);

    // dd($post->tags);
    // $tag = Tag::create([
    //     'name' => 'DJANGO'
    // ]);

    // $post->tags()->attach($tag);


    //  $post = Post::create([
    //      'user_id' => 1,
    //      'title' => 'Örnek Many to Many post Title1'
    //  ]); 

    //  $post->tags() ->create([
    //     'name' => 'LARAVEl'
    //  ]);



    // $post = Video::find(1);

    // dd($post->comment);

    // $video = Video::create([
    //     'title' => 'video başlığı 1'
    // ]);
   
    // $video = Video::find(1);
    // $video->comments()->create([
    //     'user_id' => 1,
    //     'body' => 'video için yorum 2'
    // ]);

    // dd($video->comments);

    // $post = Post::find(1);
    // $post->comments()->create([
    //     'user_id' => 1,
    //     'body' => '2. yorum for post1'
    // ]);
    // dd($post->comments);
    
    // $user = User::create([
    //     'name' => 'Ece',
    //     'email' => 'ece@gmail.com',
    //     'password' => Hash::make('12345678')
    // ]);

    

    // $post->comments()->create([
    //     'user_id' => $user->id,
    //     'body' => 'comment for post'
    // ]);
     
    return view('welcome');
});

Route::get('/user', function () {

    $users = User::all();

    // User::create([
    //     'name'  => 'Furkan',
    //     'email' => 'furkan@gmail.com',
    //     'password' => Hash::make('123456789')
    // ]);

    return view('index', compact('users'));
   
});

Route::get('/posts', function() {
    
    // $tag = \App\Models\Tag::first();

    // $post = \App\Models\Post::with('tags')->find(1);

    
    

    
    //  \App\Models\Tag::create([
    //      'name' => 'Django',
    //  ]);

    //     \App\Models\Post::create([
    //      'title' => 'post title 2'
    // ]); 

//    \App\Models\Tag::create([
//          'name' => 'Javascript',

//    ]);
         
   $post = \App\Models\Post::first();
    $post->tags()->sync([
     2 => [
         'status' => 'onayli approved'
     ]
     ]);

    // dd($post->tags->first()->pivot->status);
//    $post->tags()->attach(1);  
   
   $posts = \App\Models\Post::with(['user', 'tags'])->get();

    return view('posts', compact('posts'));


});

Route::get('/tags', function (){

    $tags = \App\Models\Tag::with('posts')->get();

    return view('tags', compact('tags'));
    

});

Route::get('/projects',  function () {

   
    $project = Project::find(1);

    return $project->task;
    

    // $task1 = Task::create([
    //     'title' => 'TASK 1 FOR HASMANY THROUGH',
    //     'user_id' => 1
    // ]);


    // $task2 = Task::create([
    //     'title' => 'TASK 2 FOR HASMANY THROUGH ',
    //     'user_id' => 1
    // ]);
    
    // $task2 = Task::create([
    //     'title' => 'TASK 3 FOR HASMANY THROUGH ',
    //     'user_id' => 2
    // ]);

    // $task2 = Task::create([
    //     'title' => 'TASK 4 FOR HASMANY THROUGH ',
    //     'user_id' => 3
    // ]);

   
   
   
   
    // $usr = User::find(1);

    // return $usr->projects;

   

    // $project = Project::find(1);

    //  return $project->users ;
    
    
    
    
    
    
    
    
    
     // $project1 = Project::create([
    //     'title' => 'Has Many Through test1'
    // ]);


    // $project2 = Project::create([
    //     'title' => 'Has Many Through test2'
    // ]);


    // $user1 = User::create([
    //     'name' => 'User Tablosu 1',
    //     'email' => 'furkan@gmail.com',
    //     'password' => Hash::make('12345678')
    // ]);

    // $user2 = User::create([
    //     'name' => 'User Tablosu 2',
    //     'email' => 'okan@gmail.com',
    //     'password' => Hash::make('12345678')
    // ]);

    // $user3 = User::create([
    //     'name' => 'User Tablosu 3',
    //     'email' => 'tuğkan@gmail.com',
    //     'password' => Hash::make('12345678')
    // ]);
    


    // $project1->users()->attach($user1);
    // $project1->users()->attach($user3);
    // $project1->users()->attach($user2);

    // $project2->users()->attach($user1);
    // $project2->users()->attach($user3);





    
    
    
    
    // \App\Models\Project::create([
    //     'title' => 'Relationships'
    // ]);

    // $project = Project::create([
    //     'title' => 'Project B'
    // ]);

    // $user1 = User::create([
    //     'name' => 'user 3',
    //     'email' => 'user3@gmail.com',
    //     'password' => Hash::make('12345678'),
    //     'project_id' => $project->id,
    // ]);

    // $user2 = User::create([
    //     'name' => 'user 4',
    //     'email' => 'user4@gmail.com',
    //     'password' => Hash::make('12345678'),
    //     'project_id' => $project->id,
    // ]);

    // $user5 = User::create([
    //     'name' => 'user 5',
    //     'email' => 'user5@gmail.com',
    //     'password' => Hash::make('12345678'),
    //     'project_id' => $project->id,
    // ]);

    

    // $task1 = Task::create([
    //     'title' => 'Task 4 for project B by user3',
    //     'user_id' => $user1 ->id,
    // ]);


    // $task2 = Task::create([
    //     'title' => 'Task 5 for porject B by user3 ',
    //     'user_id' => $user1->id,
    // ]);


    // $task3 = Task::create([
    //     'title' => 'Task 6  for porject B by user4 ',
    //     'user_id' => $user2->id,
    // ]);

    // $task1 = Task::create([
    //     'title' => 'Task 6  for porject B by user4 ',
    //     'user_id' => $user5->id,
    // ]);
});
