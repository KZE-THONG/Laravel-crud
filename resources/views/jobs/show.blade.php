<x-layout>
    <x-slot:header>Show</x-slot:header>
    <div class="border-b border-gray-900/10 py-12">

        <h1 class="font-bold">Title: {{ $job->title }}</h1>
        <p>Salary: {{ $job->salary }}</p>

    </div>
    <div class="mt-6 flex justify-between items-center justify-end gap-x-6">
        <button form="form-delete" class="text-red-500 font-bold">Delete</button>
        <div class="gap-x-6" >

            <a href="/job" class="m-3 font-semibold">back</a>
            <a href="/job/{{ $job->id }}/edit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Edit</a>
        </div>
    </div>

    <form action="/job/{{ $job->id }} " method="post" id="form-delete">
        @csrf
        @method('delete')

    </form>



</x-layout>
