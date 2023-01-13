<x-layout titulo="Veículo">

    <form action=" {{ route('veiculo.store') }}" method="post">
        @method("POST")
        @csrf

        @include('veiculo.form')
    </form>

</x-layout>