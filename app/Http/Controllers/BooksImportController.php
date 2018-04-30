<?php

namespace App\Http\Controllers;

use Excel;
use App\Book;
use App\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BooksImportController extends Controller
{
    public function generateExcelTemplate()
    {
        Excel::create('Template Import Buku', function ($excel) {
            $excel->setTitle('Template Import Buku')
                    ->setCreator(' Perpustakaan Online ')
                    ->setCompany('Perpustakaan Online')
                    ->setDescription('Template Import buku untuk Perpustakaan Online');
            
            $excel->sheet('Data Buku', function ($sheet) { 
                $row = 1;
                $sheet->row($row, [
                    'judul',
                    'penulis',
                    'jumlah'
                ]);
            });

        })->export('xls');


    }

    public function importExcel(Request $request)
    {
        // Validasi file yang di upload 

        $request->validate([
            'excel' => 'required|mimes:xls,xlsx,ods'
        ]);

        $excel = $request->excel;

        // membaca Sheet Pertama
        $excels = Excel::selectSheetsByIndex(0)->load($excel)->get();


        // validasi row excel
        $rowRules = [
            'judul' => 'required|unique:books,title',
            'penulis' => 'required',
            'jumlah' => 'required',
        ];

        // Catat Semua ID Buku baru untuk menghitung total buku yang berhasil di import
        $book_id = [];


        // Looping setiap baris dari baris kedua, yang pertama adalha nama kolom
        foreach ($excels as $row) {
            $validator = Validator::make($row->toArray(), $rowRules);

            // lewati baris yang tidak valid, lanjut kebaris selanjutnya
            if ($validator->fails()) {
                continue;
            }

            // jika valid maka di eksekusi & cek apakah penulis sudah ada di database
            $author = Author::where('name', $row['penulis'])->first();
            
            // buat penulis jika belum tercatat di database
            if (!$author) {
                $author = Author::create(['name' => $row['penulis']]);
            }

            // Buat Buku baru
            $book = Book::create([
                'title' => $row['judul'],
                'author_id' => $author->id,
                'amount' => $row['jumlah'],
            ]);

            // cara ID buku yang berhasil di buat
            array_push($book_id, $book->id);

        }

        // get semua buku yang baru dibuat
        $books = Book::whereIn('id', $book_id)->get();

        // redirect ke form jika tidak ada buku yang berhasil di import
        if ($books->count() == 0) {
            return redirect()->back()->with('flash_notification', [
                'level' => 'warning',
                'message' => 'Tidak ada Buku yang berhasil di import! atau buku sudah ada di database',
            ]);
        }

        // jika berhasil tampilkan index Buku
        return redirect()->route('books.index')->with('flash_notification', [
            'level' => 'success',
            'message' => 'Berhasil mengimport '.$books->count().' Buku', 
        ]);

    }
}





