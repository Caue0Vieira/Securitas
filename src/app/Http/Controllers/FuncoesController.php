<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFuncoesRequest;
use App\Http\Requests\UpdateFuncoesRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FuncoesRepository;
use Illuminate\Http\Request;
use Flash;

class FuncoesController extends AppBaseController
{
    /** @var FuncoesRepository $funcoesRepository*/
    private $funcoesRepository;

    public function __construct(FuncoesRepository $funcoesRepo)
    {
        $this->funcoesRepository = $funcoesRepo;
    }

    /**
     * Display a listing of the Funcoes.
     */
    public function index(Request $request)
    {
        $funcoes = $this->funcoesRepository->paginate(10);

        return view('funcoes.index')
            ->with('funcoes', $funcoes);
    }

    /**
     * Show the form for creating a new Funcoes.
     */
    public function create()
    {
        return view('funcoes.create');
    }

    /**
     * Store a newly created Funcoes in storage.
     */
    public function store(CreateFuncoesRequest $request)
    {
        $input = $request->all();

        $funcoes = $this->funcoesRepository->create($input);

        Flash::success('Funcoes saved successfully.');

        return redirect(route('funcoes.index'));
    }

    /**
     * Display the specified Funcoes.
     */
    public function show($id)
    {
        $funcoes = $this->funcoesRepository->find($id);

        if (empty($funcoes)) {
            Flash::error('Funcoes not found');

            return redirect(route('funcoes.index'));
        }

        return view('funcoes.show')->with('funcoes', $funcoes);
    }

    /**
     * Show the form for editing the specified Funcoes.
     */
    public function edit($id)
    {
        $funcoes = $this->funcoesRepository->find($id);

        if (empty($funcoes)) {
            Flash::error('Funcoes not found');

            return redirect(route('funcoes.index'));
        }

        return view('funcoes.edit')->with('funcoes', $funcoes);
    }

    /**
     * Update the specified Funcoes in storage.
     */
    public function update($id, UpdateFuncoesRequest $request)
    {
        $funcoes = $this->funcoesRepository->find($id);

        if (empty($funcoes)) {
            Flash::error('Funcoes not found');

            return redirect(route('funcoes.index'));
        }

        $funcoes = $this->funcoesRepository->update($request->all(), $id);

        Flash::success('Funcoes updated successfully.');

        return redirect(route('funcoes.index'));
    }

    /**
     * Remove the specified Funcoes from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $funcoes = $this->funcoesRepository->find($id);

        if (empty($funcoes)) {
            Flash::error('Funcoes not found');

            return redirect(route('funcoes.index'));
        }

        $this->funcoesRepository->delete($id);

        Flash::success('Funcoes deleted successfully.');

        return redirect(route('funcoes.index'));
    }
}
