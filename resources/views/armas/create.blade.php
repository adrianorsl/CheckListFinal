

<x-layout titulo="Nova Arma">

    <form action=" {{ route('arma.store') }}" method="post">
        @method("POST")
        @csrf

        @include('armas.form')
        
    </form>

</x-layout>