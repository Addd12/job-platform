<x-layout>
    <x-slot:heading>Jobs</x-slot>
        <h1>jobs board</h1>
        <ul>
            @foreach ($jobs as $job)
                <a href="/jobs/{{$job['id']}}" class="text-blue-500 hover:underline">
                    <li>Job: {{$job['title']}} -- Salary: ${{$job['salary']}}</li>
                </a>
            @endforeach
        </ul>
</x-layout>