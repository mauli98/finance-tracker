<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Store a newly created transaction in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'category_id' => 'required',
            'transaction_date' => 'required|date',
            'file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // Added for file upload
            'budget_id' => 'nullable|exists:budgets,id', // Added for budget reference
        ]);

        $transaction = Transaction::create(array_merge($request->all(), ['user_id' => Auth::user()->id]));

        return response()->json($transaction, 201);
    }

    /**
     * Display a listing of the transactions.
     */
    public function index()
    {
        return Transaction::all();
    }

    /**
     * Update the specified transaction in storage.
     */
    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return response()->json($transaction);
    }
}
