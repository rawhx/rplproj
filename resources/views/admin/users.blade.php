<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin - RPL SMKN 4 Malang</title>

    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/user.css">

    
    {{-- icon --}}
    <script src="https://code.iconify.design/3/3.0.1/iconify.min.js"></script>

    {{-- boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    @include('properti/modal')
    <div id="sidebar">
        <div class="close" style="position: absolute; right: 10px;">
            <i class="bi bi-x-circle" style="color: white; size:"></i>
        </div>
        <header>
            <a href="{{ route('admindash') }}">
                <img src="https://i0.wp.com/smkn4malang.sch.id/wp-content/uploads/2020/02/logo-grafika.png?w=322&ssl=1" alt="smkn4" width="50">
            </a>
        </header>
        <ul class="nav">
            <li>
                <a href="{{ route('admindash') }}">
                    <i class="bi bi-speedometer2"></i>Dashboard
                </a>
            </li>
            <li class="active">
                <a href="{{route('admins')}}">
                    <i class="bi bi-people"></i>Admin
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-trophy"></i>Prestasi
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-book"></i>Guru Rpl
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-image"></i>Gambar
                </a>
            </li>
            <li>
                <a href="{{route('logout')}}">
                    <i class="bi bi-box-arrow-left" style="color: red"></i>Keluar
                </a>
            </li>
        </ul>
    </div>
    <div class="view">
        <div class="nav">
            <div class="menu">
                <span class="iconify" data-icon="ri:menu-2-fill" data-width="30"></span>
            </div>
            <a class="profile">
                <h6>Hi, {{auth()->user()->nama}}</h6>
                <div class="img" style="background-image: url(https://www.kaorinusantara.or.id/wp-content/uploads/2019/03/film-anime-konosuba-crimson-legend-F1.jpg)"></div>
            </a>
        </div>
        <div class="dashboard">
            <div class="new">
                <h2>Daftar Admin</h2>
                <a href="" data-bs-toggle="modal" data-bs-target="#daftar">Tambahkan Baru</a>
            </div>
            <div class="content">
                <table class="table table-striped">
                    <tr class="judul">
                        <th style="color: white">No</th>
                        <th style="color: white">Nama</th>
                        <th style="color: white">Email</th>
                        <th style="color: white">Aksi</th>
                    </tr>
                    @foreach ($admin as $item)    
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->email}}</td>
                        <td class="aksi">
                            <div class="edit">
                                <a href="">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </div>
                            <div class="hapus">
                                <a href="">
                                    <i class="bi bi-trash2" style="color: red"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</body>
</html>
<script>
document.querySelector(".menu").addEventListener("click", function(){
    document.querySelector("#sidebar").style.display="block"
})
document.querySelector(".close").addEventListener("click", function(){
    document.querySelector("#sidebar").style.display="none"
})
document.addEventListener('click', function handleClickOutsideBox(event) {
    const box = document.getElementById('');
    if (!box.contains(event.target)) {
        box.style.display = 'none';
    }
});
</script>