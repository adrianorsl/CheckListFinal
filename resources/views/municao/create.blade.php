<?php
     use App\Models\Ocorrencia;
     use App\Models\Arma;
     use App\Models\Armas_ocor_mun;
     use App\Models\Municao;
     $arma = Arma::all();
     $armas_ocor_mun = Armas_ocor_mun::all();
     $municao = Municao::all();
     $ocorrencia = Ocorrencia::all();
     $oco = Ocorrencia::latest()->first();

?>

<x-layout titulo="Equipamentos">

    <form action=" {{ route('municao.store') }}" method="post">
        @method("POST")
        @csrf

        @include('municao.form')
    </form>
    <div class="py-2">
            <table class="table table-success table-striped">
                <thead>
                    <tr>
                        <th scope="col">Equipamento</th>
                        <th scope="col">Quantidade</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($armas_ocor_mun as $item)
                    
                        @if($oco->id == $item->ocorrencia_id)
                            @foreach($arma as $item2)    
                                @if ($item->arma_id == $item2->id)
                                    <tr><td>{{$item2->numero}} {{$item2->descricao}}</td>
                                    @foreach($municao as $item3) 
                                        @if ($item->municoes_id == $item3->id)
                                            <td>{{$item3->quantidade}}</td>
                                            <td><form id="form_delete" name="form_delete" action="{{ route('municao.destroy',$item3->id) }}" method="post" onsubmit="return confirm('Tem certeza que deseja excluir este registro?')">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger delete-btn">Excluir</button>
                                                </form></td></tr>             
                                        @endif 
                                    @endforeach
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                  
                      
                    </tr>
                </tbody>
</x-layout>