<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormExampleRequest;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function checkValidation(FormExampleRequest $request)
    {
        return view('list');
    }

    public function index()
    {
        echo "Dữ liệu được xác thực thành công";
    }

}
