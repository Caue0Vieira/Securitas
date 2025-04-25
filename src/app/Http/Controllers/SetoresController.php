<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSetoresRequest;
use App\Http\Requests\UpdateSetoresRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SetoresRepository;
use Illuminate\Http\Request;
use Flash;

class SetoresController extends AppBaseController
{
    /** @var SetoresRepository $setoresRepository*/
    private $setoresRepository;

    public function __construct(SetoresRepository $setoresRepo)
    {
        $this->setoresRepository = $setoresRepo;
    }

    /**
     * Display a listing of the Setores.
     */
    public function index(Request $request)
    {
        $setores = $this->setoresRepository->paginate(10);

        return view('setores.index')
            ->with('setores', $setores);
    }

    /**
     * Show the form for creating a new Setores.
     */
    public function create()
    {
        return view('setores.create');
    }

    /**
     * Store a newly created Setores in storage.
     */
    public function store(CreateSetoresRequest $request)
    {
        $input = $request->all();

        $setores = $this->setoresRepository->create($input);

        Flash::success('Setores saved successfully.');

        return redirect(route('setores.index'));
    }

    /**
     * Display the specified Setores.
     */
    public function show($id)
    {
        $setores = $this->setoresRepository->find($id);

        if (empty($setores)) {
            Flash::error('Setores not found');

            return redirect(route('setores.index'));
        }

        return view('setores.show')->with('setores', $setores);
    }

    /**
     * Show the form for editing the specified Setores.
     */
    public function edit($id)
    {
        $setores = $this->setoresRepository->find($id);

        if (empty($setores)) {
            Flash::error('Setores not found');

            return redirect(route('setores.index'));
        }

        return view('setores.edit')->with('setores', $setores);
    }

    /**
     * Update the specified Setores in storage.
     */
    public function update($id, UpdateSetoresRequest $request)
    {
        $setores = $this->setoresRepository->find($id);

        if (empty($setores)) {
            Flash::error('Setores not found');

            return redirect(route('setores.index'));
        }

        $setores = $this->setoresRepository->update($request->all(), $id);

        Flash::success('Setores updated successfully.');

        return redirect(route('setores.index'));
    }

    /**
     * Remove the specified Setores from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $setores = $this->setoresRepository->find($id);

        if (empty($setores)) {
            Flash::error('Setores not found');

            return redirect(route('setores.index'));
        }

        $this->setoresRepository->delete($id);

        Flash::success('Setores deleted successfully.');

        return redirect(route('setores.index'));
    }
}
