<x-layout>
    <x-slot:heading>Jobs</x-slot>
        <h1 class="text-center font-light text-lg">Jobs board</h1>
        <div class="space-y-4">
            @foreach ($jobs as $job)
                <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <div class="font-bold text-blue-500 text-sm">
                    {{$job->employer->name}}
                </div>    
                <div>
                        <strong>Job: {{$job['title']}}</strong> Salary: {{$job['salary']}}
                    </div>
                </a>
            @endforeach
        </div>
</x-layout>