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
</x-layout>
