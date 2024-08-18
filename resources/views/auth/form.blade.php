<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Pertamina ATP</title>
</head>
<body>
    <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
        <div class="container-fluid py-2">
          <div class="row my-4">
            <div class="col-12">
              <div class="card mb-4">
                <div class="card-header pb-0 d-flex align-items-center">
                  <img src="{{ asset('../img/pertaminalogo.png') }}" alt="Logo" style="width: 40px; height: auto; margin-right: 5px;"><h6>Action Tracking Plan</h6>
                </div>
                <div class="card-body px-4 pt-3 pb-2">
    <form>
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <div class="mt-10 grid grid-cols-1 gap-x-3 gap-y-8 sm:grid-cols-8">
          <div class="sm:col-span-2 sm:col-start-1">
            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Waktu Temuan</label>
            <div class="mt-2">
              <input type="date" name="waktu_temuan" id="waktu_temuan" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="region" class="block text-sm font-medium leading-6 text-gray-900">Sumber ATP</label>
            <div class="mt-2">
              <input type="text" name="sumber_atp" id="sumber_atp" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">PIC</label>
            <div class="mt-2">
              <input type="text" name="pic" id="pic" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="postal-code" class="block text-sm font-medium leading-6 text-gray-900">Unit Fungsi</label>
            <div class="mt-2">
              <input type="text" name="unit_fungsi" id="unit_fungsi" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div class="col-span-4">
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Rincian Temuan</label>
            <div class="mt-2">
              <textarea id="rincian_temuan" name="rincian_temuan" rows="4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
          </div>
          <div class="col-span-4">
            <label for="about" class="block text-sm font-medium leading-6 text-gray-900">Rekomendasi Perbaikan</label>
            <div class="mt-2">
              <textarea id="rekomendasi_perbaikan" name="rekomendasi_perbaikan" rows="4" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
          </div>
          <div class="col-span-4">
            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Upload File Evidence</label>
            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
              <div class="text-center">
                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                </svg>
                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                  <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                    <span>Upload a file</span>
                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
              </div>
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Skala Prioritas</label>
            <div class="mt-2">
              <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                <option>HIGH</option>
                <option>MEDIUM</option>
                <option>LOW</option>
                <option>ADRESS</option>
              </select>
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Deadline</label>
            <div class="mt-2">
              <input type="date" name="waktu_temuan" id="waktu_temuan" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
          </div>
        </div>
      </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
      <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
      <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</main>
</body>
</html>
