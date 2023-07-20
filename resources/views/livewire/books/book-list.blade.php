<div>
    <div
        class="w-full py-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 pb-4">{{ __('Author List') }}</h5>
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-700 text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Book Name</th>
                            <th scope="col" class="px-6 py-3">Category Name</th>
                            <th scope="col" class="px-6 py-3">Author Name</th>
                            <th scope="col" class="px-6 py-3">Publisher Name</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr class="bg-white bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $book->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $book->book_name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->category ? $book->category->category_name : $book->category->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->author ? $book->author->author_name : $book->author->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->publisher ? $book->publisher->publisher_name : $book->publisher->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book->status }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline"
                                        wire:click="edit({{ $book->id }})">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
