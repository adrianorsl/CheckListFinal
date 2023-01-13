<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($veiculo->id)) {{ $veiculo->id }} @endif" disabled><br>
</div>

<div class="mb-3">
<label for="placa">Placa</label>
<input type="text" class="form-control" name="placa" id="placa"
value="@if (isset($veiculo->placa)) {{ $veiculo->placa }} @endif" ><br>
</div>

<div class="mb-3">
<label for="numero">Número</label>
<input type="text" class="form-control" name="numero" id="numero"
value="@if (isset($veiculo->numero)) {{ $veiculo->numero }} @endif" ><br>
</div>


<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($veiculo->placa)) Alterar @else Salvar @endif
</button> 