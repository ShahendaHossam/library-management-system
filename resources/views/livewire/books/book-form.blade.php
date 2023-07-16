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
                    <label for="book-name" class="block mb-2 text-sm font-medium text-gray-900 ">Book Name</label>
                    <input type="text" id="book-name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model.lazy="book.book_name" required>
                </div>
                <div class="mb-6">
                    <label for="category-id" class="block mb-2 text-sm font-medium text-gray-900 width-100">Category
                        Name</label>
                    <select name="" id="category-id" wire:model.lazy="book.category_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Select An Option</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="author-id" class="block mb-2 text-sm font-medium text-gray-900" >Author
                        Name</label>
                    <select name="" id="author-id" wire:model.lazy="book.author_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Select An Option</option>
                        @foreach ($authors as $author)
                            <option value="{{$author->id}}">{{ $author->author_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-6">
                    <label for="publisher-id" class="block mb-2 text-sm font-medium text-gray-900">Publisher
                        Name</label>
                    <select name="" id="publisher-id" wire:model.lazy="book.publisher_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Select An Option</option>
                        @foreach ($publishers as $publisher)
                            <option value="{{$publisher->id}}">{{ $publisher->publisher_name }}</option>
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
