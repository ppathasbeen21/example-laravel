<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="h6 mb-3">
        {{ $job->employer->name }}
    </h2>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays <b class="text-success">R$ {{ $job['salary'] }}</b> per year.
    </p>

    <a href="/jobs/{{ $job->id }}/edit" class="btn btn-outline-warning mt-5">
        Edit Job
    </a>
</x-layout>
