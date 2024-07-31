<x-layout>
    <div class="bg-body-secondary">
        <h1>
            Login
        </h1>

        <form method="POST" action="/login">
            @csrf

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

            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" class="btn btn-primary">
                    Login
                </button>

                <a href="/register">
                    não tem uma conta? crie uma
                </a>
            </div>
        </form>
    </div>
</x-layout>
