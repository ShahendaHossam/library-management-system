<div>
    <div class="t-card">
        @if ($editMode)
            <div class="t-card-header">
                <center><strong>
                        <h1 class="text-3xl mb-5" style="color: black">Edit Student Information</h1>
                    </strong></center>
            </div>
        @else
            <div class="t-card-header">
                <center><strong>
                        <h1 class="text-3xl mb-5" style="color: black">Create Student Information</h1>
                    </strong></center>
            </div>
        @endif

        <div class="">
            <div class="mx-auto w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8">
                <div class="mb-6">
                    <label for="student-name" class="block mb-2 text-sm font-medium text-gray-900 ">Name</label>
                    <input type="text" id="student-name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model.lazy="student.name" required>
                </div>
                <div class="mb-6">
                    <label for="student-phone" class="block mb-2 text-sm font-medium text-gray-900 ">Phone</label>
                    <input type="number" id="student-phone"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model.lazy="student.phone" required>
                </div>
                <div class="mb-6">
                    <label for="student-gender" class="block mb-2 text-sm font-medium text-gray-900 ">Gender</label>
                    <select wire:model.lazy="student.gender" name="" id="student-gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">Select an Option</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="mb-6">
                    <label for="student-email" class="block mb-2 text-sm font-medium text-gray-900 ">E-mail</label>
                    <input type="text" id="student-email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model.lazy="student.email" required>
                </div>
                <div class="mb-6">
                    <label for="student-address" class="block mb-2 text-sm font-medium text-gray-900 ">Address</label>
                    <input type="text" id="student-address"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model.lazy="student.address" required>
                </div>
                <div class="mb-6">
                    <label for="student-class" class="block mb-2 text-sm font-medium text-gray-900 ">Class</label>
                    <input type="text" id="student-class"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model.lazy="student.class" required>
                </div>
                <div class="mb-6">
                    <label for="student-age" class="block mb-2 text-sm font-medium text-gray-900 ">Age</label>
                    <input type="text" id="student-age"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        wire:model.lazy="student.age" required>
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
