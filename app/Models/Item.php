<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Item extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) => $query->where(
                fn ($query) => $query->where('name', 'LIKE', '%' . $search . '%')
            )
        )
            ->when(
                $filters['illness'] ?? false,
                fn ($query, $illness) => $query->where('illness', '=', $illness)
            );
    }
}
