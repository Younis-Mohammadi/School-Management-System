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

    public function insert(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users',
            'address' => 'max:255',
            'occupation' => 'max:255'
        ]);

        $student = new User;
        $student->name = trim($request->name);
        $student->last_name = trim($request->last_name);
        $student->gender = trim($request->gender);
        $student->occupation = trim($request->occupation);
        $student->address = trim($request->address);
        $student->mobile_number = trim($request->mobile_number);
        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/profile'), $filename);
            $student->profile_pic = $filename;
        }
        $student->status = trim($request->status);
        $student->email = trim($request->email);
        $student->password = Hash::make($request->password);
        $student->user_type = 4;
        $student->save();
        return redirect('admin/parent/list')->with('success', 'Parent Created Successfully!');
    }

    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['$header_title'] = 'Edit Parent';
            return view('admin.parent.edit', $data);
        } else {
            $route = "admin/parent/list";
            $part = "Parent";
            return view('page404', compact('route', 'part'));
        }
    }

    public function update($id, Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users,email,' . $id,
            'address' => 'max:255',
            'occupation' => 'max:255'
        ]);

        $parent = User::getSingle($id);
        $parent->name = trim($request->name);
        $parent->last_name = trim($request->last_name);
        $parent->gender = trim($request->gender);
        $parent->occupation = trim($request->occupation);
        $parent->address = trim($request->address);
        $parent->mobile_number = trim($request->mobile_number);
        if ($request->hasFile('profile_pic')) {
            if (!empty($parent->profile_pic)) {
                unlink('upload/profile/' . $parent->profile_pic);
            }
            $file = $request->file('profile_pic');
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/profile'), $filename);
            $parent->profile_pic = $filename;
        }
        $parent->status = trim($request->status);
        $parent->email = trim($request->email);
        if (!empty($request->password)) {
            $parent->password = Hash::make($request->password);
        }
        $parent->save();
        return redirect('admin/parent/list')->with('success', 'Parent Updated Successfully!');
    }
    public function delete($id)
    {
        $getRecord = User::getSingle($id);
        if (!empty($getRecord)) {
            $getRecord->is_delete = 1;
            $getRecord->save();
            return redirect()->back()->with('success', 'Parent Deleted Successfully');
        } else {
            $route = "admin/parent/list";
            $part = "Parent";
            return view('page404', compact('route', 'part'));
        }
    }

    public function myStudent($id, Request $request)
    {
        $data['parent_id'] = $id;
        $data['getSearchStudent'] = User::getSearchStudent($request);
        $data['header_title'] = "Parent Student List";
        return view('admin.parent.my_student', $data);
    }

    public function AssignStudentParent($student_id, $parent_id)
    {
        $student = User::getSingle($student_id);
        $student->parent_id = $parent_id;
        $student->save();
        return redirect()->back()->with('success', 'Student Assigned Successfully');
    }
}