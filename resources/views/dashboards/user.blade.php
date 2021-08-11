
<x-guest-layout>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2  inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-90">
                        <tr>
                            <th scope="col" class="text-blue-900 px-8 py-4 text-left text-base font-semibold text-gray-900 uppercase tracking-wider">
                                Historia wypożyczonych
                            </th>

                        </tr>
                        </thead>
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tytuł
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Data wypożyczenia
                            </th>
                        </tr>
                        </thead>

                        @foreach(auth()->user()->borrows as $b)

                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$b->book->title}}
                                            </div>
                                            <div class="text-sm text-gray-500">

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{explode(" ", $b->borrowed_at)[0]}}</div>
                                </td>
                            </tr>
                            </tbody>

                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class=" text-blue-900 px-8 py-4 text-left text-base font-semibold text-gray-900 uppercase tracking-wider">
                                Obecnie wypożyczone
                            </th>

                        </tr>
                        </thead>
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tytuł
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Data wypożyczenia
                            </th>
                        </tr>
                        </thead>

                        @foreach(auth()->user()->borrows as $b)
                            @if($b->active)
                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$b->book->title}}
                                            </div>
                                            <div class="text-sm text-gray-500">

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{explode(" ", $b->borrowed_at)[0]}}</div>
                                </td>
                            </tr>
                            </tbody>
                            @endif
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class=" text-blue-900 px-8 py-4 text-left text-base font-semibold text-gray-900 uppercase tracking-wider">
                                Wkrótce należy oddać
                            </th>

                        </tr>
                        </thead>
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Tytuł
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Do kiedy należy oddać
                            </th>
                        </tr>
                        </thead>

                        @foreach(auth()->user()->borrows as $b)
                            @if($b->active && (\Carbon\Carbon::create($b->borrowed_to)->diffInDays(\Carbon\Carbon::now()) < 7))

                            <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">
                                                {{$b->book->title}}
                                            </div>
                                            <div class="text-sm text-gray-500">

                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{explode(" ", $b->borrowed_to)[0]}}
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        @endif
                        @endforeach

                    </table>
                </div>
            </div>
        </div>
    </div>

    <br>

    <button class="ml-52 mt-10 w-60 h-20 bg-blue-200 hover:bg-blue-100 text-white font-bold py-2 px-4 border-b-4 border-blue-200 hover:border-blue-500 rounded">
        <a href="/search" class="text-base text-blue-900 hover:text-blue-700 visited:text-purple-600">WYSZUKAJ KSIĄŻKĘ</a>
    </button>

</x-guest-layout>


