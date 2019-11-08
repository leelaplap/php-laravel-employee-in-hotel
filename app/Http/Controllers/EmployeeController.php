<?php

namespace App\Http\Controllers;

use App\Group;
use App\Http\Requests\EmployeeRequest;
use App\Services\EmployeeServiceInterface;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeServiceInterface $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        $employees = $this->employeeService->getAll();
        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        $groups = Group::all();
        return view('employee.create', compact('groups'));
    }

    public function store(EmployeeRequest $request)
    {
        $this->employeeService->add($request);
        return redirect()->route('employees.index');
    }

    public function edit($id)
    {
        $employee = $this->employeeService->findEmployeeById($id);
        $groups = Group::all();
        return view('employee.edit', compact('employee', 'groups'));
    }

    public function update(EmployeeRequest $request, $id)
    {
        $this->employeeService->edit($id, $request);
        return redirect()->route('employees.index');
    }

    public function destroy($id)
    {
        $this->employeeService->delete($id);
        return redirect()->route('employees.index');
    }

    public function search(Request $request)
    {
        $employees = $this->employeeService->search($request);
        return view('employee.index', compact('employees'));
    }
}
