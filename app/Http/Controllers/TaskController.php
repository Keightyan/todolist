<?php

namespace App\Http\Controllers;

use App\Models\Folder;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(int $id) {

        $folders = Folder::all();
        $current_folder_id = $id;

        return view('tasks/index', compact('folders', 'current_folder_id'));
    }
}
