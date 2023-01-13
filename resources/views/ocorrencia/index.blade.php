<?php
    use App\Models\Veiculo;
    use App\Models\Guarda;
    $veiculo = Veiculo::all(); 
    $guarda = Guarda::all();
?>

<x-layout titulo="Check-list">
    <a href= {{ route('ocorrencia.create') }} class="btn btn-primary"> Adicionar</a>
    <div class="py-4">
        <form action="{{ route('ocorrencia.index') }}" method="get">
            @method('GET')
            <input type="text" name="find" id="find"><input type="submit" value="OK">
        </form>
    </div>
    <ul class="pagination">
        <div class="py-4">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Motorista</th>
                        <th scope="col">Data de Inicio</th>
                        <th scope="col">Data Final</th>
                        <th scope="col">Veículo</th>
                        <th scope="col">Detalhes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($ocorrencia as $item)
                        <tr><td>{{$item->id}}</td>
                            <?php
                                $guarda = Guarda::find($item->motorista);
                            ?>

                            <td>{{$guarda->nome}}</td>
                            @if($item->dataInicio == null)
                                <td>{{$item->dataInicio}}</td>
                            @else
                                <td>{{ \Carbon\Carbon::parse($item->dataInicio)->format('d/m/Y')}}</td>
                            @endif
                            @if($item->dataFim == null)
                                <td>{{$item->dataFim}}</td>
                            @else
                                <td>{{ \Carbon\Carbon::parse($item->dataFim)->format('d/m/Y')}}</td>
                            @endif
                            <?php
                                $veiculo = Veiculo::find($item->veiculo_id);
                            ?>
                            <td>{{$veiculo->numero}}</td>
                    
                    <td><a href="{{ route('carrocheck.show', $item->id) }}"><button type="button" class="btn btn-info">Detalhes</button></a></td>
                    </tr>    
                        
                    @endforeach   
                </tbody>
            </table>    
            {{ $ocorrencia->appends([
                'find' => request()->get('find','')
            ])->links() }}   
        </div>  
    </ul>    
</x-layout>

