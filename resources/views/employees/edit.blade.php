<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

    <div class="card">
      <div class="card-body">
          
          <form action="{{ url('employees/' .$employees->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
            <label>Name</label></br>
            <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{$employees->email}}" class="form-control"></br>
            <label>Gender</label></br>
            <input type="text" name="gender" id="gender" value="{{$employees->gender}}" class="form-control"></br>
            <label>Address Line 1</label></br>
            <input type="text" name="address_line1" id="address_line1" value="{{$employees->address_line1}}" class="form-control"></br>
            <label>Address Line 2</label></br>
            <input type="text" name="address_line2" id="address_line2" value="{{$employees->address_line2}}" class="form-control"></br>
            <label>City	</label></br>
            <input type="text" name="city" id="city" value="{{$employees->city	}}" class="form-control"></br>
            <label>Country	</label></br>
            <input type="text" name="country" id="country" value="{{$employees->country	}}" class="form-control"></br>
            </br><input type="submit" value="Update" class="text-indigo-600 hover:text-indigo-900"></br>
        </form>
      
      </div>
    </div>
    
    </div>
</div>
</x-app-layout>