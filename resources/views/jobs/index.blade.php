<x-layout>
    <x-slot:header>Jobs</x-slot:header>
    @foreach ($jobs as $job)
        <div class=" m-3 px-4 py-4 bg-gray-200">

            <a href="/job/{{$job->id}}">

                <h1 class="font-bold text-blue-800"> Employer: {{$job->employer->user->first_name}} ||  Title: {{ $job->title }}</h1>
                <p>{{ $job->salary }}</p>
                
            </a>
        </div>
    @endforeach

    {{ $jobs->links() }}

</x-layout>
