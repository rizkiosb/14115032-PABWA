<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form tambah data mahasiswa
                </div>
                <div class="card-body">
                    <div class="container">
                        <form action="<?= base_url() ?>Mahasiswa/tambah" method="POST">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" required="required">
                            </div>
                            <div class="form-group">
                                <label>Nim</label>
                                <input type="text" class="form-control" id="nim" name="nim" placeholder="Enter Nim" required="required">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email" required="required">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control" id="jurusan" name="jurusan">
                                    <option>Informatika</option>
                                    <option>Perencanaan wilayah dan kota</option>
                                    <option>Elektro</option>
                                    <option>Sipil</option>
                                    <option>Geomatika</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>