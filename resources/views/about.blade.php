{{-- {{ dd($title) }} --}}
<x-layout>
  <x-slot:title>{{ $title }}</x-slot:title>
  <h1 class="text-xl text-pink-500">Ini adalah About</h1>
  <p>Nama: {{ $nama }}</p>
</x-layout>