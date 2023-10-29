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
        <h1 class="text-3xl">Data Mahasiswa</h1>
        <div>
                <div class="flex justify-between items-start">
                    <a href="{{url('mahasiswa/create')}}" class="inline-block bg-green-600 items-center text-white px-4 py-3 rounded-lg mb-2"> Tambah Data</a>
                    <div class="items-center">
                        <form action="{{url('mahasiswa')}}" method="get">
                            <input type="text" name="kataKunci" placeholder="Masukan alamat Anda" class="px-4 border border-gray-700 py-1 rounded-xl" value="{{Request::get('kataKunci')}}">
                            <button class="inline-block bg-indigo-600 items-center text-white px-4 py-1 rounded-lg mb-2"> Cari Data</button>
                        </form>
                    </div>
                </div>
            <table>
                <thead>
                    <tr>
                        <td class="w-[180px] px-4 py-2 bg-indigo-800 text-white text-center font-semibold border border-black">ID</td>
                        <td class="w-[180px] px-4 py-2 bg-indigo-800 text-white text-center font-semibold border border-black">NAMA</td>
                        <td class="w-[180px] px-4 py-2 bg-indigo-800 text-white text-center font-semibold border border-black">NIM</td>
                        <td class="w-[180px] px-4 py-2 bg-indigo-800 text-white text-center font-semibold border border-black">ALAMAT</td>
                        <td class="w-[180px] px-4 py-2 bg-indigo-800 text-white text-center font-semibold border border-black">AKSI</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td class="border px-2 py-2">{{$item->id}}</td>
                        <td class="border px-2 py-2">{{$item->nama}}</td>
                        <td class="border px-2 py-2">{{$item->nim}}</td>
                        <td class="border px-2 py-2">{{$item->alamat}}</td>
                        <td class="border px-2 py-2 flex gap-[10px]">
                            <a href="{{url('mahasiswa/'.$item->id.'/edit')}}" class="px-4 py-1 bg-blue-600 text-white rounded-full">Edit</a>
                            <form action="{{url('mahasiswa/'.$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="px-4 py-1 bg-red-500 text-white rounded-full">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
</body>
</html>