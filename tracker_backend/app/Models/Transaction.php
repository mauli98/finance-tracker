<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'description',
        'transaction_date',
        'amount',
        'file_path', // Added for uploaded bills/invoices
        'budget_id', // Added for budget reference
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relationship to the budget
    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }
}
