<?php


namespace App\Services\Users;


use App\Models\User\Employee;
use App\Models\User\EmployeeType;
use Illuminate\Http\Request;



class ManageEmployee
{
    protected $user;

    public function __construct(ManageUser $user)
    {
        $this->user = $user;
    }

    public function addEmployee(Request $request)
    {
        $user = $this->user->createUser($request);
        $employee = Employee::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'note' => $request->note,
        ]);
        return response()->json([
            'employee' => $employee,
            'user' => $user,
        ]);

    }
}
