<div>
    <div class="t-card">
        @if($editMode)
        <div class="t-card-header">
            <center><strong>
                    <h1 class="text-3xl mb-5" style="color: black">Edit Category Information</h1>
                </strong></center>
        </div>
        @else        
        <div class="t-card-header">
            <center><strong>
                    <h1 class="text-3xl mb-5" style="color: black">Create Category Information</h1>
                </strong></center>
        </div>
        @endif

        <div class="">
            <div class="mx-auto w-full max-w-sm p-4 bg-white border border-gray-200 rounded-lg shadow-md sm:p-6 md:p-8">
                <div class="mb-6">
                    <label for="category-name" class="block mb-2 text-sm font-medium text-gray-900 ">Category Name</label>
                    <input type="text" id="category-name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.lazy="category.category_name" required>
                </div>
                <div class="mb-6">
                    <label for="category-email" class="block mb-2 text-sm font-medium text-gray-900 ">Category E-mail</label>
                    <input type="text" id="category-email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.lazy="category.category_email" required>
                </div>
                <div class="mb-6">
                    <label for="category-address" class="block mb-2 text-sm font-medium text-gray-900 ">Category Address</label>
                    <input type="text" id="category-address" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.lazy="category.category_address" required>
                </div>
                <div class="mb-6">
                    <label for="category-phone" class="block mb-2 text-sm font-medium text-gray-900 ">Category Phone</label>
                    <input type="text" id="category-phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400  dark:focus:ring-blue-500 dark:focus:border-blue-500" wire:model.lazy="category.category_phone" required>
                </div>
                <div class="t-card-footer my-6 flex justify-between">
                @if ($editMode)
                <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" wire:click="">Update</button>
                @else
                <button class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" wire:click="save()">Save</button>
                @endif
                    <button type="submit" class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-600 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800" value="" wire:click="cancel()">
                        {{ __('Cancel') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>