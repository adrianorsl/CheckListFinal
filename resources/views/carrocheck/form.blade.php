<?php 
    use App\Models\Carrocheck;
    use App\Models\Veiculo;
    use App\Models\Condicao;
    use App\Models\Ocorrencia;
    use App\Models\Arma;
    use App\Models\Municao;
    use App\Models\Guarda;
    $condicao = new Condicao();
    $condicao = Condicao::all();
    $ocorrencia = Ocorrencia::all();
    $oco = Ocorrencia::latest()->first();
    $arma = Arma::all();
    $municao = Municao::all();
    $guarda = Guarda::all();
    $veiculo = Veiculo::where('id',$oco->veiculo_id)->value('id');
    $oco2 = Ocorrencia::where('veiculo_id', $veiculo)->latest()->skip(1)->first();
    $t = $oco2->id;
    $carrocheck = Carrocheck::where('id', $t )->first();
?>


<div class="mb-3">
<label for="id">Ocorrencia</label>
<input type="int" class="form-control" name="id" id="id"
value="{{ $oco->id }}" >
</div>


<div class="mb-3">
<label for="km">Km</label>
<input  type="text" class="form-control" name="km" id="km" ]
value="@if (isset($carrocheck->km)) {{ $carrocheck->km }} @endif" ><br>
</div>


<div class="mb-3">
<label for="capo">Capo</label>
<select type="text" class="form-control" name="capo" id="capo">
    @foreach($condicao as $item)
    <option value= "{{$item->id}}"
        @if ($carrocheck->capo == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}} 
        </option> 
    @endforeach 
</select>
</div>

<div class="mb-3">
<label for="paralamaDianteiro_esq">Paralama Dianteiro Esquerdo</label>
<select type="text" class="form-control" name="paralamaDianteiro_esq" id="paralamaDianteiro_esq">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->paralamaDianteiro_esq == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                      
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="paralamaDianteiro_dir">Paralama Dianteiro Direito</label>
<select type="text" class="form-control" name="paralamaDianteiro_dir" id="paralamaDianteiro_dir">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->paralamaDianteiro_dir == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                      
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="paralamaTraseiro_esq">Paralama Traseiro Esquerdo</label>
<select type="text" class="form-control" name="paralamaTraseiro_esq" id="paralamaTraseiro_esq">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->paralamaTraseiro_esq == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                               
        </option>  
    @endforeach 
</select>
</div>

<div class="mb-3">
<label for="paralamaTraseiro_dir">Paralama Traseiro Direito</label>
<select type="text" class="form-control" name="paralamaTraseiro_dir" id="paralamaTraseiro_dir">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->paralamaTraseiro_dir == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
    @endforeach 
</select>
</div>

<div class="mb-3">
<label for="parachoqueDianteiro">Parachoque Dianteiro</label>
<select type="text" class="form-control" name="parachoqueDianteiro" id="parachoqueDianteiro">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->parachoqueDianteiro == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                               
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="portaDianteira_esq">Porta Dianteira Esquerda</label>
<select type="text" class="form-control" name="portaDianteira_esq" id="portaDianteira_esq">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->portaDianteira_esq == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="portaDianteira_dir">Porta Dinteira Direita</label>
<select type="text" class="form-control" name="portaDianteira_dir" id="portaDianteira_dir">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->portaDianteira_dir == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="portaTraseira_esq">Porta Traseira Esquerda</label>
<select type="text" class="form-control" name="portaTraseira_esq" id="portaTraseira_esq">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->portaTraseira_esq == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                 
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="portaTraseira_dir">Porta Traseira Direita</label>
<select type="text" class="form-control" name="portaTraseira_dir" id="portaTraseira_dir">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->portaTraseira_dir == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="luzDianteira">Luz Dianteira</label>
<select type="text" class="form-control" name="luzDianteira" id="luzDianteira">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->luzDianteira == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="luzTraseira">Luz Traseira</label>
<select type="text" class="form-control" name="luzTraseira" id="luzTraseira">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->luzTraseira == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                               
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="parachoqueTraseiro">Parachoque Traseiro</label>
<select type="text" class="form-control" name="parachoqueTraseiro" id="parachoqueTraseiro">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->parachoqueTraseiro == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="capoTraseiro">capo Traseiro</label>
<select type="text" class="form-control" name="capoTraseiro" id="capoTraseiro">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->capoTraseiro == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="giroflex">Giroflex</label>
<select type="text" class="form-control" name="giroflex" id="giroflex">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->giroflex == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="vidro">Vidros</label>
<select type="text" class="form-control" name="vidro" id="vidro">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->vidro == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="interno">Interno</label>
<select type="text" class="form-control" name="interno" id="interno">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->interno == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                 
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="impressora">Impressora</label>
<select type="text" class="form-control" name="impressora" id="impressora">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->impressora == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="smartphone">Smartphone</label>
<select type="text" class="form-control" name="smartphone" id="smartphone">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->smartphone == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                
        </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="motor">Motor</label>
<select type="text" class="form-control" name="motor" id="motor">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->motor == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                                 
        </option>  
        @endforeach 
</select>
</div>


<button type="submit" class="btn btn-primary" name="acao" value="salvar"
id="acao"> @if(isset($carrocheck->ocorrencia)) Alterar @else Salvar @endif
</button> 