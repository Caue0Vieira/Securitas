<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMedicoResponsavelRequest;
use App\Http\Requests\UpdateMedicoResponsavelRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MedicoResponsavelRepository;
use Illuminate\Http\Request;
use Flash;

class MedicoResponsavelController extends AppBaseController
{
    /** @var MedicoResponsavelRepository $medicoResponsavelRepository*/
    private $medicoResponsavelRepository;

    public function __construct(MedicoResponsavelRepository $medicoResponsavelRepo)
    {
        $this->medicoResponsavelRepository = $medicoResponsavelRepo;
    }

    /**
     * Display a listing of the MedicoResponsavel.
     */
    public function index(Request $request)
    {
        $medicoResponsavels = $this->medicoResponsavelRepository->paginate(10);

        return view('medico_responsavels.index')
            ->with('medicoResponsavels', $medicoResponsavels);
    }

    /**
     * Show the form for creating a new MedicoResponsavel.
     */
    public function create()
    {
        return view('medico_responsavels.create');
    }

    /**
     * Store a newly created MedicoResponsavel in storage.
     */
    public function store(CreateMedicoResponsavelRequest $request)
    {
        $input = $request->all();

        $medicoResponsavel = $this->medicoResponsavelRepository->create($input);

        Flash::success('Medico Responsavel saved successfully.');

        return redirect(route('medicoResponsavels.index'));
    }

    /**
     * Display the specified MedicoResponsavel.
     */
    public function show($id)
    {
        $medicoResponsavel = $this->medicoResponsavelRepository->find($id);

        if (empty($medicoResponsavel)) {
            Flash::error('Medico Responsavel not found');

            return redirect(route('medicoResponsavels.index'));
        }

        return view('medico_responsavels.show')->with('medicoResponsavel', $medicoResponsavel);
    }

    /**
     * Show the form for editing the specified MedicoResponsavel.
     */
    public function edit($id)
    {
        $medicoResponsavel = $this->medicoResponsavelRepository->find($id);

        if (empty($medicoResponsavel)) {
            Flash::error('Medico Responsavel not found');

            return redirect(route('medicoResponsavels.index'));
        }

        return view('medico_responsavels.edit')->with('medicoResponsavel', $medicoResponsavel);
    }

    /**
     * Update the specified MedicoResponsavel in storage.
     */
    public function update($id, UpdateMedicoResponsavelRequest $request)
    {
        $medicoResponsavel = $this->medicoResponsavelRepository->find($id);

        if (empty($medicoResponsavel)) {
            Flash::error('Medico Responsavel not found');

            return redirect(route('medicoResponsavels.index'));
        }

        $medicoResponsavel = $this->medicoResponsavelRepository->update($request->all(), $id);

        Flash::success('Medico Responsavel updated successfully.');

        return redirect(route('medicoResponsavels.index'));
    }

    /**
     * Remove the specified MedicoResponsavel from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $medicoResponsavel = $this->medicoResponsavelRepository->find($id);

        if (empty($medicoResponsavel)) {
            Flash::error('Medico Responsavel not found');

            return redirect(route('medicoResponsavels.index'));
        }

        $this->medicoResponsavelRepository->delete($id);

        Flash::success('Medico Responsavel deleted successfully.');

        return redirect(route('medicoResponsavels.index'));
    }
}
