<div class="mb-3">
<label for="id">ID</label>
<input type="text"class="form-control" name="id" id="id"
value="@if (isset($condicao->id)) {{ $condicao->id }} @endif" disabled><br>
</div>

<div class="mb-3">
<label for="descricao">Condição</label>
<input type="text" class="form-control" name="descricao" id="descricao"
value="@if (isset($condicao->descricao)) {{ $condicao->descricao }} @endif" ><br>
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($condicao->descricao)) Alterar @else Salvar @endif
</button> 