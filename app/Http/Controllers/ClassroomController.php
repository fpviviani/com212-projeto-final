<?php

namespace App\Http\Controllers;

use App\DataTables\ClassroomDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClassroomRequest;
use App\Http\Requests\UpdateClassroomRequest;
use App\Repositories\ClassroomRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ClassroomController extends AppBaseController
{
    /** @var  ClassroomRepository */
    private $classroomRepository;

    public function __construct(ClassroomRepository $classroomRepo)
    {
        $this->classroomRepository = $classroomRepo;
    }

    /**
     * Display a listing of the Classroom.
     *
     * @param ClassroomDataTable $classroomDataTable
     * @return Response
     */
    public function index(ClassroomDataTable $classroomDataTable)
    {
        return $classroomDataTable->render('classrooms.index');
    }

    /**
     * Show the form for creating a new Classroom.
     *
     * @return Response
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created Classroom in storage.
     *
     * @param CreateClassroomRequest $request
     *
     * @return Response
     */
    public function store(CreateClassroomRequest $request)
    {
        $input = $request->all();

        $classroom = $this->classroomRepository->create($input);

        Flash::success('Sala de Aula cadastrada com sucesso!');

        return redirect(route('classrooms.index'));
    }

    /**
     * Display the specified Classroom.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classroom = $this->classroomRepository->find($id);

        if (empty($classroom)) {
            Flash::error('Sala de Aula não encontrada.');

            return redirect(route('classrooms.index'));
        }

        return view('classrooms.show')->with('classroom', $classroom);
    }

    /**
     * Show the form for editing the specified Classroom.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classroom = $this->classroomRepository->find($id);

        if (empty($classroom)) {
            Flash::error('Sala de Aula não encontrada.');

            return redirect(route('classrooms.index'));
        }

        return view('classrooms.edit')->with('classroom', $classroom);
    }

    /**
     * Update the specified Classroom in storage.
     *
     * @param  int              $id
     * @param UpdateClassroomRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassroomRequest $request)
    {
        $classroom = $this->classroomRepository->find($id);

        if (empty($classroom)) {
            Flash::error('Sala de Aula não encontrada.');

            return redirect(route('classrooms.index'));
        }

        $classroom = $this->classroomRepository->update($request->all(), $id);

        Flash::success('Sala de Aula atualizada com sucesso!');

        return redirect(route('classrooms.index'));
    }

    /**
     * Remove the specified Classroom from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classroom = $this->classroomRepository->find($id);

        if (empty($classroom)) {
            Flash::error('Sala de Aula não encontrada.');

            return redirect(route('classrooms.index'));
        }

        $this->classroomRepository->delete($id);

        Flash::success('Sala de Aula deletada com sucesso!');

        return redirect(route('classrooms.index'));
    }
}
