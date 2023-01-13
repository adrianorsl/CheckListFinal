

<x-layout titulo="Novo Check-List">

    <form action=" {{ route('ocorrencia.store') }}" method="post">
        @method("POST")
        @csrf

        @include('ocorrencia.form')
        
    </form>

</x-layout>