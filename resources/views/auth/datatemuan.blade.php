<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Temuan</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-indigo-600">Data Temuan</h1>
        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-indigo-500 text-white uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">NO</th>
                        <th class="py-3 px-6 text-left">PIC</th>
                        <th class="py-3 px-6 text-left">Rincian Temuan</th>
                        <th class="py-3 px-6 text-left">Rekomendasi Perbaikan</th>
                        <th class="py-3 px-6 text-left">Tata Waktu Perbaikan</th>
                        <th class="py-3 px-6 text-left">Deadline</th>
                        <th class="py-3 px-6 text-left">Link Evidence</th>
                        <th class="py-3 px-6 text-left">Status</th>
                        <th class="py-3 px-6 text-left">Komentar</th>
                        <th class="py-3 px-6 text-left">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm font-light">
                    <tr class="border-b border-gray-200 hover:bg-gray-100 transition duration-300 ease-in-out">
                        <td class="py-3 px-6 text-left">1</td>
                        <td class="py-3 px-6 text-left">John Doe</td>
                        <td class="py-3 px-6 text-left">Penggunaan software ilegal</td>
                        <td class="py-3 px-6 text-left">Menghapus software ilegal</td>
                        <td class="py-3 px-6 text-left">Segera</td>
                        <td class="py-3 px-6 text-left">2024-08-30</td>
                        <td class="py-3 px-6 text-left"><a href="#" class="text-indigo-500 underline">file.pdf</a></td>
                        <td class="py-3 px-6 text-left">Selesai</td>
                        <td class="py-3 px-6 text-left">Tidak ada komentar</td>
                        <td class="py-3 px-6 text-left flex space-x-2">
                            <button class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-600 transition transform hover:scale-105 hover:shadow-lg">Detail</button>
                            <button class="bg-green-500 text-white py-1 px-3 rounded hover:bg-green-600 transition transform hover:scale-105 hover:shadow-lg">Edit</button>
                        </td>
                    </tr>
                    <!-- Tambahkan lebih banyak data sesuai kebutuhan -->
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambahkan elemen loading jika dibutuhkan -->
    <div id="loading" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
        <div class="w-6 h-6 border-4 border-gray-300 border-t-indigo-500 rounded-full animate-spin"></div>
    </div>

    <script>
        // JavaScript untuk menampilkan spinner loading saat tombol diklik
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function () {
                document.getElementById('loading').classList.remove('hidden');
                setTimeout(() => {
                    document.getElementById('loading').classList.add('hidden');
                    alert('Aksi berhasil!');
                }, 1000);
            });
        });
    </script>
</body>
</html>
