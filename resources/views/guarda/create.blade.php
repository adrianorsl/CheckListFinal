

<x-layout titulo="Novo Guarda">

    <form action=" {{ route('guarda.store') }}" method="post">
        @method("POST")
        @csrf

        @include('guarda.form')
        
    </form>

</x-layout>