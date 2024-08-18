<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Halaman</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="container mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-semibold mb-4 text-gray-800">Detail Laporan</h1>

        <!-- Report Layout -->
        <div class="space-y-6">
            <!-- Contoh Laporan -->
            <div class="bg-white p-4 rounded-lg shadow border border-gray-200">
                <!-- Bagian Atas Tabel (4 Kolom) -->
                <div class="grid grid-cols-4 gap-2 mb-6">
                    <div class="font-semibold text-gray-700">Waktu Temuan:</div>
                    <div class="font-semibold text-gray-700">Sumber ATP:</div>
                    <div class="font-semibold text-gray-700">PIC:</div>
                    <div class="font-semibold text-gray-700">Unit Fungsi:</div>

                    <div class="text-gray-600">2024-08-18</div>
                    <div class="text-gray-600">Internal Audit</div>
                    <div class="text-gray-600">John Doe</div>
                    <div class="text-gray-600">Finance</div>
                </div>

                <!-- Lanjutan Tabel ke Bawah (2 Kolom) -->
                <div class="grid grid-cols-2 gap-2 mb-6">
                    <div>
                        <div class="font-semibold text-gray-700 mb-2">Rincian Temuan:</div>
                        <textarea class="w-full h-24 p-2 border border-gray-300 rounded" placeholder="Temuan 1"></textarea>
                    </div>
                    <div>
                        <div class="font-semibold text-gray-700 mb-2">Rekomendasi Perbaikan:</div>
                        <textarea class="w-full h-24 p-2 border border-gray-300 rounded" placeholder="Temuan 1"></textarea>
                    </div>
                </div>

                <!-- Lanjutan Tabel ke Bawah (3 Kolom) -->
                <div class="grid grid-cols-3 gap-2 mb-6">
                    <div class="font-semibold text-gray-700">File Evidence:</div>
                    <div class="font-semibold text-gray-700">Skala Prioritas:</div>
                    <div class="font-semibold text-gray-700">Deadline:</div>

                    <div class="text-gray-600"><a href="#" class="text-blue-500">Download</a></div>
                    <div class="text-gray-600">Tinggi</div>
                    <div class="text-gray-600">2024-09-01</div>
                </div>

                <!-- Lanjutan Tabel ke Bawah (3 Kolom) -->
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6 gap-6 mb-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Tata Waktu Perbaikan</label>
                        <div class="mt-2">
                          <input type="date" name="tata_waktu" id="tata_waktu" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                      </div>
                      <div class="col-span-2">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Rincian Temuan</label>
                        <div class="mt-2">
                          <textarea id="rincian_temuan" name="rincian_temuan" rows="4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                      </div>
                      <div class="sm:col-span-2">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Skala Prioritas</label>
                        <div class="mt-2">
                          <select id="skala_prioritas" name="skala_prioritas" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>HIGH</option>
                            <option>MEDIUM</option>
                            <option>LOW</option>
                            <option>ADRESS</option>
                          </select>
                        </div>
                      </div>
                </div>

                <!-- Lanjutan Tabel ke Bawah (4 Kolom) -->
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-6 sm:grid-cols-6 gap-6 mb-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Reward/Konsekwensi</label>
                        <div class="mt-2">
                          <textarea id="reward" name="reward" rows="4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Status</label>
                        <div class="mt-2">
                          <select id="status" name="status" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option>OPEN</option>
                            <option>REVISI</option>
                            <option>CLOSE</option>
                          </select>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Komentar</label>
                        <div class="mt-2">
                          <textarea id="komentar" name="komentar" rows="4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                </div>
                        <!-- Button Edit & Save -->
        <div class="flex justify-end mb-4">
            <button class="bg-blue-500 text-white px-4 py-2 rounded-md shadow hover:bg-blue-600">Edit</button>
            <button class="bg-green-500 text-white px-4 py-2 rounded-md shadow ml-2 hover:bg-green-600">Save</button>
        </div>
            </div>
            <!-- Tambahkan laporan lainnya di sini -->
        </div>
    </div>
</body>
</html>
