<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Author List') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <a type="button" href="{{route('author.create')}}">{{ __('New Author +') }}</a>
                <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Author Name</th>
                            <th class="px-6 py-3">Author E-mail</th>
                            <th class="px-6 py-3">Author Address</th>
                            <th class="px-6 py-3">Author Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($authors as $author)
                        <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">  
                            <td>{{$author->id}}</td>
                            <td>{{$author->author_name}}</td>
                            <td>{{$author->author_email}}</td>
                            <td>{{$author->author_address}}</td>
                            <td>{{$author->author_phone}}</td>
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