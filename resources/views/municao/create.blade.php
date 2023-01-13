<x-layout titulo="Novo Tipo de Munição">

    <form action=" {{ route('municao.store') }}" method="post">
        @method("POST")
        @csrf

        @include('municao.form')
    </form>

</x-layout>