<?php
     use App\Models\Condicao;
     use App\Models\Ocorrencia;
     use App\Models\Veiculo;
     use App\Models\Guarda;
     use App\Models\Arma;
     use App\Models\Municao;
     use App\Models\Ocupante;
     use App\Models\Servico;
     use App\Models\Armas_ocor_mun;
     $servico = Servico::all();
     $ocorrencia = Ocorrencia::find($carrocheck->id);
     $arma_oco_mun = Armas_ocor_mun::where('ocorrencia_id', $ocorrencia->id)->get();
     $ocupante = Ocupante::where('ocorrencia_id', $ocorrencia->id)->get();
?>

<x-layout titulo="Carro check">
    <div class="py-1">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Motorista</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php $guarda = Guarda::find($ocorrencia->motorista) ?>
                <td>{{ $guarda->nome }}</td>
            </tr>
    </div>
    <div class="py-1">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">Ocupantes</th>
                <th scope="col">Serviço</th>
            </tr>
        </thead>
        @foreach($ocupante as $item)
        <tbody>
            <tr>
                <?php $guarda = Guarda::find($item->nome) ?>
                <td>{{ $guarda->nome }}</td>
                <?php $servico = Servico::find($item->escala) ?>
                <td>{{ $servico->tipo }}</td>
            </tr>
        </tbody>
        @endforeach
    </div>
    <div class="py-1">
        <table class="table table-success table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Data de Inicio</th>
                <th scope="col">Data Final</th>
                <th scope="col">Veículo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th> {{ $ocorrencia->id }}</th>
                @if($ocorrencia->dataInicio == null)
                  <td>{{$ocorrencia->dataInicio}}</td>
                @else
                  <td>{{ \Carbon\Carbon::parse($ocorrencia->dataInicio)->format('d/m/Y')}}</td>
                @endif
                @if($ocorrencia->dataFim == null)
                  <td>{{$ocorrencia->dataFim}}</td>
                @else
                  <td>{{ \Carbon\Carbon::parse($ocorrencia->dataFim)->format('d/m/Y')}}</td>
                @endif
                <?php $veiculo = Veiculo::find($ocorrencia->veiculo_id) ?>
                <td>{{ $veiculo->numero }}</td>
            </tr>
    </div>
    <div class="py-1">
        <table class="table table-success table-striped">
          <thead>
              <tr>
                  <th scope="col">Arma</th>
                  <th scope="col">Munições</th>
              </tr>
          </thead>
          @foreach($arma_oco_mun as $item)
            <tbody>
              <tr>
                  <?php $arma = Arma::find($item->arma_id) ?>
                  <td>{{ $arma->descricao }}</td>
                  <?php $municao = Municao::find($item->municoes_id) ?>
                  <td>{{ $municao->quantidade }}</td>
              </tr>
            </tbody>
            @endforeach
        </table>
    </div>
  <body class="p-3 m-0 border-0 bd-example bd-example-row">
    <div class="container text-center">
      <div class="row">
        <div class="col-6 col-sm-3">Ocorrencia: {{$carrocheck->id}}</div>
        <div class="col-6 col-sm-3">Km: {{$carrocheck->km}}</div>
          <?php
            $condicao = Condicao::find($carrocheck->capo);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Capo: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Capo: {{$condicao->descricao}}</div>
          @endif
          <?php
            $condicao = Condicao::find($carrocheck->paralamaDianteiro_esq);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Paralama Dianteiro Esquerdo: {{$condicao->descricao}}</div>
          @else
            <div class="col-6 col-sm-3">Paralama Dianteiro Esquerdo: {{$condicao->descricao}}</div>
          @endif
          <?php
            $condicao = Condicao::find($carrocheck->paralamaDianteiro_dir);
          ?>
        <div class="col-6 col-sm-3">Paralama Dianteiro Direito: {{$condicao->descricao}}</div>
          <?php
            $condicao = Condicao::find($carrocheck->paralamaTraseiro_esq);
          ?>
        <div class="col-6 col-sm-3">Paralama Traseiro Esquerdo: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->paralamaTraseiro_dir);
          ?>
        <div class="col-6 col-sm-3">Paralama Traseiro Direito: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->parachoqueDianteiro);
          ?>
        <div class="col-6 col-sm-3">Parachoque Dianteiro: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->portaDianteira_esq);
          ?>
        <div class="col-6 col-sm-3">Porta Dianteira Esquerda: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->portaDianteira_dir);
          ?>
        <div class="col-6 col-sm-3">Porta Dianteira Direita: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->portaTraseira_esq);
          ?>
        <div class="col-6 col-sm-3">Porta Traseira Esquerda: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->portaTraseira_dir);
          ?>
        <div class="col-6 col-sm-3">Porta Traseira Direita: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->luzDianteira);
          ?>
        <div class="col-6 col-sm-3">Luzes Dianteira: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->luzTraseira);
          ?>
        <div class="col-6 col-sm-3">Luzes Traseira: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->parachoqueTraseiro);
          ?>
        <div class="col-6 col-sm-3">Parachoque Traseiro: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->capoTraseiro);
          ?>
        <div class="col-6 col-sm-3">Capo Traseiro: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->giroflex);
          ?>
        <div class="col-6 col-sm-3">GiroFlex: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->vidro);
          ?>
        <div class="col-6 col-sm-3">Vidros: {{$condicao->descricao}}</div>
        <?php
            $condicao = Condicao::find($carrocheck->interno);
          ?>
        <div class="col-6 col-sm-3">Interno: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->impressora);
          ?>
        <div class="col-6 col-sm-3">Impressora: {{$condicao->descricao}}</div>
        <?php
            $condicao = Condicao::find($carrocheck->smartphone);
          ?>
        <div class="col-6 col-sm-3">Smartphone: {{$condicao->descricao}}</div>
         <?php
            $condicao = Condicao::find($carrocheck->motor);
          ?>
        <div class="col-6 col-sm-3">Motor: {{$condicao->descricao}}</div>
      </div>
    </div>
</body>
</x-layout>
