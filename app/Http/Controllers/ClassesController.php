<?php

namespace App\Http\Controllers;

use App\DataTables\ClassesDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClassesRequest;
use App\Http\Requests\UpdateClassesRequest;
use App\Repositories\ClassesRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ClassesController extends AppBaseController
{
    /** @var  ClassesRepository */
    private $classesRepository;

    public function __construct(ClassesRepository $classesRepo)
    {
        $this->classesRepository = $classesRepo;
    }

    /**
     * Display a listing of the Classes.
     *
     * @param ClassesDataTable $classesDataTable
     * @return Response
     */
    public function index(ClassesDataTable $classesDataTable)
    {
        return $classesDataTable->render('classes.index');
    }

    /**
     * Show the form for creating a new Classes.
     *
     * @return Response
     */
    public function create()
    {
        return view('classes.create');
    }

    /**
     * Store a newly created Classes in storage.
     *
     * @param CreateClassesRequest $request
     *
     * @return Response
     */
    public function store(CreateClassesRequest $request)
    {
        $input = $request->all();

        $classes = $this->classesRepository->create($input);

        Flash::success('Turma cadastrada com sucesso!');

        return redirect(route('classes.index'));
    }

    /**
     * Display the specified Classes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Turma não encontrada.');

            return redirect(route('classes.index'));
        }

        return view('classes.show')->with('classes', $classes);
    }

    /**
     * Show the form for editing the specified Classes.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Turma não encontrada.');

            return redirect(route('classes.index'));
        }

        return view('classes.edit')->with('classes', $classes);
    }

    /**
     * Update the specified Classes in storage.
     *
     * @param  int              $id
     * @param UpdateClassesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassesRequest $request)
    {
        $classes = $this->classesRepository->find($id);

        if (empty($classes)) {
            Flash::error('Turma não encontrada.');

            return redirect(route('classes.index'));
        }

        $classes = $this->classesRepository->update($request->all(), $id);

        Flash::success('Turma atualizada com sucesso!');

        return redirect(route('classes.index'));
    }

    /**
     * Remove the specified Classes from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $class = $this->classesRepository->find($id);

        if (empty($class)) {
            Flash::error('Turma não encontrada.');

            return redirect(route('classes.index'));
        }
        if(count($class->students)>0){
            Flash::error('Não é possível remover uma turma que possui alunos matriculados. Retire os alunos da turma antes.');

            return redirect(route('classes.index'));
        }

        $this->classesRepository->delete($id);

        Flash::success('Turma deletada com sucesso!');

        return redirect(route('classes.index'));
    }
}
