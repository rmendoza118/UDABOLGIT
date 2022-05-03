<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
        <h1>Calculadora en Laravel</h1>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="POST" action="/calculadora">
            @csrf

            Operaciones:
            <select name="operation">
                @foreach ($operations as $operation => $text)
                    <option value="{{ $operation }}">{{ $text }}</option>
                @endforeach
            </select>
            <br />

            Primer Termino:
            <input type="number" name="a" value="{{ $a ?? 0 }}" />
            <br />

            Segundo Termino:
            <input type="number" name="b" value="{{ $b ?? 0 }}" />
            <br />

            <button type="submit">Calcular</button>
        </form>

        @if (isset($result))
            <p>El resultado es: {{ $result }}</p>
        @endif
    </body>
</html>
