<div>
    <div class="t-card">
        @if ($editMode)
            <div class="t-card-header">
                <center><strong>
                        <h1 class="text-3xl mb-5" style="color: black">Edit Book Information</h1>
                    </strong></center>
            </div>
        @else
            <div class="t-card-header">
                <center><strong>
                        <h1 class="text-3xl mb-5" style="color: black">Create Book Information</h1>
                    </strong></center>
            </div>
        @endif

        <div class="">
            <div class="mx-auto w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8">
                <div class="mb-6">
                    <label for="student-name" class="block mb-2 text-sm font-medium text-gray-900 width-100">Student
                        Name</label>
                    <select name="" id="student-name" wire:model.lazy="book_issue.student_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Select An Option</option>
                        @foreach ($students as $student)
                            <option value="{{$student->id}}">{{ $student->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="book-name" class="block mb-2 text-sm font-medium text-gray-900" >Book
                        Name</label>
                    <select name="" id="book-name" wire:model.lazy="book_issue.book_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Select An Option</option>
                        @foreach ($books as $book)
                            <option value="{{$book->id}}">{{ $book->book_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="t-card-footer my-6 flex justify-between">
                    @if ($editMode)
                        <button
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            wire:click="">Update</button>
                    @else
                        <button
                            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                            wire:click="save()">Save</button>
                    @endif
                    <button type="submit"
                        class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"
                        value="" wire:click="cancel()">
                        {{ __('Cancel') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
