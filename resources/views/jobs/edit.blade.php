<x-layout>
    <div class="bg-body-secondary">
        <h1>
            Edit Job : post {{ $job->title }}
        </h1>

        <form method="POST" action="/jobs/{{ $job->id }}">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label for="title" class="form-label">
                    Titulo
                </label>
                <input required type="text" class="form-control" name="title" id="title" value="{{ $job->title }}" >
                @error('title')
                <b class="text-danger">
                    {{ $message }}
                </b>
                @enderror
            </div>
            <div class="mb-3">
                <label for="salary" class="form-label">
                    Salario
                </label>
                <input required type="text" class="form-control" name="salary" id="salary" value="{{ $job->salary }}" >
                @error('salary')
                <b class="text-danger">
                    {{ $message }}
                </b>
                @enderror
            </div>
            <div class="d-flex justify-content-between">
                <button form="delete-form" type="delete" class="btn btn-danger">
                    Delete
                </button>
                <div>
                    <a href="/jobs/{{ $job->id }}" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
    <form method="POST" id="delete-form" action="/jobs/{{ $job->id }}" class="d-none">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
