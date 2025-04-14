<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLoanRequest;
use App\Http\Requests\UpdateLoanRequest;
use App\Repositories\LoanRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LoanController extends AppBaseController
{
    /** @var LoanRepository $loanRepository*/
    private $loanRepository;

    public function __construct(LoanRepository $loanRepo)
    {
        $this->loanRepository = $loanRepo;
    }

    /**
     * Display a listing of the Loan.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $loans = $this->loanRepository->all();

        return view('loans.index')
            ->with('loans', $loans);
    }

    /**
     * Show the form for creating a new Loan.
     *
     * @return Response
     */
    public function create()
    {
        return view('loans.create');
    }

    /**
     * Store a newly created Loan in storage.
     *
     * @param CreateLoanRequest $request
     *
     * @return Response
     */
    public function store(CreateLoanRequest $request)
    {
        $input = $request->all();

        $loan = $this->loanRepository->create($input);

        Flash::success('Loan saved successfully.');

        return redirect(route('loans.index'));
    }

    /**
     * Display the specified Loan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $loan = $this->loanRepository->find($id);

        if (empty($loan)) {
            Flash::error('Loan not found');

            return redirect(route('loans.index'));
        }

        return view('loans.show')->with('loan', $loan);
    }

    /**
     * Show the form for editing the specified Loan.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $loan = $this->loanRepository->find($id);

        if (empty($loan)) {
            Flash::error('Loan not found');

            return redirect(route('loans.index'));
        }

        return view('loans.edit')->with('loan', $loan);
    }

    /**
     * Update the specified Loan in storage.
     *
     * @param int $id
     * @param UpdateLoanRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLoanRequest $request)
    {
        $loan = $this->loanRepository->find($id);

        if (empty($loan)) {
            Flash::error('Loan not found');

            return redirect(route('loans.index'));
        }

        $loan = $this->loanRepository->update($request->all(), $id);

        Flash::success('Loan updated successfully.');

        return redirect(route('loans.index'));
    }

    /**
     * Remove the specified Loan from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $loan = $this->loanRepository->find($id);

        if (empty($loan)) {
            Flash::error('Loan not found');

            return redirect(route('loans.index'));
        }

        $this->loanRepository->delete($id);

        Flash::success('Loan deleted successfully.');

        return redirect(route('loans.index'));
    }
}
