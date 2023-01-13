<?php 
    use App\Models\Carrocheck;
    use App\Models\Condicao;
    $condicao = new Condicao();
    $concicao = Condicao::all();
    $carrocheck = new Carrocheck();
 
?>
 
<x-layout titulo="Carro Check">

    <form action=" {{ route('carrocheck.store') }}" method="post">
        @method("POST")
        @csrf

        @include('carrocheck.form')
    </form>
   
</x-layout>