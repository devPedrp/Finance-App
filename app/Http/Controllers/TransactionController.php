<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;


class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $query = Transaction::query();

        if ($request->has('type')) {
            $query->where('type', $request->type);
        }

        return response()->json($query->get(), 200);
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'type' => 'required|in:income,expense',
            'category' => 'nullable|string|max:100',
        ]);

        $transaction = Transaction::create($validated);
        return response()->json($transaction, 201);
    }

    public function show(Transaction $transaction)
    {
        return response()->json($transaction, 200);
    }

    public function update(Request $request, Transaction $transaction)
    {
        $validated = $request->validate([
            'description' => 'sometimes|required|string|max:255',
            'amount' => 'sometimes|required|numeric',
            'type' => 'sometimes|required|in:income,expense',
            'category' => 'nullable|string|max:100',
        ]);

        $transaction->update($validated);
        return response()->json($transaction, 200);
    }


    public function destroy($id)
    {
        try {
            // Tenta encontrar a transação
            $transaction = Transaction::findOrFail($id);
    
            // Tenta excluir a transação
            $transaction->delete();
    
            // Retorna uma resposta de sucesso
            return response()->json(['message' => 'Transaction deleted successfully.'], 200);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            // Caso o ID não exista
            return response()->json(['error' => 'Transaction not found.'], 404);
        } catch (\Exception $e) {
            // Para qualquer outro erro genérico
            return response()->json(['error' => 'An error occurred while deleting the transaction.'], 500);
        }
    }
}
