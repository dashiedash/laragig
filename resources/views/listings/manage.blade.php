@extends('layout')

@section('content')
  <x-card class="p-10">
    <div class="bg-gray-50">
      <header>
        <h1
          class="my-6 text-center text-3xl font-bold uppercase">
          Manage Gigs
        </h1>
      </header>

      <table class="w-full table-auto rounded-sm">
        <tbody>
          @unless ($listings->isEmpty())
            @foreach ($listings as $listing)
              <tr class="border-gray-300">
                <td
                  class="border-t border-b border-gray-300 px-4 py-8 text-lg">
                  <a href="show.html">
                    {{ $listing->title }}
                  </a>
                </td>
                <td
                  class="border-t border-b border-gray-300 px-4 py-8 text-lg">
                  <a
                    href="/listings/{{ $listing->id }}/edit"
                    class="rounded-xl px-6 py-2 text-blue-400"><i
                      class="fa-solid fa-pen-to-square"></i>
                    Edit</a>
                </td>
                <td
                  class="border-t border-b border-gray-300 px-4 py-8 text-lg">
                  <form method="POST" action="/listings/{{ $listing->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-500">
                      <i class="fa-solid fa-trash">Delete</i>
                    </button>
                  </form>
                </td>
              </tr>
            @endforeach
          @else
            <tr class="border-gray-300">
              <td class="border-top border-bottom border-gray-300 px-4 py-8 text-lg">
                <p class="text-center">
                  No listings found
                </p>
              </td>
            </tr>
          @endunless
        </tbody>
      </table>
    </div>
  </x-card>
@endsection
