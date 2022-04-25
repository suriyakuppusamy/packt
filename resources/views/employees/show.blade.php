<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      
    
            <div class="card-body">
            <h5 class="card-title">Name : {{ $employees->name }}</h5>
            <p class="card-text">Email : {{ $employees->email }}</p>
            <p class="card-text">Gender : {{ $employees->gender }}</p>
            <p class="card-text">Address Line 1 : {{ $employees->address_line1 }}</p>
            <p class="card-text">Address Line 2 : {{ $employees->address_line2 }}</p>
            <p class="card-text">City : {{ $employees->city }}</p>
            <p class="card-text">Country : {{ $employees->country }}</p>
      </div>
          
        </hr>
      
</div>
</x-app-layout>