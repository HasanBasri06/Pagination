<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaginationController extends Controller
{
    public function pagination(){

        $data   = DB::table('users')->paginate(5);

        return view('pagination', [
            'users' => [
                $data,
                $data->nextPageUrl(),
                $data->previousPageUrl()
            ]
        ]);
    }
}
