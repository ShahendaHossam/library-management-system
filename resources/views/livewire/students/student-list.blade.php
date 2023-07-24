<div>
    <div
        class="w-full py-4 text-center bg-white shadow-md border-gray-200 rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">
        <div>
            <h5 class="mb-2 text-3xl font-bold text-gray-900 pb-4">{{ __('Students List') }}</h5>
        </div>

        <div class="flex items-center justify-between pb-4">
            <label for="table-search" class="sr-only">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500 text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="table-search"
                    class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Search for items">
            </div>

            <div>
                <a type="button" href="{{route('student.create')}}"
                    class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 bg-green-600 hover:bg-green-700 focus:ring-green-800" >{{ __('Add Student') }}</a>
            </div>
        </div>
        <div class="items-center justify-center">
            <div class="relative overflow-x-auto  sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50  text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Student Name</th>
                            <th scope="col" class="px-6 py-3">Student Phone</th>
                            <th scope="col" class="px-6 py-3">Student Gender</th>
                            <th scope="col" class="px-6 py-3">Student E-mail</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="bg-white border-b bg-gray-800 hover:bg-gray-50">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $student->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $student->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $student->phone }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $student->gender }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $student->email }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline"
                                        wire:click="edit({{ $student->id }})">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
