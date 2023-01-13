<?php 
    use App\Models\Guarda;
    use App\Models\Ocorrencia;
    use App\Models\Servico;
    $guarda = Guarda::all();
    $servico = Servico::all();
    $ocorrencia = Ocorrencia::all();
    $oco = Ocorrencia::latest()->first();
?>

<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($ocorrencia->id)) {{ $ocorrencia->id }} @endif" disabled>
</div>

<div class="mb-3">
<label for="nome">nome</label>
<select type="int" class="form-control" name="nome" id="nome">
        @foreach($guarda as $item)    
            <option value="{{$item->id}}">
                {{$item->nome}}                                                       
            </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<label for="escala">Horário</label>
<select type="int" class="form-control" name="escala" id="escala">
        @foreach($servico as $item)    
            <option value="{{$item->id}}">
                {{$item->tipo}}                                                       
            </option>  
        @endforeach 
</select>
</div>

<div class="mb-3">
<input type="int" class="form-control" name="ocorrencia_id" id="ocorrencia_id"
 value= "{{ $oco->id }}"readonly="readonly"> 
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($ocorrencia->horario)) Alterar @else Salvar @endif
</button> 

<a href=  '/municao'  class="btn btn-primary"> Continuar</a>