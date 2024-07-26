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
                                    <a href="<?= base_url('ArsipInternal/edit/' . $dkmn['id']); ?>" class="btn btn-success" data-target="#editModal">Edit</a>
                                    <a href="<?= base_url('ArsipInternal/hapus/' . $dkmn['id']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus dokumen?')" class="btn btn-danger">Hapus</a>
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

<!-- Modal Tambah Data-->
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
                <form id="uploadForm" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">Pilih File</label>
                        <input type="file" class="form-control-file" id="file" name="file">
                    </div>
                
                    <div class="form-group">
                        <label for="jenis">Jenis Dokumen</label>
                        <select class="form-control" id="jenis" name="jenis">
                            <option value="">---Pilih Jenis Dokumen---</option>
                            <option value="Internal">Arsip Internal</option>
                            <option value="Umum">Arsip Umum</option>
                            <option value="Surat">Arsip Surat</option>
                            <option value="Dokumen">Dokumen</option>
                            <option value="Surat Keputusan">Surat Keputusan</option>
                            <option value="Berkas Kerja">Berkas Kerja</option>
                            <option value="SOP">SOP</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="divisi">Divisi</label>
                        <select class="form-control" id="divisi" name="divisi">
                            <option value="">---Pilih Divisi---</option>
                            <option value="IT">IT</option>
                            <option value="UMUM">Bagian Umum</option>
                            <option value="MEC">Mechanic</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nomor">Nomor</label>
                        <input type="text" class="form-control" id="nomor" name="nomor">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>
