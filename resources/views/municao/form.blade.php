<?php 
    use App\Models\Ocorrencia;
    use App\Models\Arma;
    use App\Models\Municao;
    $ocorrencia = Ocorrencia::all();
    $oco = Ocorrencia::latest()->first();
    $arma = Arma::all();
    $municao = Municao::all();

?>

<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($municaos->id)) {{ $municaos->id }} @endif" >
</div>

<div class="mb-3">
<label for="armas_id">Arma</label>
<select type="text" class="form-control" name="armas_id" id="armas_id">
    @foreach($arma as $item)    
        <option value="{{$item->id}}">
            {{$item->numero}} {{$item->descricao}}                                                      
        </option>  
    @endforeach 
</select>
</div>

<div class="mb-3">
<label for="quantidade">Quantidade</label>
<input type="text" class="form-control" name="quantidade" id="quantidade"
value="@if (isset($municaos->quantidade)) {{ $municaos->quantidade }} @endif" >
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($municaos->quantidade)) Alterar @else Salvar @endif
</button> 

<a href=  '/'  class="btn btn-primary"> Continuar</a>