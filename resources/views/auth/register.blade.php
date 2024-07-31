<x-layout>
    <div class="bg-body-secondary">
        <h1>
            Crie sua conta
        </h1>

        <form method="POST" action="/register">
            @csrf
            <div class="mb-3">
                <label for="first_name" class="form-label">
                    Nome
                </label>
                <input required type="text" class="form-control" name="first_name" id="first_name"
                       placeholder="Nome">
                @error('first_name')
                <b class="text-danger">
                    {{ $message }}
                </b>
                @enderror
            </div>
            <div class="mb-3">
                <label for="last_name" class="form-label">
                    Sobrenome
                </label>
                <input required type="text" class="form-control" name="last_name" id="last_name"
                       placeholder="Sobrenome">
                @error('last_name')
                <b class="text-danger">
                    {{ $message }}
                </b>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">
                    E-mail
                </label>
                <input required type="email" class="form-control" name="email" id="email"
                       placeholder="E-mail">
                @error('email')
                <b class="text-danger">
                    {{ $message }}
                </b>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">
                    Senha
                </label>
                <input required type="password" class="form-control" name="password" id="password"
                       placeholder="Senha">
                @error('password')
                <b class="text-danger">
                    {{ $message }}
                </b>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password_confirmation" class="form-label">
                    Confirme sua senha
                </label>
                <input required type="password" class="form-control" name="password_confirmation" id="password_confirmation"
                       placeholder="Confirme sua senha">
                @error('password_confirmation')
                <b class="text-danger">
                    {{ $message }}
                </b>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Registrar
            </button>
        </form>
    </div>
</x-layout>
