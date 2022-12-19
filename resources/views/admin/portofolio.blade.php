<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin RPL SMKN 4 Malang</title>

    <link href="assets/img/backgorund-logo.jpeg" rel="icon">
    <link rel="stylesheet" href="assets/css/admin_style.css">

    {{-- icon --}}
    <script src="https://code.iconify.design/3/3.0.1/iconify.min.js"></script>

    {{-- boostrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>
<body>
    <div id="sidebar">
        <div class="close" style="position: absolute; right: 10px;">
            <i class="bi bi-x-circle" style="color: white; size:"></i>
        </div>
        <header>
            <a href="/">
                <img src="assets/img/logo.png" alt="smkn4" width="100">
            </a>
        </header>
        <ul class="nav">
            <li>
                <a href="/admin">
                    <i class="bi bi-speedometer2"></i>Dashboard
                </a>
            </li>
            <li class="active">
                <a href="">
                    <i class="bi bi-book"></i>Portofolio
                </a>
            </li>
            <li>
                <a href="">
                    <i class="bi bi-people"></i>Admin
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
                <a href="{{ route('logout') }}">
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
                <h6 style="margin: 0 50px">Hi, {{auth()->user()->name}}</h6>
            </a>
        </div>
        <div class="dashboard">
            Portofolio
            <div class="add">
                Tambahkan Portofolio
                <form action="{{ route('create_portofolio') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="title" placeholder="Judul Website">
                    <select name="kategori">
                        <option value="ui">UI/UX</option>
                        <option value="Mobile">Mobile</option>
                        <option value="Web">Web</option>
                        <option value="Games">Games</option>
                    </select>
                    <input type="file" name="image" accept="image/png, image/gif, image/jpeg">
                    <button type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script>
document.querySelector(".menu").addEventListener("click", function(){
document.querySelector("#sidebar").style.visibility='visible';
})
document.querySelector(".close").addEventListener("click", function(){
document.querySelector("#sidebar").style.visibility="hidden"
})
document.addEventListener('click', function handleClickOutsideBox(event) {
const box = document.getElementById('');
if (!box.contains(event.target)) {
    box.style.display = 'none';
}
});
</script>

<style>
    .add {
        margin: 10px;
        padding: 15px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
    }
</style>