<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\ClassSubjectModel;
use App\Models\WeekModel;
use App\Models\ClassSubjectTimetable;
class ClassTimetableController extends Controller
{
    public function list(Request $request)
    {
        $data['getClass'] = ClassModel::getClass();
        if(!empty($request->class_id)){
            $data['getSubject'] = ClassSubjectModel::mySubject($request->class_id);
        }
        $getWeek = (new WeekModel())->getRecord();

        // dd($getWeek);
        $week = array();
        foreach ($getWeek as $value) {
            $dataW = array();
            $dataW['week_id'] = $value->week;
            $dataW['week_name'] = $value->name;
            $dataW['room_number'] = $value->room_number;
            if(!empty($request->class_id) && !empty($request->subject_id)){
                $classSubject = ClassSubjectTimetable::getRecordClassSubject($request->class_id, $request->subject_id, $value->week);
                if(!empty($classSubject))
                {
                    $dataW['start_time'] = $classSubject->start_time;
                    $dataW['end_time'] = $classSubject->end_time;
                    $dataW['room_number'] = $classSubject->room_number;
                }
                else
                {
                    $dataW['start_time'] = '';
                    $dataW['end_time'] = '';
                    $dataW['room_number'] = '';
                }
            }
            else{
                $dataW['start_time'] = '';
                $dataW['end_time'] = '';
                $dataW['room_number'] = '';
            }
            $week[] = $dataW;
        }
        $data['week'] = $week;
        $data['header_title'] = "Class Timetable";
        return view('admin.class_timetable.list', $data);
    }
    public function get_subject(Request $request)
    {
        $getSubject = ClassSubjectModel::mySubject($request->class_id);
        $html = '<option value="">Select Subject</option>';
        foreach ($getSubject as $value) {
            $html.= '<option value="'. $value->subject_id. '">'. $value->subject_name. '</option>';
        }
        $json['html'] = $html;
        echo json_encode($json);
    }
    public function insert_update(Request $request)
    {
        ClassSubjectTimetable::where('class_id', '=' , $request->class_id)
                            ->where('subject_id', '=', $request->subject_id)
                            ->delete();
        foreach($request->timetable as $timetable){
            if(!empty($timetable['week_id']) && !empty($timetable['start_time']) && !empty($timetable['end_time']) && !empty($timetable['room_number']))
            {
                $save = new ClassSubjectTimetable;
                $save->class_id = $request->class_id;
                $save->subject_id = $request->subject_id;
                $save->week_id = $timetable['week_id'];
                $save->start_time = $timetable['start_time'];
                $save->end_time = $timetable['end_time'];
                $save->room_number = $timetable['room_number'];
                $save->save();
            }
        }
        return redirect()->back()->with('success', "Class Timetable Successfully Save");
    }
}