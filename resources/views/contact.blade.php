<x-layouts.layout>
  <main class="container mx-auto p-6 bg-white rounded shadow-md  overflow-x-auto   h-full">
    <h2 class="text-2xl font-semibold mb-6">Contacto</h2>
    
    <!-- Información de Contacto -->
    <section class="mb-10">
        <h3 class="text-xl font-semibold mb-4">Información de Soporte</h3>
        <p><strong>Dirección:</strong> Calle Principal 123, Zaragoza, España</p>
        <p><strong>Teléfono:</strong> +34 4747474747</p>
        <p><strong>Email:</strong> soporte@ecotravel.com</p>
    </section>
    
    <!-- Formulario de Contacto -->
    <section class="mb-10">
        <h3 class="text-xl font-semibold mb-4">Formulario de Contacto con soporte</h3>
        <form class="space-y-6">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nombre del trabajador</label>
                <input type="text" id="name" name="name" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email del trabajador</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Mensaje</label>
                <textarea id="message" name="message" rows="4" class="mt-1 p-2 block w-full border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500"></textarea>
            </div>
            <div>
                <button type="submit" class="w-full py-2 px-4 bg-green-600 text-white font-semibold rounded-md shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Enviar</button>
            </div>
        </form>
    </section>
</main>
</x-layouts.layout>