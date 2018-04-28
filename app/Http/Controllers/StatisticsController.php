<?php

namespace App\Http\Controllers;

// use App\Book;
use App\BorrowLog;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;

class StatisticsController extends Controller
{

    public function index(Request $request, Builder $builder)
    {
        if ($request->ajax()) {
            $statistics = BorrowLog::with('book', 'user');
            
            return Datatables::of($statistics)
               ->addColumn('returned_at', function ($statistic) {
                   if ($statistic->is_returned) {
                       return $statistic->updated_at->format('D, d/M/Y');
                   }

                   return "<span class='text-warning'><strong>Masih di pinjam</strong></span>";
                })->rawColumns(['returned_at'])
                ->toJson();
                
        }
        $html = $builder->columns([
            ['data' => 'book.title', 'name' => 'book.title', 'title' => 'Book Title'],
            ['data' => 'user.name', 'name' => 'user.name', 'title' => 'Borrower'],
            ['data' => 'created_at', 'name' => 'created_at', 'title' => '
            The date of the loan'],
            ['data' => 'returned_at', 'name' => 'returned_at', 'title' => 'The date of return'],
        ]);

        return view('statistics.index', compact('html'));
    }
}
