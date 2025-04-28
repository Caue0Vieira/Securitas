<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpresasRequest;
use App\Http\Requests\UpdateEmpresasRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\EmpresasRepository;
use Illuminate\Http\Request;
use Flash;

class EmpresasController extends AppBaseController
{
    /** @var EmpresasRepository $empresasRepository*/
    private $empresasRepository;

    public function __construct(EmpresasRepository $empresasRepo)
    {
        $this->empresasRepository = $empresasRepo;
    }

    /**
     * Display a listing of the Empresas.
     */
    public function index(Request $request)
    {
        $empresas = $this->empresasRepository->paginate(10);

        return view('empresas.index')
            ->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new Empresas.
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created Empresas in storage.
     */
    public function store(CreateEmpresasRequest $request)
    {
        $input = $request->all();

        $empresas = $this->empresasRepository->create($input);

        Flash::success('Empresas saved successfully.');

        return redirect(route('empresas.index'));
    }

    /**
     * Display the specified Empresas.
     */
    public function show($id)
    {
        $empresas = $this->empresasRepository->find($id);

        if (empty($empresas)) {
            Flash::error('Empresas not found');

            return redirect(route('empresas.index'));
        }

        return view('empresas.show')->with('empresas', $empresas);
    }

    /**
     * Show the form for editing the specified Empresas.
     */
    public function edit($id)
    {
        $empresas = $this->empresasRepository->find($id);

        if (empty($empresas)) {
            Flash::error('Empresas not found');

            return redirect(route('empresas.index'));
        }

        return view('empresas.edit')->with('empresas', $empresas);
    }

    /**
     * Update the specified Empresas in storage.
     */
    public function update($id, UpdateEmpresasRequest $request)
    {
        $empresas = $this->empresasRepository->find($id);

        if (empty($empresas)) {
            Flash::error('Empresas not found');

            return redirect(route('empresas.index'));
        }

        $empresas = $this->empresasRepository->update($request->all(), $id);

        Flash::success('Empresas updated successfully.');

        return redirect(route('empresas.index'));
    }

    /**
     * Remove the specified Empresas from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empresas = $this->empresasRepository->find($id);

        if (empty($empresas)) {
            Flash::error('Empresas not found');

            return redirect(route('empresas.index'));
        }

        $this->empresasRepository->delete($id);

        Flash::success('Empresas deleted successfully.');

        return redirect(route('empresas.index'));
    }
}
