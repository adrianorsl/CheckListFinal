<?php

    use App\Models\Veiculo;
    $veiculo = Veiculo::all();   
?>

<x-layout titulo="Check-list">
    <ul>
    <div class="py-4">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Motorista</th>
                <th scope="col">Data de Inicio</th>
                <th scope="col">Data Final</th>
                <th scope="col">Veículo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $ocorrencia->id }}</th>
                <?php $guarda = Guarda::find($item->motorista);?>
                <td>{{$guarda->nome}}</td>
                <td>{{ $ocorrencia->dataInicio }}</td>
                <td>{{ $ocorrencia->dataFim }}</td>
                <?php $veiculo = Veiculo::find($ocorrencia->veiculo_id) ?>
                <td>{{ $veiculo->numero }}</td>
            </tr>
    </div>
    </ul>
</x-layout>