<?php
namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Hash;
use Str;
use Illuminate\Http\Request;
class ParentController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getParent();
        $data['$header_title'] = "Parent List";
        return view('admin.parent.list', $data);
    }
    public function add()
    {
        $data['$header_title'] = 'Add New Parent';
        return view('admin.parent.add', $data);
    }
}