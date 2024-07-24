<x-layout>
    <h1>
        Hello from Jobs page
    </h1>
    <ul class="row gy-2 list-unstyled">
        @foreach($jobs as $job)
            <li class="col-md-3">
                <a href="/jobs/{{ $job['id'] }}" class="text-decoration-none btn btn-sm btn-outline-secondary w-100 h-100">
                    <h2 class="h6 mb-3">
                        {{ $job->employer->name }}
                    </h2>
                    <h2 class="h4">
                        {{ $job['title'] }}
                    </h2>
                    <div class="fs-5">
                        receives {{ $job['salary'] }} per year
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
