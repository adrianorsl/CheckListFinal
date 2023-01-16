<x-layout titulo="Login">
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-primary mt-3">
            Entrar
        </button>

        <a href= "{{route('users.create')}}" button class="btn btn-secundary mt-3">
            Registrar
        </button>
        </a>


    </form>
</x-layout>   