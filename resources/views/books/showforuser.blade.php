<x-guest-layout>


    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-2xl leading-6 font-medium text-gray-900">
                Szczegóły pozycji "{{$book->title}}"
            </h3>
        </div>

        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-500">
                        ISBN
                    </dt>
                    <dd class="mt-1 text-base text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$book->isbn}}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-500">
                        Tytuł
                    </dt>
                    <dd class="mt-1 text-base text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$book->title}}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-500">
                        Autor
                    </dt>
                    <dd class="mt-1 text-base text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$book->author}}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-base font-medium text-gray-500">
                        Opis
                    </dt>
                    <dd class="mt-1 text-base text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$book->description}}
                    </dd>
                </div>

            </dl>
        </div>
        </form>
    </div>

</x-guest-layout>
