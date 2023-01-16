<x-layout titulo="Novo usuário">
<form method="post">
        @csrf
        <div class="form-group">
            <label for="name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="type" class="form-label">Permissão</label>
            <input type="text" name="type" id="type" class="form-control">
        </div>

        <div class="form-group">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <button class="btn btn-primary mt-3">
            Registrar
        </button>

        


    </form>
</x-layout>   