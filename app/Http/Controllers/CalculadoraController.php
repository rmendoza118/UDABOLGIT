<?php




namespace App\Http\Controllers;

use App\Calculadora;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class CalculadoraController extends Controller
{
    /**
     * 
     *
     * @param  Calculadora $calculadora
     * @return View
     */
    public function index(Calculadora $calculadora): View
    {
        return view('calculadora', [
            'operations' => $calculadora->getOperations()
        ]);
    }

    /**
     * Zpracuj požadavek formuláře a zobraz výsledek spolu s formulářem kalkulačky.
     *
     * @param  Calculadora $calculadora
     * @return View
     * @throws ValidationException
     */
    public function calculate(Calculadora $calculadora): View
    {
        $this->validate(request(), [
            'a' => ['required', 'integer'],
            'b' => ['required', 'integer', 'not_in:0'],
            'operation' => [
                'required',
                Rule::in(array_keys($calculadora->getOperations()))
            ]
        ]);

        $a = request()->input('a');
        $b = request()->input('b');
        $operation = request()->input('operation');
        $result = $calculadora->calculate($operation, $a, $b);

        return view('calculadora', [
            'operations' => $calculadora->getOperations(),
            'result' => $result,
            'a' => $a,
            'b' => $b
        ]);
    }
}
