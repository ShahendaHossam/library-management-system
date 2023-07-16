<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Category List') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <a type="button" href="{{route('category.create')}}">{{ __('New Category +') }}</a>
                <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Category Name</th>
                            <th class="px-6 py-3">Category E-mail</th>
                            <th class="px-6 py-3">Category Address</th>
                            <th class="px-6 py-3">Category Phone</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">  
                            <td>{{$category->id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>{{$category->category_email}}</td>
                            <td>{{$category->category_address}}</td>
                            <td>{{$category->category_phone}}</td>
                            <td class="cursor" wire:click="edit({{$category->id}})"> Edit</td>
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