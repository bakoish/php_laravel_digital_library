<x-guest-layout>
<div class="px-4 py-5 sm:px-6">
    <h2 class="text-6xl font-normal leading-normal mt-0 mb-2 text-blue-800">Szukaj książek:</h2>

<div class="flex flex-col items-center bgimg bg-cover">
    <form method="post" action="/search/book">
        @csrf
        <label class="text-2xl font-normal leading-normal mt-0 mb-2 text-blue-500">Autor/tytul/ISBN</label> <input class="border py-2 px-3 text-grey-darkest" type="text" name="searchinput" id="searchinput" value="{{old('searchinput')}}">

        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit" name="Search">Szukaj</button>
    </form>
</div>
</div><br>
<div>
<h2 class="text-4xl font-normal leading-normal mt-0 mb-2 text-blue-800">Lista dostępnych książek:</h2>
@if(! isset($books[0]))
    Brak książek.
@endif

@if(session('books'))
    <table  class="text-base min-w-full divide-y divide-gray-200">
    @foreach (session('books') as $book)
        <tr>
            <td class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                {{ $book->isbn }}
            </td>
            <td class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                {{$book->title}}
            </td>
            <td class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                {{$book->author}}
            </td>
            <td class="px-6 py-3 text-left text-sm font-medium text-gray-500 uppercase tracking-wider">
                Liczba dostępnych: {{$book->available_quantity}}
            </td>
            <td>
                <form method="post" action="/borrowed/create">
                    @csrf
                    <input type="hidden" name="user" id="user" value="{{auth()->user()->id}}" />
                    <input type="hidden"  name="book" id="book" value="{{$book->id}}" />
                    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit" name="Create">Wypozycz</button>
                </form>
            </td>
        </tr>
    @endforeach
    </table>
    @else
    <table class="min-w-full divide-y divide-gray-200">
    @foreach ($books as $book)
        <tr>
            <td class="px-6 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                {{ $book->isbn }}
            </td>
            <td class="px-6 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                {{$book->title}}
            </td>
            <td class="px-6 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                {{$book->author}}
            </td>
            <td class="px-6 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
               Liczba dostępnych: {{$book->available_quantity}}
            </td>
            <td class="px-6 py-3 text-left text-base font-medium text-gray-500 uppercase tracking-wider">
                <form method="post" action="/borrowed/create">
                    @csrf
                    <input type="hidden" name="user" id="user" value="{{auth()->user()->id}}" />
                    <input type="hidden"  name="book" id="book" value="{{$book->id}}" />
                    <button class="text-base bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit" name="Create">
                        <a href="/books/showuser/{{$book->id}}" name="Details">Szczegóły</a>
                    </button>
                    <button class="text-base bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit" name="Create">Wypożycz</button>

                </form>
            </td>
        </tr>
    @endforeach
    @endif
</table>
</div>


</x-guest-layout>
