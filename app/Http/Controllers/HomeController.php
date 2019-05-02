<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role= Role::create(['name'=>'admin']);
        // //$role= Role::create(['name'=>'reviewer']);
        // $role= Role::create(['name'=>'author']);
        // $permission =Permission::create(['name' => 'write post']);
        // $permission =Permission::create(['name' => 'edit post']);
        // $permission =Permission::create(['name' => 'publish post']);
        // $permission =Permission::create(['name' => 'delete post']);
        // $permission =Permission::create(['name' => 'add comment']);
        $role =Role::findById(3);
        //auth()->user()->assignRole('author');
        return view('home');
    }
}
