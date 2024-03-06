<?php
    use function PHPUnit\Framework\isNull;
?>
<div>
    <h1>Welcome To Inixindo {{gethostname()}}</h1>
    <form action="{{route('post_list)}}" method="GET">
        <div class="">
            <label> Masukan Nama </label>
            <input type="text" name="title">
        </div>
        <button type="simpan">Simpan</button>
    </form>
</div>