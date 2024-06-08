<x-layout>
    <x-slot:header>Edit</x-slot:header>

    <form action="/job" method="post">
        @csrf
        @method('post')
        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">

                        <x-form-label for="title">title</x-form-label>
                        <x-form-input type="text" name="title" id="title"
                            value="{{ $job->title }}"></x-form-input>
                        <x-form-error name="title"></x-form-error>

                    </div>


                    <div class="sm:col-span-3">

                        <x-form-label for="salary">salary</x-form-label>
                        <x-form-input type="text" name="salary" id="salary"
                            value="{{ $job->salary }}"></x-form-input>
                        <x-form-error name="salary"></x-form-error>

                    </div>


                </div>
            </div>

        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            {{-- <button class="text-sm font-semibold text-gray-900">Cancel</button> --}}
            <a href="/job/{{$job->id}}" class="text-sm font-semibold text-gray-900">Cancel</a>
            <x-form-button>save</x-form-button>
        </div>
    </form>

</x-layout>
