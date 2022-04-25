<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
        @if($errors)
          @foreach($errors->all() as $errors)
          <li style="color:red">
              {{$errors}}
            </li>
            @endforeach
          @endif

            <form action="{{ url('employees') }}" method="post">
              {!! csrf_field() !!}
          <label>name*</label></br>
          <input type="text" name="name" id="name" class="form-control"></br>
          <label>Email</label></br>
          <input type="text" name="email" id="email" class="form-control"></br>
          <label>Password</label></br>
          <input type="text" name="password" id="password" class="form-control"></br>
          <label>Gender</label></br>
          <input type="text" name="gender" id="gender" class="form-control"></br>
          <label>Address Line 1</label></br>
          <input type="text" name="address_line1" id="address_line1" class="form-control"></br>
          <label>Address Line 2</label></br>
          <input type="text" name="address_line2" id="address_line2" class="form-control"></br>
          <label>City</label></br>
          <input type="text" name="city" id="city" class="form-control"></br>
          <label>Country</label></br>
          <input type="text" name="country" id="country" class="form-control"></br>

          </br><input type="submit" value="Save" class="text-indigo-600 hover:text-indigo-900"></br>
        </form>
    
    </div>
  </div>
 
</div>
</div>
</x-app-layout>