
<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($armas->id)) {{ $armas->id }} @endif" disabled>
</div>

<div class="mb-3">
<label for="numero">Número</label>
<input type="text" class="form-control" name="numero" id="numero"
value="@if (isset($armas->numero)) {{ $armas->numero }} @endif" >
</div>

<div class="mb-3">
<label for="descricao">Tipo da Arma</label>
<input type="text" class="form-control" name="descricao" id="descricao"
value= "@if (isset($armas->descricao)) {{ $armas->descricao }} @endif" >
</div>

<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($armas->numero)) Alterar @else Adicionar @endif
</button> 