<?php 
    use App\Models\Veiculo;
    use App\Models\Armas;
    use App\Models\Condicao;
    use App\Models\Guarda;
    $condicao = Condicao::all();
    $veiculo = Veiculo::all();
    $guarda = Guarda::all();
?>

<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($ocorrencia->id)) {{ $ocorrencia->id }} @endif" disabled>
</div>

<div class="mb-3">
<label for="motorista">Motorista</label>
<select type="text" class="form-control" name="motorista" id="motorista">
        @foreach($guarda as $item)    
            <option value="{{$item->id}}">
                {{$item->nome}}                                                       
            </option>  
        @endforeach 
</select>
</div>
<?php
    $timezone = new DateTimeZone('America/Sao_Paulo');
    $agora = new DateTime('now', $timezone);
?>

<div class="mb-3">
<input type="checkbox" name="dataInicio" id="dataInicio" value= "{{ $agora->format('Y/m/d H:i') }}" >
<label for="dataInicio">Inicio</label><br>
<input type="checkbox" name="dataFim" id="dataFim" value= "{{ $agora->format('Y/m/d H:i') }}" >
<label for="dataFim">Fim</label>
</div>


<div class="mb-3">
<label for="veiculo_id">Viatura</label>
<select type="text" class="form-control" name="veiculo_id" id="veiculo_id">
    @if(empty($_POST))
        @foreach($veiculo as $item)    
            <option value="{{$item->id}}">
                {{$item->numero}}                                                       
            </option>  
        @endforeach 
    @else
        <?php
            $veiculo2 = Veiculo::find($ocorrencia->veiculo_id);
            $array = array($veiculo2);
            foreach($veiculo as $item){
                if($item->id == $ocorrencia->veiculo_id){

                }else{
                    array_push($array, $item);
                }
            }
        ?>
        @foreach($array as $item)    
            <option value="{{$item->id}}">
                {{$item->numero}}                                                       
            </option>  
        @endforeach 
    @endif
</select>
</div>



<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($ocorrencia->dataInicio)) Alterar @else Salvar @endif
</button> 