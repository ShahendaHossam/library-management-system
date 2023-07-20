<div>
    <div class="w-full py-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 pb-4">{{ __('Author List') }}</h5>
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-700 text-gray-400">

                        <tr>
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Author Name</th>
                            <th scope="col" class="px-6 py-3">Author E-mail</th>
                            <th scope="col" class="px-6 py-3">Author Address</th>
                            <th scope="col" class="px-6 py-3">Author Phone</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($authors as $author)
                            <tr class="bg-white bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $author->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $author->author_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $author->author_email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $author->author_address }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $author->author_phone }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline"
                                        wire:click="edit({{ $author->id }})">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
