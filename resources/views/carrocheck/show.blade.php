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
                  <td>{{ \Carbon\Carbon::parse($ocorrencia->dataInicio)->format('d/m/Y H:i')}}</td>
                @endif
                @if($ocorrencia->dataFim == null)
                  <td>{{$ocorrencia->dataFim}}</td>
                @else
                  <td>{{ \Carbon\Carbon::parse($ocorrencia->dataFim)->format('d/m/Y H:i')}}</td>
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
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Paralama Dianteiro Direito: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Paralama Dianteiro Direito: {{$condicao->descricao}}</div>
          @endif
          <?php
            $condicao = Condicao::find($carrocheck->paralamaTraseiro_esq);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Paralama Traseiro Esquerdo: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Paralama Traseiro Esquerdo: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->paralamaTraseiro_dir);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Paralama Traseiro Direito: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Paralama Traseiro Direito: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->parachoqueDianteiro);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Parachoque Dianteiro: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Parachoque Dianteiro: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->portaDianteira_esq);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Porta Dianteira Esquerda: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Porta Dianteira Esquerda: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->portaDianteira_dir);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Porta Dianteira Direita: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Porta Dianteira Direita: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->portaTraseira_esq);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Porta Traseira Esquerda: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Porta Traseira Esquerda: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->portaTraseira_dir);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Porta Traseira Direita: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Porta Traseira Direita: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->luzDianteira);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Luzes Dianteira: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Luzes Dianteira: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->luzTraseira);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Luzes Traseira: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Luzes Traseira: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->parachoqueTraseiro);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Parachoque Traseiro: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Parachoque Traseiro: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->capoTraseiro);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Capo Traseiro: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Capo Traseiro: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->giroflex);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">GiroFlex: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">GiroFlex: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->vidro);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Vidros: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Vidros: {{$condicao->descricao}}</div>
          @endif
        <?php
            $condicao = Condicao::find($carrocheck->interno);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Interno: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Interno: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->impressora);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Impressora: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Impressora: {{$condicao->descricao}}</div>
          @endif
        <?php
            $condicao = Condicao::find($carrocheck->smartphone);
          ?>
          @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Smartphone: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Smartphone: {{$condicao->descricao}}</div>
          @endif
         <?php
            $condicao = Condicao::find($carrocheck->motor);
          ?>
           @if($condicao->descricao != "Ok")
              <div class="col-6 col-sm-3 text-danger">Motor: {{$condicao->descricao}}</div>
          @else       
              <div class="col-6 col-sm-3 ">Motor: {{$condicao->descricao}}</div>
          @endif
      </div>
    </div>
</body>
</x-layout>
