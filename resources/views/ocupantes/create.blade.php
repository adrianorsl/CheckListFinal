<?php
     use App\Models\Guarda;
     use App\Models\Ocupante;
     use App\Models\Ocorrencia;
     use App\Models\Servico;
     $guarda = Guarda::all();
     $servico = Servico::all();
     $ocorrencia = Ocorrencia::all();
     $oco = Ocorrencia::latest()->first();
     $ocupante = Ocupante::all();

?>

<x-layout titulo="Ocupantes">

    <form action=" {{ route('ocupante.store') }}" method="post">
        @method("POST")
        @csrf

        @include('ocupantes.form') 

        
        
        
    </form>
    <div class="py-2">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">Ocupantes</th>
                        <th scope="col">Seviço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ocupante as $item)
                        @if($oco->id == $item->ocorrencia_id)
                            @foreach($guarda as $item2)    
                                @if ($item->nome == $item2->id)
                                <tr><td>{{$item2->nome}}</td>
                                <?php
                                    $item3 = Servico::find($item->escala);
                                ?>
                                <td>{{$item3->tipo}}</td>
                                @endif 
                            @endforeach
                        @endif
                    @endforeach
                                </tr>
                </tbody>
</x-layout>