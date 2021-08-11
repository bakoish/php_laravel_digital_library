
<x-guest-layout>

    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            List of books
        </h3>
    </div>
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 font-medium text-blue-900">
            <a href="/books/create" name="Create">Create new...</a>
        </h3>
    </div>


    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                ISBN
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tytuł
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Szczegóły ksiązki
                            </th>
                        </tr>
                        </thead>

                        @if(! isset($books[0]))
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-red-500">
                                    No books in database.
                                </td>
                            </tr>
                            </tbody>
                        @endif

                        @foreach ($books as $book)

                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $book->isbn }}
                                            </div>
                                            <div class="text-sm text-gray-500">

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"> {{$book->title}}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-nowrap text-sm text-blue-500">
                                    <a href="/books/{{$book->id}}" name="Details">Zobacz szczegóły</a>
                                </td>
                            </tr>
                            </tbody>



                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
