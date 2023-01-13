<x-layout titulo="Nova Condição">

    <form action=" {{ route('condicao.store') }}" method="post">
        @method("POST")
        @csrf

        @include('condicao.form')
    </form>

</x-layout>