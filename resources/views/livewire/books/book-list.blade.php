<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Book List') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <a type="button" href="{{route('book.create')}}">{{ __('New Book +') }}</a>
                <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Book Name</th>
                            <th class="px-6 py-3">Category Name</th>
                            <th class="px-6 py-3">Author Name</th>
                            <th class="px-6 py-3">Publisher Name</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">  
                            <td>{{$book->id}}</td>
                            <td>{{$book->book_name}}</td>
                            <td>{{$book->category ? $book->category->category_name :$book->category->id}}</td>
                            <td>{{$book->author ? $book->author->author_name :$book->author->id}}</td>
                            <td>{{$book->publisher ? $book->publisher->publisher_name :$book->publisher->id}}</td>
                            <td>{{$book->status}}</td>
                            <td class="cursor" wire:click="edit({{$book->id}})"> Edit</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </div>
</div>