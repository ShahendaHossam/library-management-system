<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Book Issue List') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <a type="button" href="{{route('book_issue.create')}}">{{ __('New Book Issue +') }}</a>
                <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Student Name</th>
                            <th class="px-6 py-3">Book Name</th>
                            <th class="px-6 py-3">Phone</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Issue Date</th>
                            <th class="px-6 py-3">Return Date</th>
                            <th class="px-6 py-3">Status</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($book_issues as $book_issue)
                        <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">  
                            <td>{{$book_issue->id}}</td>
                            <td>{{$book_issue->student_name}}</td>
                            <td>{{$book_issue->book_name}}</td>
                            <td>{{$book_issue->phone}}</td>
                            <td>{{$book_issue->email}}</td>
                            <td>{{$book_issue->created_at}}</td>
                            <td>{{$book_issue->return_date}}</td>
                            <td>{{$book_issue->status}}</td>
                            <td class="cursor" wire:click="edit({{$book_issue->id}})"> Edit</td>
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