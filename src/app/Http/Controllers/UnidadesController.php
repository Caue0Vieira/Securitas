<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUnidadesRequest;
use App\Http\Requests\UpdateUnidadesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UnidadesRepository;
use Illuminate\Http\Request;
use Flash;

class UnidadesController extends AppBaseController
{
    /** @var UnidadesRepository $unidadesRepository*/
    private $unidadesRepository;

    public function __construct(UnidadesRepository $unidadesRepo)
    {
        $this->unidadesRepository = $unidadesRepo;
    }

    /**
     * Display a listing of the Unidades.
     */
    public function index(Request $request)
    {
        $unidades = $this->unidadesRepository->paginate(10);

        return view('unidades.index')
            ->with('unidades', $unidades);
    }

    /**
     * Show the form for creating a new Unidades.
     */
    public function create()
    {
        return view('unidades.create');
    }

    /**
     * Store a newly created Unidades in storage.
     */
    public function store(CreateUnidadesRequest $request)
    {
        $input = $request->all();

        $unidades = $this->unidadesRepository->create($input);

        Flash::success('Unidades saved successfully.');

        return redirect(route('unidades.index'));
    }

    /**
     * Display the specified Unidades.
     */
    public function show($id)
    {
        $unidades = $this->unidadesRepository->find($id);

        if (empty($unidades)) {
            Flash::error('Unidades not found');

            return redirect(route('unidades.index'));
        }

        return view('unidades.show')->with('unidades', $unidades);
    }

    /**
     * Show the form for editing the specified Unidades.
     */
    public function edit($id)
    {
        $unidades = $this->unidadesRepository->find($id);

        if (empty($unidades)) {
            Flash::error('Unidades not found');

            return redirect(route('unidades.index'));
        }

        return view('unidades.edit')->with('unidades', $unidades);
    }

    /**
     * Update the specified Unidades in storage.
     */
    public function update($id, UpdateUnidadesRequest $request)
    {
        $unidades = $this->unidadesRepository->find($id);

        if (empty($unidades)) {
            Flash::error('Unidades not found');

            return redirect(route('unidades.index'));
        }

        $unidades = $this->unidadesRepository->update($request->all(), $id);

        Flash::success('Unidades updated successfully.');

        return redirect(route('unidades.index'));
    }

    /**
     * Remove the specified Unidades from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $unidades = $this->unidadesRepository->find($id);

        if (empty($unidades)) {
            Flash::error('Unidades not found');

            return redirect(route('unidades.index'));
        }

        $this->unidadesRepository->delete($id);

        Flash::success('Unidades deleted successfully.');

        return redirect(route('unidades.index'));
    }
}
