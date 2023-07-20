<div>
    <div
        class="w-full py-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 bg-gray-800 border-gray-700">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 pb-4">{{ __('Book Issue List') }}</h5>
        <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-700 text-gray-400">

                        <tr>
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Student Name</th>
                            <th scope="col" class="px-6 py-3">Book Name</th>
                            <th scope="col" class="px-6 py-3">Phone</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Issue Date</th>
                            <th scope="col" class="px-6 py-3">Return Date</th>
                            <th scope="col" class="px-6 py-3">Status</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book_issues as $book_issue)
                            <tr class="bg-white bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $book_issue->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $book_issue->student ? $book_issue->student->name : $book_issue->student->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issue->book ? $book_issue->book->book_name : $book_issue->book->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issue->student ? $book_issue->student->phone : $book_issue->student->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issue->student ? $book_issue->student->email : $book_issue->student->id }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issue->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issue->return_date }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $book_issue->status }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="#" class="font-medium text-blue-600 text-blue-500 hover:underline"
                                        wire:click="edit({{ $book_issue->id }})">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
