<div class="container pt-5">
        <div class="text-right">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap" style="margin-bottom:10px;">Tambah Dokumen</button>
        </div>
 
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title" style="text-align: center;">Dokumen Arsip Internal</h4>
            </div>
 
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>dokumen</th>
                                <th>nomor</th>
                                <th>jenis</th>
                                <th>divisi</th>
                                <th>tanggal</th>
                                <th>user</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($getDokumen as $dkmn) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $dkmn['dokumen']; ?></td>
                                    <td><?= $dkmn['nomor']; ?></td>
                                    <td><?= $dkmn['jenis']; ?></td>
                                    <td><?= $dkmn['divisi']; ?></td>
                                    <td><?= $dkmn['tanggal']; ?></td>
                                    <td><?= $dkmn['user']; ?></td>
                                    <td>
                                        <a href="<?= base_url('ArsipInternal/edit/' . $dkmn['id']); ?>" class="btn btn-success" data-target="#editModal">
                                            Edit</a>
                                        <a href="<?= base_url('ArsipInternal/hapus/' . $dkmn['id']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus dokumen?')" class="btn btn-danger">
                                            Hapus</a>
                                    </td>
                                </tr>
                            <?php $no++;
                            } ?>
                        </tbody>
 
                    </table>
                </div>
            </div>
        </div>
    </div>
 
    <!--   Modal Tambah Data-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Dokumen Arsip Internal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('employee/add'); ?>">
                        <div class="form-group">
                            <label for="nama_karyawan" class="col-form-label">Nama Karyawan</label>
                            <input type="text" class="form-control" id="nama_karyawan" name="nama_karyawan">
                        </div>
                        <div class="form-group">
                            <label for="usia" class="col-form-label">Usia</label>
                            <input type="text" class="form-control" id="usia" name="usia">
                        </div>
                        <div class="form-group">
                            <label for="status_vaksin_1" class="col-form-label">Status Vaksin 1</label>
                            <select class="form-control" name="status_vaksin_1">
                                <option value="">---Pilih Status Vaksin---</option>
                                <option value="Belum">Belum Vaksin</option>
                                <option value="Sudah">Sudah Vaksin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status_vaksin_2" class="col-form-label">Status Vaksin 2</label>
                            <select class="form-control" name="status_vaksin_2">
                                <option value="">---Pilih Status Vaksin---</option>
                                <option value="Belum">Belum Vaksin</option>
                                <option value="Sudah">Sudah Vaksin</option>
                            </select>
                        </div>
 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    </body>