
@extends('layouts.app')
@section('content')

    <h2>Sumar 2 numeros </h2>
    <form action="/suma" method="POST">
        @csrf
        <div>
            <label for="numero1">Primer número :</label>
            <input type="number" name="numero1" id="numero1" required>
        </div>
        <div>
            <label for="numero2">Segundo número :</label>
            <input type="number" name="numero2" id="numero2" required>
        </div>
        <button type="submit">Sumar</button>
    </form>
    <br>
    @if(isset($res))

        <h3>Resultado de la suma:  {{ $res }}</h3>

    @endif

    @endsection


    <!--<form action="" method="POST">
        <label>Número 3:</label>
        <input type="number" name="numero3" id="numero3" required>
        <br><br>
        <label>Número 4:</label>
        <input type="number" name="numero4" id"numero4" required>
        <br><br>
        <button type="submit">Sumar</button>
        
    </form>-->

   
</body>
</html>