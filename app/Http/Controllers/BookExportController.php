<?php

namespace App\Http\Controllers;

use PDF;
use Excel;
use App\Book;
use App\Author;
use Illuminate\Http\Request;

class BookExportController extends Controller
{
    public function export()
    {
        $authors = Author::pluck('name', 'id')->all();

        return view('books.export', compact('authors'));
    }

    public function exportPost(Request $request)
    {
        $request->validate([
            'author_id' => 'required',
            'type' => 'required|in:pdf,xls',
        ],[
            'author_id.required' => 'Anda belum memlih penulis! Silahkan pilih minimal satu Penulis!',
        ]);

        $books = Book::whereIn('author_id', $request->author_id)->get();

        $handler = 'export' .ucfirst($request->type);
        return $this->$handler($books);

        

    }

    public function exportXls($books)
    {
        Excel::create('books', function ($excel) use ($books) {
            // Set Property.
            $excel->setTitle('Data Buku')->setCreator(auth()->user()->name);

            $excel->sheet('Data Buku', function ($sheet) use ($books) {
                $row = 1;
                $sheet->row($row, [
                    'Judul',
                    'Jumlah',
                    'Stock',
                    'Penulis',
                ]);

                foreach ($books as $book) {
                    $sheet->row(++$row, [
                        $book->title,
                        $book->amount,
                        $book->stock,
                        $book->author->name,
                    ]);
                }
            });
        })->export('xls');

    }

    public function exportPdf($books)
    {
        $pdf = PDF::loadview('pdf.books', compact('books'));
        // langsung di download
        // return $pdf->download('data-buku.pdf);


        // preview sebelum di download
        return $pdf->stream('data-buku.pdf');
    }
}
