<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class HomeController extends Controller
{

    public function index() {
        return view('home.index');
    }
    
    public function search(Request $request) {

        if ($request->ajax()) {

            $output = '';
            $query = $request->get('query');
            if($query != '') {
                $data = Book::all()
                    ->where('title', 'like', '%'.$query.'%')
                    ->orWhere('writer', 'like', '%'.$query.'%')
                    ->orWhere('publisher', 'like', '%'.$query.'%')
                    ->orderBy('id','decs')
                    ->get();
            } else {
                $data = Book::all()
                    ->orderBy('id','decs')
                    ->get();
            }

            $total_row = $data->count();
            if($total_row > 0) {
                foreach($data as $row) {
                    $output .= '
                        <tr>
                            <td>'.$row->title.'</td>
                            <td>'.$row->writer.'</td>
                            <td>'.$row->publisher.'</td>
                            <td>'.$row->publication.'</td>
                            <td>'.$row->stock.'</td>
                        </tr>
                    ';
                }
            } else {
                $output = '
                <tr>
                    <td align="center" colspan="5">No Data Found</td>
                </tr>
                ';
            }

            $data = array(
                'table_data' => $output,
                'total_data' => $total_row
            ); 
            echo json_encode($data);
        }
    }
    
    public function catalog() {
        return view('home.catalog');
    }

    public function about() {
        return view('home.about');
    }
}
