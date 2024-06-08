<x-layout>
    <x-slot:header>register</x-slot:header>

    
    <form action="/register" method="post" >
        @csrf
        @method('post')
        <div class="space-y-12">
            

            <div class="border-b border-gray-900/10 pb-12">
               
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3">
                       <x-form-label for="first_name" >first_name</x-form-label>
                        <x-form-input type="text" name="first_name" id="first_name"></x-form-input>
                        <x-form-error name="first_name" ></x-form-error>
                    </div>
                    
                    
                    <div class="sm:col-span-3">
                        <x-form-label for="last_name" >last_name</x-form-label>
                        <x-form-input type="text" name="last_name" id="last_name"></x-form-input>
                        <x-form-error name="last_name" ></x-form-error>
                    </div>
                   
                    <div class="sm:col-span-3">
                       <x-form-label for="email" >email</x-form-label>
                        <x-form-input type="email" name="email" id="email"></x-form-input>
                        <x-form-error name="email" ></x-form-error>
                    </div>
                    
                    
                    <div class="sm:col-span-3">
                        <x-form-label for="password" >password</x-form-label>
                        <x-form-input type="password" name="password" id="password"></x-form-input>
                        <x-form-error name="password" ></x-form-error>
                    </div>
                    <div class="sm:col-span-3">
                        <x-form-label for="password_confirmation" >password_confirmation</x-form-label>
                        <x-form-input type="password" name="password_confirmation" id="password_confirmation"></x-form-input>
                        <x-form-error name="password_confirmation" ></x-form-error>
                    </div>

                  
                </div>
            </div>

            
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>


</x-layout>
