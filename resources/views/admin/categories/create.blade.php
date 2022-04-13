<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Category') }}
            </h2>
            <a href="{{ route('admin.categories.index') }}" class="px-4 py-2 rounded-md text-white bg-indigo-500">Back</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <form class="p-6" action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-6">
                      <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Category Name</label>
                      <input type="text" id="name" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Enter category name">
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 text-sm font-medium text-gray-900" for="image">Upload Image</label>
                        <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer focus:outline-none focus:border-transparent p-2.5" aria-describedby="user_avatar_help" id="image" name="image" type="file">
                        <div class="mt-1 text-sm text-gray-500" id="image">Upload Category Image</div>
                    </div>

                    <button type="submit" class="text-white bg-indigo-500 hover:bg-indigo-700 rounded-md w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
                </form>

            </div>
        </div>
    </div>
</x-admin-layout>
