<x-layout>
    <div class="d-flex justify-content-between align-items-center my-4">
        <h1>
            Hello from Jobs page
        </h1>
        @auth
        <a href="/jobs/create" class="btn btn-success">
            add New Job
        </a>
        @endauth
    </div>
    <ul class="row gy-2 list-unstyled">
        @foreach($jobs as $job)
            <li class="col-md-4">
                <a href="/jobs/{{ $job['id'] }}" class="text-decoration-none btn btn-sm btn-outline-secondary w-100 h-100">
                    <h2 class="h6 mb-3">
                        {{ $job->employer->name }}
                    </h2>
                    <h2 class="h4">
                        {{ $job['title'] }}
                    </h2>
                    <div class="fs-5">
                        receives <b class="text-success">R$ {{ $job['salary'] }}</b> per year
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
    <div>
        {{ $jobs->links() }}
    </div>
</x-layout>
