<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Buku Tamu') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                <h3 class="mb-4 text-lg font-medium text-gray-700 dark:text-gray-300">Daftar Buku Tamu</h3>
                
                <div class="overflow-x-auto">
                    <table class="min-w-full border border-gray-300 dark:border-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-700">
                            <tr>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">#</th>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">Nama</th>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">Asal</th>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">Tanggal</th>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">Tujuan</th>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">Jumlah</th>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">Materi</th>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">Permohonan</th>
                                <th class="px-4 py-2 border dark:border-gray-600 text-left font-semibold text-gray-600 dark:text-gray-300">Pendamping</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pengaju as $index => $item)
                                <tr class="{{ $loop->even ? 'bg-gray-100 dark:bg-gray-800' : 'bg-white dark:bg-gray-900' }}">
                                    <td class="px-4 py-2 border dark:border-gray-600">{{ $index + 1 }}</td>
                                    <td class="px-4 py-2 border dark:border-gray-600">{{ $item->nama }}</td>
                                    <td class="px-4 py-2 border dark:border-gray-600">{{ $item->asal }}</td>
                                    <td class="px-4 py-2 border dark:border-gray-600">{{ $item->tanggal }}</td>
                                    <td class="px-4 py-2 border dark:border-gray-600">{{ $item->tujuan }}</td>
                                    <td class="px-4 py-2 border dark:border-gray-600">{{ $item->jumlah }}</td>
                                    <td class="px-4 py-2 border dark:border-gray-600">{{ $item->materi }}</td>
                                    <td class="px-4 py-2 border dark:border-gray-600"><img src="{{'permohonan/' . $item->permohonan}}" alt=""></td>
                                    <td class="px-4 py-2 border dark:border-gray-600"><img src="{{'permohonan/' . $item->pendamping}}" alt=""></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="9" class="px-4 py-2 border text-center dark:border-gray-600">Tidak ada data</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
