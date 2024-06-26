<nav class="bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
     
     
      <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
        <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
          <li>
            <a href="/" class=" py-2 px-3 text-white bg-green-700 md:bg-transparent md:text-green-700 md:p-0 md:dark:text-green-500 dark:bg-green-600 md:dark:bg-transparent" aria-current="page">Home</a>
          </li>
          @auth
            <li>
              <a href="{{ route("clientes.index") }}" class=" py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">clientes</a>
            </li>
          @endauth

          <li>
            <a href="/contact" class=" py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contacto</a>
          </li>
          <li>
            <a href="/about" class=" py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 dark:text-white md:dark:hover:text-green-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  