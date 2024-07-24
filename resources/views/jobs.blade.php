<x-layout>
    <h1>
        Hello from Jobs page
    </h1>
    <ul class="row gy-1 list-unstyled">
        @foreach($jobs as $job)
            <li class="col-md-auto">
                <a href="/jobs/{{ $job['id'] }}" class="text-decoration-none btn btn-sm btn-info">
                    <h2 class="h5">
                        {{ $job['title'] }}
                    </h2>
                    <div>
                        receives {{ $job['salary'] }} per year
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
