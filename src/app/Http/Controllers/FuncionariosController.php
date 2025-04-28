<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFuncionariosRequest;
use App\Http\Requests\UpdateFuncionariosRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FuncionariosRepository;
use Illuminate\Http\Request;
use Flash;

class FuncionariosController extends AppBaseController
{
    /** @var FuncionariosRepository $funcionariosRepository*/
    private $funcionariosRepository;

    public function __construct(FuncionariosRepository $funcionariosRepo)
    {
        $this->funcionariosRepository = $funcionariosRepo;
    }

    /**
     * Display a listing of the Funcionarios.
     */
    public function index(Request $request)
    {
        $funcionarios = $this->funcionariosRepository->paginate(10);

        return view('funcionarios.index')
            ->with('funcionarios', $funcionarios);
    }

    /**
     * Show the form for creating a new Funcionarios.
     */
    public function create()
    {
        return view('funcionarios.create');
    }

    /**
     * Store a newly created Funcionarios in storage.
     */
    public function store(CreateFuncionariosRequest $request)
    {
        $input = $request->all();

        $funcionarios = $this->funcionariosRepository->create($input);

        Flash::success('Funcionarios saved successfully.');

        return redirect(route('funcionarios.index'));
    }

    /**
     * Display the specified Funcionarios.
     */
    public function show($id)
    {
        $funcionarios = $this->funcionariosRepository->find($id);

        if (empty($funcionarios)) {
            Flash::error('Funcionarios not found');

            return redirect(route('funcionarios.index'));
        }

        return view('funcionarios.show')->with('funcionarios', $funcionarios);
    }

    /**
     * Show the form for editing the specified Funcionarios.
     */
    public function edit($id)
    {
        $funcionarios = $this->funcionariosRepository->find($id);

        if (empty($funcionarios)) {
            Flash::error('Funcionarios not found');

            return redirect(route('funcionarios.index'));
        }

        return view('funcionarios.edit')->with('funcionarios', $funcionarios);
    }

    /**
     * Update the specified Funcionarios in storage.
     */
    public function update($id, UpdateFuncionariosRequest $request)
    {
        $funcionarios = $this->funcionariosRepository->find($id);

        if (empty($funcionarios)) {
            Flash::error('Funcionarios not found');

            return redirect(route('funcionarios.index'));
        }

        $funcionarios = $this->funcionariosRepository->update($request->all(), $id);

        Flash::success('Funcionarios updated successfully.');

        return redirect(route('funcionarios.index'));
    }

    /**
     * Remove the specified Funcionarios from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $funcionarios = $this->funcionariosRepository->find($id);

        if (empty($funcionarios)) {
            Flash::error('Funcionarios not found');

            return redirect(route('funcionarios.index'));
        }

        $this->funcionariosRepository->delete($id);

        Flash::success('Funcionarios deleted successfully.');

        return redirect(route('funcionarios.index'));
    }
}
