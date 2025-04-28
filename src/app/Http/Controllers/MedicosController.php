<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicosRequest;
use App\Http\Requests\UpdateMedicosRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MedicosRepository;
use Illuminate\Http\Request;
use Flash;

class MedicosController extends AppBaseController
{
    /** @var MedicosRepository $medicosRepository*/
    private $medicosRepository;

    public function __construct(MedicosRepository $medicosRepo)
    {
        $this->medicosRepository = $medicosRepo;
    }

    /**
     * Display a listing of the Medicos.
     */
    public function index(Request $request)
    {
        $medicos = $this->medicosRepository->paginate(10);

        return view('medicos.index')
            ->with('medicos', $medicos);
    }

    /**
     * Show the form for creating a new Medicos.
     */
    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created Medicos in storage.
     */
    public function store(CreateMedicosRequest $request)
    {
        $input = $request->all();

        $medicos = $this->medicosRepository->create($input);

        Flash::success('Medicos saved successfully.');

        return redirect(route('medicos.index'));
    }

    /**
     * Display the specified Medicos.
     */
    public function show($id)
    {
        $medicos = $this->medicosRepository->find($id);

        if (empty($medicos)) {
            Flash::error('Medicos not found');

            return redirect(route('medicos.index'));
        }

        return view('medicos.show')->with('medicos', $medicos);
    }

    /**
     * Show the form for editing the specified Medicos.
     */
    public function edit($id)
    {
        $medicos = $this->medicosRepository->find($id);

        if (empty($medicos)) {
            Flash::error('Medicos not found');

            return redirect(route('medicos.index'));
        }

        return view('medicos.edit')->with('medicos', $medicos);
    }

    /**
     * Update the specified Medicos in storage.
     */
    public function update($id, UpdateMedicosRequest $request)
    {
        $medicos = $this->medicosRepository->find($id);

        if (empty($medicos)) {
            Flash::error('Medicos not found');

            return redirect(route('medicos.index'));
        }

        $medicos = $this->medicosRepository->update($request->all(), $id);

        Flash::success('Medicos updated successfully.');

        return redirect(route('medicos.index'));
    }

    /**
     * Remove the specified Medicos from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicos = $this->medicosRepository->find($id);

        if (empty($medicos)) {
            Flash::error('Medicos not found');

            return redirect(route('medicos.index'));
        }

        $this->medicosRepository->delete($id);

        Flash::success('Medicos deleted successfully.');

        return redirect(route('medicos.index'));
    }
}
