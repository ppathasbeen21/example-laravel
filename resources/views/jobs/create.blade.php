<x-layout>
    <div class="bg-body-secondary">

        <h1>
            Create Job
        </h1>


        <form method="POST" action="/jobs">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">
                    Titulo
                </label>
                <input type="text" class="form-control" name="title" id="title"
                       placeholder="Titulo">
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">
                    Salario
                </label>
                <input type="text" class="form-control" name="salary" id="salary"
                       placeholder="Salario">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</x-layout>
