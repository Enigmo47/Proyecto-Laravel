<x-layouts.layout>
    <div class="h-full flex items-center justify-center">
    <div class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">


    <form class="max-w-md mx-auto"  method="POST" action="{{ route('clientes.store') }}">
        @csrf

        <div class="relative z-0 w-full mb-5 group">
            <x-input-label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre del Cliente</x-input-label >
            <input name="nombre" type="text" value="{{ old("nombre") }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        </div>
        @if ($errors->get("nombre"))
            @foreach($errors->get("nombre") as $error)
                <div class="text-sm text-red-600">
                    {{ $error }}
                </div>
            @endforeach
        @endif

        <div class="relative z-0 w-full mb-5 group">
            <x-input-label for="email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email del Cliente</x-input-label >
            <input name="email" type="text" value="{{ old("email") }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
        </div>
        @if ($errors->get("email"))
            @foreach($errors->get("email") as $error)
                <div class="text-sm text-red-600">
                    {{ $error }}
                </div>
            @endforeach
        @endif
       
        <div class="grid md:grid-cols-2 md:gap-6">
           <div class="relative z-0 w-full mb-5 group">
              <x-input-label  for="DNI" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400  duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">DNI del Cliente</x-input-label >
              <input name="DNI" pattern="[0-9]{8}-[A-Z]" type="text" value="{{ old("DNI") }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
           </div>
          @if ($errors->get("DNI"))
            @foreach($errors->get("DNI") as $error)
                <div class="text-sm text-red-600">
                    {{ $error }}
                </div>
            @endforeach
          @endif
           <div class="relative z-0 w-full mb-5 group">
              <x-input-label  for="edad" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Edad del Cliente</x-input-label >
              <input name="edad" type="text" value="{{ old("edad") }}" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none  dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder=" " required />
            </div>
          @if ($errors->get("edad"))
            @foreach($errors->get("edad") as $error)
                <div class="text-sm text-red-600">
                    {{ $error }}
                </div>
            @endforeach
          @endif
        </div>
       
        <button type="submit" class="mr-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Enviar</button>
        <a href="{{ route("clientes.index") }}" class="text-white bg-red-400 hover:bg-red-600 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Cancelar</a>
      </form>
      
</div>
</div>
</x-layouts.layout>
