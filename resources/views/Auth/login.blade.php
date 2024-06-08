<x-layout>
    <x-slot:header>Login</x-slot:header>

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <form action="/login" method="post" >
        @csrf
        @method('patch')
        <div class="space-y-12">
            

            <div class="border-b border-gray-900/10 pb-12">
               
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
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

                  
                </div>
            </div>

            
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            
            <x-form-button>save</x-form-button>
        </div>
    </form>


</x-layout>
