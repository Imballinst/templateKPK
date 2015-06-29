<?php include("header.php"); 
include("navbar.php"); ?>
    <div class="container">
        <div class="row row-custom">
            <div class="col-md-12">
                <h1 class="center">Daftar Master Pengguna</h1>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <button class="btn btn-primary btn-primary-custom" data-toggle="modal" data-target="#tambahPengguna">
                    <span class="glyphicon glyphicon-plus-sign"></span>Tambah Pengguna
                </button>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-4"></div>
            <div class="col-md-12 col-md-12-custom">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NPP</th>
                            <th>Nama Pengguna</th>
                            <th>Nama Lengkap</th>
                            <th>Peran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                            <td>Dummy</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="tambahPengguna" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                <form>
                    <div>
                        <input type="hidden" id="hidden_id"/>
                        <input type="hidden" id="id_pengguna"/>
                    </div>
                    <div class="form-group">
                        <label for="input_npp">Nomor Pokok Pegawai</label>
                        <input class="form-control" type="text" id="input_npp" placeholder="Nomor Pokok Pegawai"/>
                    </div>
                    <div class="form-group">
                        <label for="input_nama_pengguna">Nama Pengguna</label>
                        <input class="form-control" type="text" id="input_nama_pengguna" placeholder="Nama Pengguna"/>
                    </div>
                    <div class="form-group">
                        <label for="input_display_name">Nama Lengkap</label>
                        <input class="form-control" type="text" id="input_nama_lengkap" placeholder="Nama Lengkap"/>
                    </div>
                    <div class="form-group">
                        <label for="select_status">Status</label>
                        <select class="form-control" id="select_status">
                            <option value="0">Aktif</option>
                            <option value="1">Tidak Aktif</option>
                        </select>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-primary-custom">Save</button>
              </div>
            </div>
          </div>
        </div>
<?php include("footer.php"); ?>