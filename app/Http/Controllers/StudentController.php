<?php

namespace App\Http\Controllers;

use App\DataTables\StudentDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Repositories\StudentRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\Classes;

class StudentController extends AppBaseController
{
    /** @var  StudentRepository */
    private $studentRepository;

    public function __construct(StudentRepository $studentRepo)
    {
        $this->studentRepository = $studentRepo;
    }

    /**
     * Display a listing of the Student.
     *
     * @param StudentDataTable $studentDataTable
     * @return Response
     */
    public function index(StudentDataTable $studentDataTable)
    {
        return $studentDataTable->render('students.index');
    }

    /**
     * Show the form for creating a new Student.
     *
     * @return Response
     */
    public function create()
    {
        $classes = Classes::all()->pluck('year', 'id')->toArray();
        foreach($classes as $id => $year){
            $class = Classes::find($id);
            if($class->designation){
                $classes[$id] = $year . ' - ' . $class->designation;
            }
        }
        $no_class = [
            null => 'Nenhuma turma.'
        ];
        array_splice($classes, 0, 0, $no_class); 
        $sexes = [
            'Masculino' => 'Masculino',
            'Feminino' => 'Feminino',
            'Não Binário' => 'Não Binário'
        ];
        return view('students.create', compact('classes', 'sexes'));
    }

    /**
     * Store a newly created Student in storage.
     *
     * @param CreateStudentRequest $request
     *
     * @return Response
     */
    public function store(CreateStudentRequest $request)
    {
        $input = $request->all();
        if($input['class_id'] == 0){
            $input['class_id'] = null; 
        }
        $student = $this->studentRepository->create($input);

        Flash::success('Student saved successfully.');

        return redirect(route('students.index'));
    }

    /**
     * Display the specified Student.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $student = $this->studentRepository->find($id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('students.index'));
        }

        return view('students.show')->with('student', $student);
    }

    /**
     * Show the form for editing the specified Student.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $student = $this->studentRepository->find($id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('students.index'));
        }
        $classes = Classes::all()->pluck('year', 'id')->toArray();
        foreach($classes as $id => $year){
            $class = Classes::find($id);
            if($class->designation){
                $classes[$id] = $year . ' - ' . $class->designation;
            }
        }
        $no_class = [
            null => 'Nenhuma turma.'
        ];
        array_splice($classes, 0, 0, $no_class); 
        $sexes = [
            'Masculino' => 'Masculino',
            'Feminino' => 'Feminino',
            'Não Binário' => 'Não Binário'
        ];
        return view('students.edit', compact('sexes', 'classes'))->with('student', $student);
    }

    /**
     * Update the specified Student in storage.
     *
     * @param  int              $id
     * @param UpdateStudentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStudentRequest $request)
    {
        $student = $this->studentRepository->find($id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('students.index'));
        }

        $student = $this->studentRepository->update($request->all(), $id);

        Flash::success('Student updated successfully.');

        return redirect(route('students.index'));
    }

    /**
     * Remove the specified Student from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $student = $this->studentRepository->find($id);

        if (empty($student)) {
            Flash::error('Student not found');

            return redirect(route('students.index'));
        }

        $this->studentRepository->delete($id);

        Flash::success('Student deleted successfully.');

        return redirect(route('students.index'));
    }
}
