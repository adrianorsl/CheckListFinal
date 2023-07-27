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
    $u = $oco->id;
    $arma = Arma::all();
    $municao = Municao::all();
    $guarda = Guarda::all();
    $veiculo = Veiculo::where('id',$oco->veiculo_id)->value('id');
    $vtr = Veiculo::where('id',$oco->veiculo_id)->value('numero');
    $oco2 = Ocorrencia::where('veiculo_id', $veiculo)->latest()->skip(1)->first();
    $t = $oco2->id;
    $carrocheck = Carrocheck::where('id', $t )->first();
    $r = 1;
    while(is_null($carrocheck)){
       $r++; 
       $oco2 = Ocorrencia::where('veiculo_id', $veiculo)->latest()->skip($r)->first();
       $t = $oco2->id;
       $carrocheck = Carrocheck::where('id', $t )->first();
    }
   
?>


<div class="mb-3">
<label for="id">Id</label>
<input type="int" class="form-control" name="id" id="id"
value="{{ $oco->id }}" >
</div>


<div class="mb-3">
<label for="km">Km</label>
<input  type="text" class="form-control" name="km" id="km" ]
value="@if (isset($carrocheck->km)) {{ $carrocheck->km }} @endif" ><br>
</div>

<div class="col text-center">
    <img src="{{ asset('photos/capo'.$vtr.'.png') }}" class="img-fluid"> 
</div>
<div class="mb-3">
<label for="capo"><h2>Capo<h2></label>
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

<div class="col text-center">
    <img src="{{ asset('photos/frente'.$vtr.'.png') }}" class="img-fluid"> 
</div>
<div class="mb-3">
<label for="parachoqueDianteiro"><h2>Parachoque Dianteiro<h2></label>
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
<label for="luzDianteira"><h2>Luz Dianteira<h2></label>
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

<div class="col text-center">
    <img src="{{ asset('photos/lateralesq'.$vtr.'.png') }}" class="img-fluid"> 
</div>
<div class="mb-3">
<label for="paralamaDianteiro_esq"><h2>Paralama Dianteiro Esquerdo<h2></label>  
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
<label for="portaDianteira_esq"><h2>Porta Dianteira Esquerda<h2></label>
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
<label for="portaTraseira_esq"><h2>Porta Traseira Esquerda<h2></label>
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
<label for="paralamaTraseiro_esq"><h2>Paralama Traseiro Esquerdo<h2></label>
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
<label for="roda"><h2>Pneus e Rodas<h2></label>
<select type="text" class="form-control" name="roda" id="roda">
    @foreach($condicao as $item)    
        <option value="{{$item->id}}"
        @if ($carrocheck->roda == $item->id)
             {{'selected'}} 
        @endif >   
        {{$item->descricao}}                                               
        </option>  
    @endforeach 
</select>
</div>

<div class="col text-center">
    <img src="{{ asset('photos/traseira'.$vtr.'.png') }}" class="img-fluid"> 
</div>
<div class="mb-3">
<label for="luzTraseira"><h2>Luz Traseira<h2></label>
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
<label for="parachoqueTraseiro"><h2>Parachoque Traseiro<h2></label>
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
<label for="capoTraseiro"><h2>capo Traseiro<h2></label>
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

<div class="col text-center">
    <img src="{{ asset('photos/lateraldir'.$vtr.'.png') }}" class="img-fluid"> 
</div>
<div class="mb-3">
<label for="paralamaDianteiro_dir"><h2>Paralama Dianteiro Direito<h2></label>
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
<label for="portaDianteira_dir"><h2>Porta Dinteira Direita<h2></label>
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
<label for="portaTraseira_dir"><h2>Porta Traseira Direita<h2></label>
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
<label for="paralamaTraseiro_dir"><h2>Paralama Traseiro Direito<h2></label>
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

<div class="col text-center">
    <img src="{{ asset('photos/giroflex'.$vtr.'.png') }}" class="img-fluid"> 
</div>
<div class="mb-3">
<label for="giroflex"><h2>Giroflex<h2></label>
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
<label for="vidro"><h2>Vidros<h2></label>
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

<div class="col text-center">
    <img src="{{ asset('photos/internof'.$vtr.'.png') }}" class="img-fluid"> 
    <img src="{{ asset('photos/internot'.$vtr.'.png') }}" class="img-fluid"> 
</div>
<div class="mb-3">
<label for="interno"><h2>Interno<h2></label>
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


<div class="col text-center">
    <img src="{{ asset('photos/smartphonef'.$vtr.'.png') }}" class="img-fluid">
    <img src="{{ asset('photos/smartphonet'.$vtr.'.png') }}" class="img-fluid"> 
</div>
<div class="mb-3">
<label for="impressora"><h2>Impressora<h2></label>
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
<label for="smartphone"><h2>Smartphone<h2></label>
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
<label for="motor"><h2>Motor<h2></label>
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