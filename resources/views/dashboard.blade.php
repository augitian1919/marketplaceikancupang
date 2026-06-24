<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl">
            Dashboard Marketplace Ikan Cupang
        </h2>
    </x-slot>

    <div class="p-10">

        <div class="bg-red-500 text-white p-6 rounded">
            TEST BERHASIL
        </div>

        <br>

        <div class="bg-blue-500 text-white p-6 rounded">
            Total Produk : {{ $totalProduk }}
        </div>

    </div>
</x-app-layout>