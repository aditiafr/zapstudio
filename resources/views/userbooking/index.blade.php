<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zap Studio</title>

    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/icon/favicon-16x16.png">
    <link rel="manifest" href="/assets/images/icon/site.webmanifest">
    <link rel="mask-icon" href="/assets/images/icon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="path/css/font-awesome.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>

    @include('components.navbar')

    <div class="w-full h-full flex justify-center items-center bg-gray-100">
        <div class="w-full h-full mt-32 mb-14 mx-6 md:mx-44 p-8 md:p-12 bg-white rounded-lg shadow-md">

            @if ($message = Session::get('success'))

            <div id="alert-border-3" class="flex items-center p-4 mb-4 text-green-800 border-t-4 border-green-300 bg-green-50 dark:text-green-400 dark:bg-gray-800 dark:border-green-800" role="alert">
                <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                </svg>
                <div class="ms-3 text-sm font-medium">
                    <p>
                        {{ $message }}
                    </p>
                </div>
                <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-border-3" aria-label="Close">
                    <span class="sr-only">Dismiss</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>

            @endif

            <h1 class="text-center mb-12 text-4xl font-semibold">Form Booking</h1>
            <form action="{{url('userpost')}}" method="POST">
                @csrf

                <div class="grid grid-cols-1 gap-6">

                    <div class="mb-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Lengkap</label>
                        <input type="name" id="nama" name="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nama Lengkap" required />
                    </div>

                    <div class="mb-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat Email</label>
                        <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Alamat Email" required />
                    </div>

                    <div class="mb-2">
                        <label for="notlp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Telpon / WA</label>
                        <input type="name" id="notlp" name="notlp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan Nomor Telpon / WA" required />
                        <p class="text-sm">*Format penulisan whatsapp: 081389900277</p>
                    </div>

                    <div class="mb-2">
                        <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Booking</label>

                        <div class="pt-5 border-t border-gray-200 dark:border-gray-800 flex sm:flex-row flex-col sm:space-x-5 rtl:space-x-reverse">
                            <!-- <div inline-datepicker datepicker-buttons datepicker-autoselect-today class="mx-auto sm:mx-0"></div> -->

                            <div class="w-1/2 flex flex-col gap-4">

                                <div class="relative max-w-sm w-full">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input autocomplete="off" datepicker datepicker-buttons datepicker-autoselect-today type="text" id="tanggal" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                                </div>

                                <!-- <button type="button" data-collapse-toggle="timetable" class="inline-flex items-center w-full py-2 px-5 me-2 justify-center text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            <svg class="w-4 h-4 text-gray-800 dark:text-white me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd" />
                            </svg>
                            Pick a time
                        </button> -->
                                <label class="sr-only">
                                    Pick a time
                                </label>
                                <ul id="timetable" class="grid w-full grid-cols-4 gap-2">
                                    <!-- Time slots will be dynamically inserted here -->
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="mb-2">
                        <label for="pakets" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilih Paket</label>
                        <select id="pakets" name="id_paket" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" selected>- Pilih Paket -</option>
                            @foreach ($paket as $pack)
                            <option value="{{ $pack->id_paket }}" data-image="/assets/images/paket/{{ $pack->image }}">{{ $pack->namapaket }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-2 flex flex-col md:flex-row gap-4">
                        <div id="package-image-container" class="flex flex-col">
                            <!-- Default image -->
                            <img id="package-image" class="max-w-lg">
                        </div>
                        <div class="flex flex-col gap-8">
                            <h2 class="font-bold text-2xl" id="titlePaket">Pilih Paket untuk Melihat Kategori</h2>
                            <div id="categories" class="flex flex-col gap-4">
                                <!-- Categories will be listed here -->
                            </div>
                        </div>
                    </div>

                </div>

                <div class="flex justify-end gap-2 pt-4">
                    <button type="reset" class="bg-slate-200 py-2 px-4 rounded">Cancel</button>
                    <button type="submit" class="bg-blue-500 py-2 px-4 rounded text-white">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Ambil elemen-elemen yang diperlukan
        const selectElement = document.getElementById('pakets');
        const imageElement = document.getElementById('package-image');
        const titleElement = document.getElementById('titlePaket');

        // Tambahkan event listener ke select element
        selectElement.addEventListener('change', function() {
            // Dapatkan nilai dan teks dari opsi yang dipilih
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const selectedValue = selectedOption.value;
            const selectedText = selectedOption.textContent;

            // Perbarui teks judul dengan teks yang sesuai
            titleElement.textContent = selectedText;

            // Dapatkan URL gambar yang sesuai dengan opsi yang dipilih
            const imageUrl = selectedOption.getAttribute('data-image');

            // Perbarui sumber gambar dengan URL yang sesuai
            imageElement.src = imageUrl;

            // Filter categories berdasarkan paket yang dipilih
            $.ajax({
                url: '/paket/filter',
                type: 'GET',
                data: {
                    id_paket: selectedValue
                },
                success: function(response) {
                    const categoriesContainer = document.getElementById('categories');
                    categoriesContainer.innerHTML = '';
                    response.forEach((category, index) => {
                        const radioInput = `
                        <div class="flex items-center">
                            <input id="category_${category.id_category}" type="radio" value="${category.id_category}" name="id_category" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="category_${category.id_category}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">${category.namacategory}</label>
                        </div>
                    `;
                        categoriesContainer.insertAdjacentHTML('beforeend', radioInput);
                    });
                }
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const datepickerInput = document.getElementById('tanggal');

            datepickerInput.addEventListener('changeDate', function(event) {
                const selectedDate = event.detail.date;
                const year = selectedDate.getFullYear();
                const month = String(selectedDate.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
                const day = String(selectedDate.getDate()).padStart(2, '0');
                const formattedDate = `${year}-${month}-${day}`;
                // console.log(formattedDate);

                fetch('/api/save-date', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                        },
                        body: JSON.stringify({
                            tanggal: formattedDate
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        // console.log(data),
                        updateTimetable(data)
                    })
                    .catch(error => console.error('Error:', error));
            });

            function updateTimetable(bookedSlots) {
                const timetable = document.getElementById('timetable');
                timetable.innerHTML = ''; // Clear existing time slots

                const bookedTimes = bookedSlots.map(slot => slot.jam.slice(0, 5));

                const timeSlots = [
                    "10:00", "10:30", "11:00", "11:30", "12:00",
                    "12:30", "13:00", "13:30", "14:00", "14:30",
                    "15:00", "15:30", "16:00", "16:30", "17:00",
                    "17:30", "18:00", "18:30", "19:00", "19:30",
                    "20:00", "20:30", "21:00", "21:30"
                ];

                timeSlots.forEach(time => {
                    const isBooked = bookedTimes.includes(time);
                    const listItem = document.createElement('li');
                    listItem.innerHTML = `
            <input type="radio" id="${time}" value="${time}" class="hidden peer" name="jam" ${isBooked ? 'disabled' : ''}>
            <label for="${time}" class="inline-flex items-center justify-center w-full p-2 text-sm font-medium text-center bg-white border rounded-lg cursor-pointer ${isBooked ? 'cursor-not-allowed text-gray-400 border-gray-400' : 'text-blue-600 border-blue-600 hover:text-white peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white hover:bg-blue-500'}">
              ${time}
            </label>
          `;
                    timetable.appendChild(listItem);
                });
            }

        });
    </script>

</body>

</html>