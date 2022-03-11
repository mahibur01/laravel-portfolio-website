<?php

namespace App\Http\Controllers;

use App\Models\ServicesModel;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    function ServiceIndex()
    {
        return view('services');
    }

    function getServiceData()
    {
        $result = json_encode(ServicesModel::all());
        return $result;
    }
}
