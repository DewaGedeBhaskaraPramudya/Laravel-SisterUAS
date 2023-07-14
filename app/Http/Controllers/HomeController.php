<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Kelas;
use App\Exports\StudentExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Imports\StudentImport;

class HomeController extends Controller
{
    //
    public function index(){
        return view('backpage.SData', [
            "student" => Student::all()
        ]);
    }
    public function create(){
        $model = new Student;
        return view('backpage.create', compact(
            'model'
        ));
    }
    public function store(Request $request){
        $model = new Student;
        $model->studentID = $request->studentID;
        $model->name = $request->name;
        $model->address = $request->address;
        $model->gpa = $request->gpa;
        $model->classID = $request->classID;
        $model->save();

        return redirect('SData');
    }
    public function edit($id)
    {
        $model = Student::find($id);
        return view('backpage.edit', compact(
            'model'
        ));
    }
    public function update(Request $request, $id){
        
        $model = Student::find($id);
        $model->studentID = $request->studentID;
        $model->name = $request->name;
        $model->address = $request->address;
        $model->gpa = $request->gpa;
        $model->classID = $request->classID;
        $model->save();

        return redirect('SData');
    }
    public function destroy($id){
        $model = Student::find($id);
        $model ->delete();
        return redirect('SData');
    }
    public function studentExport(){
        return Excel::download(new StudentExport, 'student.xlsx');
    }
    public function ImportV(){
        return view('backpage.Import'); 
    }
    public function studentImportExcel(Request $request){
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('StdnData', $namaFile);
        Excel::Import(new StudentImport, public_path('/StdnData/'.$namaFile));
        return redirect('SData');
    }
}
