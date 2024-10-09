<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-6">Aulas Disponibles</h1>

        <p class="text-center text-lg text-gray-600 mb-10">
            Aquí puedes ver todas las aulas disponibles y su capacidad.
        </p>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            ID
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Nombre del Aula
                        </th>
                        <th class="px-6 py-3 bg-gray-100 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Capacidad
                        </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            1
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Aula A
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            30
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            2
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Aula B
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            25
                        </td>
                    </tr>
                    <!-- Agrega más filas aquí -->
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
