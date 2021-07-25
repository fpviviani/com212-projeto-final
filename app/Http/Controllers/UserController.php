<?php

namespace App\Http\Controllers;


use App\DataTables\UserDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use DB;
use Auth;

class UserController extends AppBaseController
{
    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */
    public function index(UserDataTable $userDataTable)
    {
        if(Auth::user()->name != "Admin"){
            Flash::error('Você não possui permissão.');

            return redirect(route('classes.index'));
        }
        return $userDataTable->render('users.index');
    }

    /**
     * Show the form for creating a new User.
     *
     * @return Response
     */
    public function create()
    {
        if(Auth::user()->name != "Admin"){
            Flash::error('Você não possui permissão.');

            return redirect(route('classes.index'));
        }
        return view('users.create');
    }

    /**
     * Store a newly created User in storage.
     *
     * @param CreateUserRequest $request
     *
     * @return Response
     */
    public function store(CreateUserRequest $request)
    {
        if(Auth::user()->name != "Admin"){
            Flash::error('Você não possui permissão.');

            return redirect(route('classes.index'));
        }
        DB::beginTransaction();
        $input = $request->all();

        $input['password'] = bcrypt($input['password']);

        $user = $this->userRepository->create($input);

        Flash::success("Usuário cadastrado com sucesso!");
        DB::commit();
        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        if(Auth::user()->name != "Admin"){
            Flash::error('Você não possui permissão.');

            return redirect(route('classes.index'));
        }
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error("Usuário não encontrado.");

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {

        if(Auth::user()->name != "Admin"){
            Flash::error('Você não possui permissão.');

            return redirect(route('classes.index'));
        }
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error("Usuário não encontrado.");

            return redirect(route('users.index'));
        }

        return view('users.edit')->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     *
     * @param  int              $id
     * @param UpdateUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserRequest $request)
    {
        if(Auth::user()->name != "Admin"){
            Flash::error('Você não possui permissão.');

            return redirect(route('classes.index'));
        }
        $user = $this->userRepository->find(request()->user_id);

        if (empty($user)) {
            Flash::error("Usuário não encontrado.");
            return redirect(route('users.index'));
        }

        $input = $request->except(
            'password',
            'password_confirmation'
        );

        if($request['keep_password']!=1){
            $input['password'] = bcrypt($request['password']);
        }
        $user = $this->userRepository->update($input, $id);

        Flash::success("Usuário atualizado com sucesso!");
        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        if(Auth::user()->name != "Admin"){
            Flash::error('Você não possui permissão.');

            return redirect(route('classes.index'));
        }
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error("Usuário não encontrado.");

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success("Usuário deletado com sucesso!");

        return redirect(route('users.index'));
    }
}
