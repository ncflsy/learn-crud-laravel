<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <section class="h-[100vh] w-[100%] flex flex-col justify-center items-center">
        <h1 class="text-3xl">Tambah Mahasiswa</h1>
        <div class="mt-10">
            <form action="{{url('mahasiswa')}}" method="post" class="flex flex-col gap-[25px] border p-12 rounded-xl">
                @csrf
                <div class="flex gap-[35px] items-center">
                    <label for="nama">NAMA : </label>
                    <input type="text" name="nama" placeholder="Masukan nama Anda" class="px-4 border border-gray-700 py-2 rounded-xl">
                </div>
                <div class="flex gap-[50px] items-center">
                    <label for="nama">NIM : </label>
                    <input type="text" name="nim" placeholder="Masukan nim Anda" class="px-4 border border-gray-700 py-2 rounded-xl">
                </div>
                <div class="flex gap-[15px] items-center">
                    <label for="nama">ALAMAT : </label>
                    <input type="text" name="alamat" placeholder="Masukan alamat Anda" class="px-4 border border-gray-700 py-2 rounded-xl">
                </div>
                <button type="submit" class="px-4 py-2 bg-green-700 text-white rounded-lg">Tambah Data</button>
            </form>
        </div>
    </section>
</body>
</html>