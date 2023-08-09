<?php
    use App\Models\Condicao;
    use App\Models\Guarda;
    use App\Models\Carrocheck;
    use App\Models\Veiculo;
    use App\Models\Ocorrencia;
    $condicao = Condicao::all(); 
    $guarda = Guarda::all();
    
?>

<x-layout titulo="Carro check">
  <body>
    @foreach($carrocheck as $item)
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
  <?php $ocorrencia = Ocorrencia::find($item->id);?>
    <body class="p-3 m-0 border-0 bd-example bd-example-row">
    <div class="container text-center">
      <div class="row">
        <?php $veiculo = Veiculo::find($ocorrencia->veiculo_id) ?>
        <div class="col-6 col-sm-3">Viatura: {{$veiculo->numero}}</div>
        <?php $guarda = Guarda::find($ocorrencia->motorista) ?>
        <div class="col-6 col-sm-3">Motorista: {{$guarda->nome}}</div>
        @if($ocorrencia->dataInicio == null)
         
        @else
          <div class="col-6 col-sm-3">Data Inicio: {{ \Carbon\Carbon::parse($ocorrencia->dataInicio)->format('d/m/Y H:i')}}</div>
        @endif

        @if($ocorrencia->dataFim == null)
          
        @else
          <div class="col-6 col-sm-3">Data Fim:{{ \Carbon\Carbon::parse($ocorrencia->dataFim)->format('d/m/Y H:i')}}</div>
        @endif
        <div class="col-6 col-sm-3">Km: {{$item->km}}</div>

          <?php $condicao = Condicao::find($item->capo);?>
          @if($condicao->descricao != "Ok")  
            <div class="col-6 col-sm-3 text-danger">Capo: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Capo: {{$condicao->descricao}}</div>
          @endif

          <?php
            $condicao = Condicao::find($item->paralamaDianteiro_esq);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Paralama Dianteiro Esquerdo: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Paralama Dianteiro Esquerdo: {{$condicao->descricao}}</div>
          @endif

          <?php
            $condicao = Condicao::find($item->paralamaDianteiro_dir);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Paralama Dianteiro Direito: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Paralama Dianteiro Direito: {{$condicao->descricao}}</div>
          @endif
  
          <?php
            $condicao = Condicao::find($item->paralamaTraseiro_esq);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Paralama Traseiro Esquerdo: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Paralama Traseiro Esquerdo: {{$condicao->descricao}}</div>
          @endif
         
         <?php
            $condicao = Condicao::find($item->paralamaTraseiro_dir);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Paralama Traseiro Direito: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Paralama Traseiro Direito: {{$condicao->descricao}}</div>
          @endif
        
         <?php
            $condicao = Condicao::find($item->parachoqueDianteiro);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Parachoque Dianteiro: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Parachoque Dianteiro: {{$condicao->descricao}}</div>
          @endif

         <?php
            $condicao = Condicao::find($item->portaDianteira_esq);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Porta Dianteira Esquerda: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Porta Dianteira Esquerda: {{$condicao->descricao}}</div>
          @endif
        
         <?php
            $condicao = Condicao::find($item->portaDianteira_dir);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Porta Dianteira Direita: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Porta Dianteira Direita: {{$condicao->descricao}}</div>
          @endif
       
         <?php
            $condicao = Condicao::find($item->portaTraseira_esq);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Porta Traseira Esquerda: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Porta Traseira Esquerda: {{$condicao->descricao}}</div>
          @endif
       
         <?php
            $condicao = Condicao::find($item->portaTraseira_dir);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Porta Traseira Direita: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Porta Traseira Direita: {{$condicao->descricao}}</div>
          @endif
        
         <?php
            $condicao = Condicao::find($item->luzDianteira);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Luzes Dianteira: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Luzes Dianteira: {{$condicao->descricao}}</div>
          @endif

          <?php
            $condicao = Condicao::find($item->roda);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Pneus e Rodas: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Pneus e Rodas: {{$condicao->descricao}}</div>
          @endif
       
         <?php
            $condicao = Condicao::find($item->luzTraseira);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Luzes Traseira: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Luzes Traseira: {{$condicao->descricao}}</div>
          @endif
       
         <?php
            $condicao = Condicao::find($item->parachoqueTraseiro);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Parachoque Traseiro: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Parachoque Traseiro: {{$condicao->descricao}}</div>
          @endif
        
         <?php
            $condicao = Condicao::find($item->capoTraseiro);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Capo Traseiro: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Capo Traseiro: {{$condicao->descricao}}</div>
          @endif
       
         <?php
            $condicao = Condicao::find($item->giroflex);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">GiroFlex: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">GiroFlex: {{$condicao->descricao}}</div>
          @endif
        
         <?php
            $condicao = Condicao::find($item->vidro);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Vidros: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Vidros: {{$condicao->descricao}}</div>
          @endif
        

        <?php
            $condicao = Condicao::find($item->interno);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Interno: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Interno: {{$condicao->descricao}}</div>
          @endif
        
         <?php
            $condicao = Condicao::find($item->impressora);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Impressora: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Impressora: {{$condicao->descricao}}</div>
          @endif
       
        <?php
            $condicao = Condicao::find($item->smartphone);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Smartphone: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Smartphone: {{$condicao->descricao}}</div>
          @endif
        
         <?php
            $condicao = Condicao::find($item->motor);
          ?>
          @if($condicao->descricao != "Ok")
            <div class="col-6 col-sm-3 text-danger">Motor: {{$condicao->descricao}}</div>
          @else 
            <div class="col-6 col-sm-3">Motor: {{$condicao->descricao}}</div>
          @endif
          <br><br>
         
        
        @endforeach  
      </div> 
      {{ $carrocheck ?? ''->appends([
            'find' => request()->get('find','')
            ])->links() }}
    </ul>
        </body>
</x-layout>