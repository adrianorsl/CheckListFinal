
<div class="mb-3">
<label for="id">ID</label>
<input type="text" class="form-control" name="id" id="id"
value="@if (isset($guarda->id)) {{ $guarda->id }} @endif" disabled>
</div>

<div class="mb-3">
<label for="nome">Nome</label>
<input type="text" class="form-control" name="nome" id="nome"
value="@if (isset($guarda->nome)) {{ $guarda->nome }} @endif" >
</div>


<button type="submit" class="btn btn-warning" name="acao" value="salvar"
id="acao"> @if(isset($guarda->nome)) Alterar @else Salvar @endif
</button> 