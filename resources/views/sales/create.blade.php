<x-layout title='crear ventas'>
  <div class="lg:container lg:mx-auto flex flex-col gap-10  px-4 py-2 lg:px-20 lg:py-4 h-screen">
    <h2 class="font-bold text-3xl my-5">Crear nueva venta</h2>
    @dump($errors)
    @if (session('status'))
    <div class="bg-green-500 p-3 rounded-md text-white text-center">
      {{ session('status') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="bg-red-500 text-white text-lg rounded-lg p-4">
      <ul class="list-disc">
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <section class="w-3/4 rounded border-2 border-fuchsia-400/20 p-4">
      <form class="flex flex-col gap-8" action="{{route('sales.store')}}" method="POST">
        @csrf
        @include('sales.form-sales')
        <!--   <button class="bg-green-500 px-3 py-2 left-0 w-min text-gray-950 rounded" type="submit">Agregar</button> -->
        <button class="bg-green-500 right-0 w-min px-3 py-2 text-gray-950 rounded" type="submit">Guardar</button>
      </form>
    </section>
  </div>
</x-layout>