<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Allow Family Members to view their own transactions
        if (auth()->user()->role === User::FAMILY_MEMBER) {
            return Transaction::where('user_id', auth()->id())->with('category')->get();
        }

        return Transaction::with('category')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Check if the user is an Admin
        if (auth()->user()->role !== User::ADMIN) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'amount' => 'required|numeric',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'transaction_date' => 'required|date'
        ]);

        $transaction = Transaction::create($request->all());
        return response()->json($transaction, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $transaction = Transaction::findOrFail($id);
        
        // Allow Family Members to view only their own transactions
        if (auth()->user()->role === User::FAMILY_MEMBER && 
            $transaction->user_id !== auth()->id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        return $transaction;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Check if the user is an Admin
        if (auth()->user()->role !== User::ADMIN) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
        return response()->json($transaction);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Check if the user is an Admin
        if (auth()->user()->role !== User::ADMIN) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
        return response()->json(null, 204);
    }
}
