<?php

namespace App\Http\Controllers;

use App\DataTables\TeacherDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTeacherRequest;
use App\Http\Requests\UpdateTeacherRequest;
use App\Repositories\TeacherRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class TeacherController extends AppBaseController
{
    /** @var  TeacherRepository */
    private $teacherRepository;

    public function __construct(TeacherRepository $teacherRepo)
    {
        $this->teacherRepository = $teacherRepo;
    }

    /**
     * Display a listing of the Teacher.
     *
     * @param TeacherDataTable $teacherDataTable
     * @return Response
     */
    public function index(TeacherDataTable $teacherDataTable)
    {
        return $teacherDataTable->render('teachers.index');
    }

    /**
     * Show the form for creating a new Teacher.
     *
     * @return Response
     */
    public function create()
    {
        $sexes = [
            'Masculino' => 'Masculino',
            'Feminino' => 'Feminino',
            'Não Binário' => 'Não Binário'
        ];
        return view('teachers.create', compact('sexes'));
    }

    /**
     * Store a newly created Teacher in storage.
     *
     * @param CreateTeacherRequest $request
     *
     * @return Response
     */
    public function store(CreateTeacherRequest $request)
    {
        $input = $request->all();

        $teacher = $this->teacherRepository->create($input);

        Flash::success('Professor cadastrado com sucesso!');

        return redirect(route('teachers.index'));
    }

    /**
     * Display the specified Teacher.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Professor não encontrado.');

            return redirect(route('teachers.index'));
        }

        return view('teachers.show')->with('teacher', $teacher);
    }

    /**
     * Show the form for editing the specified Teacher.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Professor não encontrado.');

            return redirect(route('teachers.index'));
        }
        $sexes = [
            'Masculino' => 'Masculino',
            'Feminino' => 'Feminino',
            'Não Binário' => 'Não Binário'
        ];
        return view('teachers.edit', compact('sexes'))->with('teacher', $teacher);
    }

    /**
     * Update the specified Teacher in storage.
     *
     * @param  int              $id
     * @param UpdateTeacherRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTeacherRequest $request)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Professor não encontrado.');

            return redirect(route('teachers.index'));
        }

        $teacher = $this->teacherRepository->update($request->all(), $id);

        Flash::success('Professor atualizado com sucesso!');

        return redirect(route('teachers.index'));
    }

    /**
     * Remove the specified Teacher from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $teacher = $this->teacherRepository->find($id);

        if (empty($teacher)) {
            Flash::error('Professor não encontrado.');

            return redirect(route('teachers.index'));
        }

        $this->teacherRepository->delete($id);

        Flash::success('Professor deletado com sucesso!');

        return redirect(route('teachers.index'));
    }
}
