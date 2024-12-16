<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programmer;
use App\Models\Project;
use App\Models\Book;
use App\Models\Role;
use App\Models\User;


class EloquentController extends Controller
{
    //1:1
    public function addProgrammer()
    {
        $project = new Project();
        $project->name = 'Project by Programmer-2';
        
        $programmer = new Programmer();
        $programmer->name = 'Pony';
        $programmer->email = 'pony@test.com';
        $programmer->save();

        $programmer->project()->save($project);
        return "Data saved successfully.";
    }
    public function ProjectByProgrammerId($id)
    {
        $project = Programmer::find($id)->project;
        return $project;
    }
    //1:M
    public function addBook($id)
    {
        $programmer = Programmer::find($id);
        $book = new Book();
        $book->book = 'PHP';
        $programmer->book()->save($book);

        return "Book saved successfully.";
    }
    public function BookByProgrammer($id)
    {
        $book = Programmer::find($id)->book;
        return $book;
    }
    //M:M
    public function addRole()
    {
        $roles = [
            ['role'=>'Aamin'],
            ['role'=>'Project Manager'],
            ['role'=>'Programmer'],
            ['role'=>'System Analysis'],
            ['role'=>'Tester'],
        ];

        Role::insert($roles);
        return "Role saved successfully!!!";
    }
    public function addUser()
    {
        $user = new User();
        $user->name = 'Pattric';
        $user->email = 'pattric@test.com';
        $user->password = encrypt('password');
        $user->save();

        $roleArray = [1,2,3,4,5];
        $user->roles()->attach($roleArray);
        
        return "User saved successfully!!!";
    }
    //get data
    public function RoleByUser($id)
    {
        $user = User::find($id);
        $roles = $user->roles;

        return $roles;
    }
    public function UserByRole($id)
    {
        $role = Role::find($id);
        $user = $role->users;

        return $user;
    }
}
