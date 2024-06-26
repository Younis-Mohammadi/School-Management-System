<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Hash;
use Auth;
use Str;

class StudentController extends Controller
{
    public function list()
    {
        $data['getRecord'] = User::getStudent();
        $data['$header_title'] = "Student List";
        return view('admin.student.list', $data);
    }
    public function add()
    {
        $data['getClass'] = ClassModel::getClass();
        $data['$header_title'] = 'Add New Student';
        return view('admin.student.add', $data);
    }

    public function insert(Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users',
            'height' => 'max:10',
            'weight' => 'max:10',
            'blood_group' => 'max:10',
            'admission_number' => 'max:15',
            'roll_number' => 'max:15',
            'caste' => 'max:50',
            'Religion' => 'max:50',
            'mobile_number' => 'max:15|min:8',
        ]);

        $student = new User;
        $student->name = trim($request->name);
        $student->last_name = trim($request->last_name);
        $student->admission_number = trim($request->admission_number);
        $student->roll_number = trim($request->roll_number);
        $student->class_id = trim($request->class_id);
        $student->gender = trim($request->gender);
        if (!empty($request->date_of_birth)) {
            $student->date_of_birth = trim($request->date_of_birth);
        }
        $student->caste = trim($request->caste);
        $student->Religion = trim($request->Religion);
        $student->mobile_number = trim($request->mobile_number);
        if (!empty($request->admission_date)) {
            $student->admission_date = trim($request->admission_date);
        }
        if ($request->hasFile('profile_pic')) {
            $file = $request->file('profile_pic');
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/profile'), $filename);
            $student->profile_pic = $filename;
        }
        $student->blood_group = trim($request->blood_group);
        $student->height = trim($request->height);
        $student->weight = trim($request->weight);
        $student->status = trim($request->status);
        $student->email = trim($request->email);
        $student->password = Hash::make($request->password);
        $student->user_type = 3;
        $student->save();
        return redirect('admin/student/list')->with('success', 'Student Created Successfully!');
    }

    public function edit($id)
    {
        $data['getRecord'] = User::getSingle($id);
        if (!empty($data['getRecord'])) {
            $data['getClass'] = ClassModel::getClass();
            $data['$header_title'] = 'Edit Student';
            return view('admin.student.edit', $data);
        } else {
            // abort('404');
            $route = "admin/student/list";
            $part = "student";
            return view('page404', compact('route', 'part'));
        }
    }

    public function update($id, Request $request)
    {
        request()->validate([
            'email' => 'required|email|unique:users,email,' . $id,
            'height' => 'max:10',
            'weight' => 'max:10',
            'blood_group' => 'max:10',
            'admission_number' => 'max:15',
            'roll_number' => 'max:15',
            'caste' => 'max:50',
            'Religion' => 'max:50',
            'mobile_number' => 'max:15|min:8'
        ]);

        $student = User::getSingle($id);
        $student->name = trim($request->name);
        $student->last_name = trim($request->last_name);
        $student->admission_number = trim($request->admission_number);
        $student->roll_number = trim($request->roll_number);
        $student->class_id = trim($request->class_id);
        $student->gender = trim($request->gender);
        if (!empty($request->date_of_birth)) {
            $student->date_of_birth = trim($request->date_of_birth);
        }
        $student->caste = trim($request->caste);
        $student->Religion = trim($request->Religion);
        $student->mobile_number = trim($request->mobile_number);
        if (!empty($request->admission_date)) {
            $student->admission_date = trim($request->admission_date);
        }
        if ($request->hasFile('profile_pic')) {
            if (!empty($student->profile_pic)) {
                unlink('upload/profile/' . $student->profile_pic);
            }
            $file = $request->file('profile_pic');
            $randomStr = Str::random(20);
            $filename = strtolower($randomStr) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/profile'), $filename);
            $student->profile_pic = $filename;
        }
        $student->blood_group = trim($request->blood_group);
        $student->height = trim($request->height);
        $student->weight = trim($request->weight);
        $student->status = trim($request->status);
        $student->email = trim($request->email);
        if (!empty($request->password)) {
            $student->password = Hash::make($request->password);
        }
        $student->save();
        return redirect('admin/student/list')->with('success', 'Student Updated Successfully!');
    }

    public function delete($id)
    {
        $getRecord = User::getSingle($id);
        if (!empty($getRecord)) {
            $getRecord->is_delete = 1;
            $getRecord->save();
            return redirect()->back()->with('success', 'Student Deleted Successfully');
        } else {
            abort(404);
        }
    }

    // teacher side work 
    public function MyStudent()
    {
        $data['getRecord'] = User::getTeacherStudent(Auth::user()->id);
        $data['$header_title'] = 'My Student List';
        return view('teacher/my_student', $data);
    }
}
