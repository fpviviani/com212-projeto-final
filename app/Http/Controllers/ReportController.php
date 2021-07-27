<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Classes;
use App\Models\Classroom;
use App\Models\Equipment;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Employee;

class ReportController extends AppBaseController
{
    /**
     * Display general report
     *
     * @return Response
     */
    public function general()
    {
        $classes = Classes::all();
        $classrooms = Classroom::all();
        $equipments = Equipment::all();
        $conditions = [
            'Em funcionamento' => 0,
            'Precisa de reparos' => 0,
            'Fora de uso' => 0
        ];
        foreach($equipments as $equipment){
            $conditions[$equipment->condition]++;
        }
        $students = Student::all();
        $students_sexes = [
            'Masculino' => 0,
            'Feminino' => 0,
            'Não Binário' => 0
        ];
        foreach($students as $student){
            $students_sexes[$student->sex]++;
        }
        $teachers = Teacher::all();
        $teachers_sexes = [
            'Masculino' => 0,
            'Feminino' => 0,
            'Não Binário' => 0
        ];
        foreach($teachers as $teacher){
            $teachers_sexes[$teacher->sex]++;
        }
        $employees = Employee::all();
        $types = [
            'Diretoria' => 0,
            'Secretariado' => 0,
            'Limpeza' => 0
        ];
        foreach($employees as $employee){
            $types[$employee->employee_type]++;
        }
        return view('reports.general')->with('classes', $classes)->with('classrooms', $classrooms)->with('equipments', $equipments)->with('students', $students)->with('teachers', $teachers)->with('employees', $employees)
        ->with('conditions', $conditions)->with('students_sexes', $students_sexes)->with('teachers_sexes', $teachers_sexes)->with('types', $types);
    }
}
