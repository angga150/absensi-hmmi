<div class="container mt-5">

    <div class="card" style="width: 18rem;">
    <form action="<?=BASEURL;?>mahasiswa/ubah" method="post">
        <div class="card-body">
            <input type="hidden" name="id" value="<?= $data['mhs']['id']; ?>">
            <h5 class="card-title">
                <input type="text" name="nama" value="<?= $data['mhs']['nama']; ?>">
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <input type="text" name="nim" value="<?= $data['mhs']['nim']; ?>">
            </h6>
            <p class="card-text">
                <input type="text" name="email" value="<?= $data['mhs']['email']; ?>">
            </p>
            <p class="card-text">
                <input type="text" name="jurusan" value="<?= $data['mhs']['jurusan']; ?>">
            </p>
            <button type="submit">Ubah</button>
            <a href="<?= BASEURL; ?>mahasiswa" class="card-link">Kembali</a>
        </div>
    </form>
</div>

</div>