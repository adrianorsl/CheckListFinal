<?php
    use App\Models\Condicao;
    use App\Models\Guarda;
    use App\Models\Carrocheck;
    $condicao = Condicao::all(); 
    $guarda = Guarda::all();
?>

<x-layout titulo="Carro check">
  <body>
    @foreach($carrocheck as $item)
      <a href="{{ route('carrocheck.create') }}" class="btn btn-primary" >Adicionar</a>
      <a href="{{ route('carrocheck.show', $item->id) }}" class="btn btn-info" >Detalhes</a> 
    @endforeach
        <div class="py-4">
            <form action="{{ route('carrocheck.index') }}" method="get">
                @method('GET')
                <input type="text" name="find" id="find"><input type="submit" value="OK">
            </form>
        </div>
</body>
<ul class="pagination">
@foreach($carrocheck as $item)
    <body class="p-3 m-0 border-0 bd-example bd-example-row">
    <div class="container text-center">
      <div class="row">
      
        <div class="col-6 col-sm-3">Ocorrencia: {{$item->id}}</div>
        <div class="col-6 col-sm-3">Km: {{$item->km}}</div>
          <?php $condicao = Condicao::find($item->capo);?>
        <div class="col-6 col-sm-3">Capo: {{$condicao->descricao}}</div>
          <?php
            $condicao = Condicao::find($item->paralamaDianteiro_esq);
          ?>
        <div class="col-6 col-sm-3">Paralama Dianteiro Esquerdo: {{$condicao->descricao}}</div>
          <?php
            $condicao = Condicao::find($item->paralamaDianteiro_dir);
          ?>
        <div class="col-6 col-sm-3">Paralama Dianteiro Direito: {{$condicao->descricao}}</div>
          <?php
            $condicao = Condicao::find($item->paralamaTraseiro_esq);
          ?>
        <div class="col-6 col-sm-3">Paralama Traseiro Esquerdo: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->paralamaTraseiro_dir);
          ?>
        <div class="col-6 col-sm-3">Paralama Traseiro Direito: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->parachoqueDianteiro);
          ?>
        <div class="col-6 col-sm-3">Parachoque Dianteiro: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->portaDianteira_esq);
          ?>
        <div class="col-6 col-sm-3">Porta Dianteira Esquerda: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->portaDianteira_dir);
          ?>
        <div class="col-6 col-sm-3">Porta Dianteira Direita: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->portaTraseira_esq);
          ?>
        <div class="col-6 col-sm-3">Porta Traseira Esquerda: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->portaTraseira_dir);
          ?>
        <div class="col-6 col-sm-3">Porta Traseira Direita: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->luzDianteira);
          ?>
        <div class="col-6 col-sm-3">Luzes Dianteira: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->luzTraseira);
          ?>
        <div class="col-6 col-sm-3">Luzes Traseira: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->parachoqueTraseiro);
          ?>
        <div class="col-6 col-sm-3">Parachoque Traseiro: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->capoTraseiro);
          ?>
        <div class="col-6 col-sm-3">Capo Traseiro: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->giroflex);
          ?>
        <div class="col-6 col-sm-3">GiroFlex: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->vidro);
          ?>
        <div class="col-6 col-sm-3">Vidros: {{$condicao->descricao}}</div>
        <?php
            $condicao = Condicao::find($item->interno);
          ?>
        <div class="col-6 col-sm-3">Interno: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->impressora);
          ?>
        <div class="col-6 col-sm-3">Impressora: {{$condicao->descricao}}</div>
        <?php
            $condicao = Condicao::find($item->smartphone);
          ?>
        <div class="col-6 col-sm-3">Smartphone: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($item->motor);
          ?>
        <div class="col-6 col-sm-3">Motor: {{$condicao->descricao}}</div>
        @endforeach  
      </div> 
      {{ $carrocheck ?? ''->appends([
            'find' => request()->get('find','')
            ])->links() }}
    </ul>
        </body>
</x-layout>