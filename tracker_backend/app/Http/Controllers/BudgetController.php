<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Budget;
use Illuminate\Support\Facades\Auth;

class BudgetController extends Controller
{
    /**
     * Store a newly created budget in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'amount' => 'required|numeric',
        ]);
// dd(auth()->user());exit;
        // $this->authorize('create', Budget::class); // Ensure user is authorized to create a budget
        $budget = Budget::create(array_merge($request->all(), ['user_id' => Auth::user()->id]));


        return response()->json($budget, 201);
    }

    /**
     * Display a listing of the budgets.
     */
    public function index()
    {
        return Budget::all();
    }

    /**
     * Update the specified budget in storage.
     */
    public function update(Request $request, $id)
    {
        $budget = Budget::findOrFail($id);
        $budget->update($request->all());
        return response()->json($budget);
    }
}
