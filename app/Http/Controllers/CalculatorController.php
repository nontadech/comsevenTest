<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calculator;
use App\Http\Requests\CalculatorRequest;

class CalculatorController extends Controller
{
    public function add(CalculatorRequest $request)
    {
        // TODO @laravel-test
        return response()->json([
            'result' => Calculator::add($request["a"],$request["b"])
        ]);
    }


    public function sub(CalculatorRequest $request)
    {
        // TODO @laravel-test
        return response()->json([
            'result' => Calculator::subtract($request["a"],$request["b"])
        ]);
    }


    public function div(CalculatorRequest $request)
    {
        // TODO @laravel-test
        return response()->json([
            'result' => Calculator::divide($request["a"],$request["b"])
        ]);
    }

    public function mul(CalculatorRequest $request)
    {
        // TODO @laravel-test
        return response()->json([
            'result' => Calculator::multiply($request["a"],$request["b"])
        ]);
    }

    public function mod(CalculatorRequest $request)
    {
        // TODO @laravel-test
        return response()->json([
            'result' => Calculator::modulo($request["a"],$request["b"])
        ]);
    }
}
