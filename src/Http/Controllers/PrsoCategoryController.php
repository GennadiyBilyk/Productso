<?php

namespace GennadiyBilyk\Productso\Http\Controllers;
use App\Http\Controllers\Controller;
use GennadiyBilyk\Productso\Models\PrsoCategory as Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PrsoCategoryController extends Controller
{

    public function show($slug)
    {
        return 'Тест роута и контроллера пакета Productso';
    }
}