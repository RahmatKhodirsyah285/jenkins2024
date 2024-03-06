<?php
    use function PHPUnit\Framework\isNull;
?>
<div>
    <h1>Welcome To Inixindo, {{$title}}</h1>
    <h1> Dengan Hostname {{gethostname()}}</h1>
    <form action=" " method="GET">
        <div class="">
            <label> Masukan Nama </label>
            <input type="text" name="title">
        </div>
        <button type="simpan">Simpan</button>
    </form>
</div>