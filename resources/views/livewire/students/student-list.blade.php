<div>
    <div class="t-card">
        <div class="header">
            <center>
                <h1 class="text-3xl"><strong>{{ __('Student List') }}</strong></h1>
            </center>
        </div>
        <div class="flex justify-center mt-8">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <a type="button" href="{{route('student.create')}}">{{ __('New Student +') }}</a>
                <table class="w-full text-sm text-left text-gray-500 text-dark py-10">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 bg-gray-300 text-dark text-center">
                        <tr>
                            <th class="px-6 py-3">#</th>
                            <th class="px-6 py-3">Student Name</th>
                            <th class="px-6 py-3">Student Phone</th>
                            <th class="px-6 py-3">Student Gender</th>
                            <th class="px-6 py-3">Student E-mail</th>
                            <th class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr class="bg-white border-b bg-gray-100 border-gray-200 hover:bg-gray-50 hover:bg-gray-300">  
                            <td>{{$student->id}}</td>
                            <td>{{$student->name}}</td>
                            <td>{{$student->phone}}</td>
                            <td>{{$student->gender}}</td>
                            <td>{{$student->email}}</td>
                            <td class="cursor" wire:click="edit({{$student->id}})"> Edit</td>
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