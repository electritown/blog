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
<<<<<<< HEAD
        // $role =Role::findById(1);
        // $permission = permission::findById(2);
        // $role->givePermissionTo($permission);
=======
        $role =Role::findById(3);
>>>>>>> 516ce7d814ae1c8aa956ada20f5bbf361f6ffc28
        //auth()->user()->assignRole('author');
        return view('home');
    }
}
