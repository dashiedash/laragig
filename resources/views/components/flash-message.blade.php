@if (session()->has('message'))
  <div class="bg-laravel fixed top-0 left-1/2 -translate-x-1/2 transform px-48 py-3 text-white">
    <p>
      {{ session('message') }}
    </p>
  </div>
@endif
