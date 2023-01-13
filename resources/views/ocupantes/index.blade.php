<?php
    use App\Models\Veiculo;
    $veiculo = Veiculo::all(); 
?>

<x-layout titulo="Ocupantes">
    <a href= {{ route('ocupante.create') }} class="btn btn-primary"> Adicionar</a>
    <a href= {{ route('ocupante.create') }} class="btn btn-primary"> Contiuar</a>
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Serviço</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ocorrencia as $item)
                <tr><td>{{$item->id}}</td>
                    <?php
                        $guarda = Guarda::find($item->motorista);
                    ?>
                    <td>{{$guarda->nome}}</td>
                    <td>{{$item->dataInicio}}</td>
                    <td>{{$item->dataFim}}</td>
                    <?php
                        $veiculo = Veiculo::find($item->veiculo_id);
                    ?>
                    <td>{{$veiculo->numero}}</td>
            
            <td><a href="{{ route('ocorrencia.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a></td>
            </tr>    
                  
            @endforeach   
        </tbody>
        </table>       
    </div> 
        {{ $ocorrencia->appends([
            'find' => request()->get('find','')
        ])->links() }}
</x-layout>

