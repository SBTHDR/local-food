<x-admin-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Reservations') }}
            </h2>
            <a href="{{ route('admin.reservations.create') }}" class="px-4 py-2 rounded-md text-white bg-indigo-500">Create Reservation</a>
        </div>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Reservation Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Reservation Image
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Manage
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    Apple MacBook Pro 17"
                                </th>
                                <td class="px-6 py-4">
                                    Sliver
                                </td>
                                <td class="px-6 py-4">
                                    <a href="" class="px-4 py-2 rounded-md text-white bg-indigo-400">Edit</a>
                                    <a href="" class="px-4 py-2 rounded-md text-white bg-red-400">Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-admin-layout>
