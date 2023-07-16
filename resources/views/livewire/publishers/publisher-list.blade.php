<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Publisher List') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <a type="button" href="{{route('publisher.create')}}">{{ __('New Publisher +') }}</a>
                <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Publisher Name</th>
                            <th class="px-6 py-3">Publisher E-mail</th>
                            <th class="px-6 py-3">Publisher Address</th>
                            <th class="px-6 py-3">Publisher Phone</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($publishers as $publisher)
                        <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">  
                            <td>{{$publisher->id}}</td>
                            <td>{{$publisher->publisher_name}}</td>
                            <td>{{$publisher->publisher_email}}</td>
                            <td>{{$publisher->publisher_address}}</td>
                            <td>{{$publisher->publisher_phone}}</td>
                            <td class="cursor" wire:click="edit({{$publisher->id}})"> Edit</td>
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