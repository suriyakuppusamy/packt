<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee List Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <a href="{{ url('/employees/create') }}" class="text-indigo-600 hover:text-indigo-900" title="Add New student">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New
        </a>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
            <th scope="col" class="relative px-6 py-3">
                #
              </th>
              <th scope="col" class="relative px-6 py-3">
                Name
              </th>
              <th scope="col" class="relative px-6 py-3">
                Email
              </th>
              <th scope="col" class="relative px-6 py-3">
                Gender
              </th>
              <th scope="col" class="relative px-6 py-3">
                status
              </th>
              <th scope="col" class="relative px-6 py-3">
                Address Line 1
              </th>
              <th scope="col" class="relative px-6 py-3">
                Address Line 2
              </th>
              <th scope="col" class="relative px-6 py-3">
                City
              </th>
              <th scope="col" class="relative px-6 py-3">
                Country
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Action</span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($employees as $item)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                    {{ $loop->iteration }}
                    </div>
                    
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-1200">
              {{ $item->name }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $item->email }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $item->gender }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $item->status }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $item->address_line1 }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $item->address_line2 }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $item->city }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $item->country }}
              </td>
              </td>
              
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <a class="text-indigo-600 hover:text-indigo-900" href="{{ url('/employees/' . $item->id) }}" title="View Company"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
              <a class="text-indigo-600 hover:text-indigo-900" href="{{ url('/employees/' . $item->id . '/edit') }}" title="Edit Company"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                <form method="POST" action="{{ url('/employees' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit" class="text-indigo-600 hover:text-indigo-900" title="Delete student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
              </td>
            </tr>
            @endforeach
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
</div>
</x-app-layout>
