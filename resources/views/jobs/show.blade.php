<x-layout>
    <x-slot:heading>Jobs</x-slot>
        <h1>Job</h1>
        <h2 class="font-bold text-lg">{{$job->title}}</h2>
        <p>This job pays ${{$job->salary}} per year.</p>

        <p class="mt-6">
            <x-button href="/jobs/{{$job->id}}/edit">Edit job</x-button>
        </p>
</x-layout>