<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EmpresaRepository;
use Illuminate\Http\Request;
use Flash;

class EmpresaController extends AppBaseController
{
    /** @var EmpresaRepository $empresaRepository*/
    private $empresaRepository;

    public function __construct(EmpresaRepository $empresaRepo)
    {
        $this->empresaRepository = $empresaRepo;
    }

    /**
     * Display a listing of the Empresa.
     */
    public function index(Request $request)
    {
        $empresas = $this->empresaRepository->paginate(10);

        return view('empresas.index')
            ->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new Empresa.
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created Empresa in storage.
     */
    public function store(CreateEmpresaRequest $request)
    {
        $input = $request->all();

        $empresa = $this->empresaRepository->create($input);

        Flash::success('Empresa saved successfully.');

        return redirect(route('empresas.index'));
    }

    /**
     * Display the specified Empresa.
     */
    public function show($id)
    {
        $empresa = $this->empresaRepository->find($id);

        if (empty($empresa)) {
            Flash::error('Empresa not found');

            return redirect(route('empresas.index'));
        }

        return view('empresas.show')->with('empresa', $empresa);
    }

    /**
     * Show the form for editing the specified Empresa.
     */
    public function edit($id)
    {
        $empresa = $this->empresaRepository->find($id);

        if (empty($empresa)) {
            Flash::error('Empresa not found');

            return redirect(route('empresas.index'));
        }

        return view('empresas.edit')->with('empresa', $empresa);
    }

    /**
     * Update the specified Empresa in storage.
     */
    public function update($id, UpdateEmpresaRequest $request)
    {
        $empresa = $this->empresaRepository->find($id);

        if (empty($empresa)) {
            Flash::error('Empresa not found');

            return redirect(route('empresas.index'));
        }

        $empresa = $this->empresaRepository->update($request->all(), $id);

        Flash::success('Empresa updated successfully.');

        return redirect(route('empresas.index'));
    }

    /**
     * Remove the specified Empresa from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empresa = $this->empresaRepository->find($id);

        if (empty($empresa)) {
            Flash::error('Empresa not found');

            return redirect(route('empresas.index'));
        }

        $this->empresaRepository->delete($id);

        Flash::success('Empresa deleted successfully.');

        return redirect(route('empresas.index'));
    }
}
