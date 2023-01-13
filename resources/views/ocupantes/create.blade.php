

<x-layout titulo="Novo Check-List">

    <form action=" {{ route('ocupante.store') }}" method="post">
        @method("POST")
        @csrf

        @include('ocupantes.form')
        
    </form>

</x-layout>