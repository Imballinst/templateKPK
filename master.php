<?php include "header.php" ?>
<?php include "menu.php" ?>
		<div class="row content-container">
			<div id="first1" class="pelapor-table">
				<div class="row">
					<div class="col-md-4">

					</div>
					<div class="col-md-4">
						<button 
								id='tambah_pengguna' 
								class="btn btn-default"
								data-toggle="modal" 
								data-idPengguna=""
								data-label="Tambah Pengguna"
								data-buttonAction="Save"
						>
							<p class="btn-text">Tambah Pengguna</a>
						</button>
					</div>
					<div class="col-md-4">

					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
			      		<h1>Daftar Master Pengguna</h1>
			      	</div>
				</div>
				<div>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>NPP</th>
								<th>Nama Pengguna</th>
								<th>Nama Lengkap</th>
								<th>Peran</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody id="tbody">
						</tbody>
					</table>
				</div>
			</div>

			<div class="modal fade ui-front" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				    <div class="modal-content">
				      	<div class="modal-header">
				        	<button type="btn btn-default" class="close" data-dismiss="modal">
				        		<span aria-hidden="true">&times;</span>
				        		<span class="sr-only">Close</span>
				        	</button>
				        	<h4 class="modal-title"><div id="modalLabel"></div></h4>
				      	</div>
				      	<div class="modal-body" id="modal-delete">
				      		Anda ingin menghapus pengguna ini?
				      	</div>
				      	<div class="modal-body" id="modal-body">
				      		<form>
								<div>
									<input
										type="hidden"
										id="hidden_id"
									/>
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
				        	<button id="button-save" type="button" class="btn btn-primary" data-toggle="modal"><p class="btn-text-white">Save</p></button>
				        	<button id="button-update" type="button" class="btn btn-primary" data-toggle="modal"><p class="btn-text-white">Save changes</p></button>
				        	<button id="button-delete" type="button" class="btn btn-primary" data-toggle="modal"><p class="btn-text-white">Delete</p></button>
				      </div>
				    </div>
			  	</div>
			</div>

			<div class="modal fade" id="peran_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				    <div class="modal-content">
				      	<div class="modal-header">
				        	<button type="btn btn-default" class="close" data-dismiss="modal">
				        		<span aria-hidden="true">&times;</span>
				        		<span class="sr-only">Close</span>
				        	</button>
				        	<h4 class="modal-title">Pengaturan Peran</h4>
				      	</div>
				      	<div class="modal-body" id="modal-body">
				      		<form>
				      			<div>
				      				<div id="divNamaPeran"></div>
				      				<div>
				      					<input type="checkbox" value="" id="checkAll"/> Pilih Semua</input>
				      				</div>
									    <div id="pengaturanHakAksesChkBox"></div>
								   </div>
							    </form>
				      	</div>
				      	<div class="modal-footer">
				        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				        	<button id="button-save-hak-akses" type="button" class="btn btn-primary" data-toggle="modal">Save</button>
				      </div>
				    </div>
			  	</div>
			</div>

			<?php include 'javascript.php'; ?>
				<script type="text/javascript">
				    $(document).ready(function() {

				        $.ajax({
				            url : 'index.php/master_pengguna/find_all',
				            type : 'POST',
				            success : function(response) {populateTable(response);},
				            error   : function(e) {onError(e);},
				            dataType : 'JSON',
				            contentType : 'application/json'
				        });
				        
				        function populateTable(response) {
				            $.each(response, function(key, value) {
				                var active = (value.status == 0) ? "Aktif" : "Tidak aktif";
				                var count = value.peran.length;
				                var newContent = '\
				                <tr id="'+value.id_pengguna+'">\
				                <td>' + value.npp +'</td>\
				                <td>' + value.nama_pengguna +'</td>\
				                <td>' + value.nama_lengkap +'</td>\
				                <td><a class="update" data-toggle="modal" data-target="#peran_modal">' + count + ' Peran</a></td>\
				                <td>' + active + '</td>\
				                <td>\
				                    <button type="button" class="btn btn-default update" data-toggle="modal" data-target="#myModal">Ubah</button>\
				                    <button type="button" class="btn btn-default delete" data-toggle="modal" data-target="#myModal">Hapus</button>\
				                </td>\
				                </tr>\
				                ';
				                $('#tbody').append(newContent);
				                $('#tbody #'+value.id_pengguna).attr('data', JSON.stringify(value));
				            });

				            $('.table').DataTable();
				        }

				        $('#tbody').on('click', 'button.delete', function(){
				            var data = JSON.parse($(this).parents('tr').attr('data'));
				            $('#hidden_id').val(data.id_pengguna);
				      $('#id_pengguna').val(data.id_pengguna);
				            $('#modalLabel').text('Delete Pengguna');
				            $('#modal-body').hide();
				            $('#modal-delete').show();
				            $('#button-save').hide();
				            $('#button-update').hide();
				            $('#button-delete').show();
				        });

				        $('#tbody').on('click', 'button.update', function(){
				            var data = JSON.parse($(this).parents('tr').attr('data'));
				            var button = $(this);
				            var label = button.data('label');
				            var btnAction = button.data('buttonaction');
				            var btnLabel = button.data('buttonlabel');
				            $('#modal-delete').hide();
				            $('#modalLabel').text(label);
				            $('#button-save').hide();
				            $('#button-delete').hide();
				            $('#button-update').show();
				      $('#id_pengguna').val(data.id_pengguna);
				            $('#input_npp').val(data.npp);
				            $('#input_nama_pengguna').val(data.nama_pengguna);
				            $('#input_nama_lengkap').val(data.nama_lengkap);
				            $('#select_status').val(data.status);
				        });

				        $('#tambah_pengguna').on('click', function(e){
				            var button = $(this);
				            var label = button.data('label');
				            var btnAction = button.data('buttonaction');
				            var btnLabel = button.data('buttonlabel');
				            $('#modal-delete').hide();
				            $('#modalLabel').text(label);
				            $('#button-save').show();
				            $('#button-delete').hide();
				            $('#button-update').hide();
				            $('#myModal').modal('show');
				            $('#id_pengguna').val('');
				            $('#input_npp').val('');
				            $('#input_nama_pengguna').val('');
				            $('#input_nama_lengkap').val('');
				            $('#select_status').val(0);
				        });

				        $('#button-delete').on('click', function(e){
				            $.ajax({
				                url         : 'index.php/master_pengguna/delete',
				                type        : 'POST',
				                data        : JSON.stringify(getData()),
				                success     : function(response) {location.reload();},
				                error       : function(e) {onError(e);},
				                dataType    : 'json',
				                contentType : 'application/json'
				            });
				            e.preventDefault();
				        });

				        $('#button-update').on('click', function(e){
				            $.ajax({
				                url         : 'index.php/master_pengguna/update',
				                type        : 'POST',
				                data        : JSON.stringify(getData()),
				                success     : function(response) {location.reload();},
				                error       : function(e) {onError(e);},
				                dataType    : 'json',
				                contentType : 'application/json'
				            });
				            e.preventDefault();
				        });

				        $('#button-save').on('click', function(e){
				            $.ajax({
				                url         : 'index.php/master_pengguna/create',
				                type        : 'POST',
				                data        : JSON.stringify(getData()),
				                success     : function(response) {location.reload();},
				                error       : function(e) {onError(e);},
				                dataType    : 'json',
				                contentType : 'application/json'
				            });
				            e.preventDefault();
				        });

				        function onError(e) {
				            console.log(e);
				        }

				        function getData() {
				            var data = {};
				      data['id_pengguna'] = $('#id_pengguna').val();
				            data['npp'] = $('#input_npp').val();
				            data['nama_pengguna'] = $('#input_nama_pengguna').val();
				            data['nama_lengkap'] = $('#input_nama_lengkap').val();
				            data['status'] = $('#select_status').val();
				//      alert(data);
				            return data;
				        }

				        $('#tbody').on('click', 'a.update', function(){
				            var data = JSON.parse($(this).parents('tr').attr('data'));
				            //alert(JSON.stringify(data));

				            var hakAkses;
				            var hakAksesPeran;
				            $.when(
				                $.ajax({
				                    url : 'index.php/master_pengguna/find_peran_by_pengguna',
				                    type : 'POST',
				                    data        : JSON.stringify(data),
				                    success : function(response) {hakAksesPeran = response;},
				                    error   : function(e) {onError(e);},
				                    dataType : 'JSON',
				                    contentType : 'application/json'
				                }),
				                $.ajax({
				                    url : 'index.php/master_peran/find_actives',
				                    type : 'POST',
				                    success : function(response) {hakAkses = response;},
				                    error   : function(e) {onError(e);},
				                    dataType : 'JSON',
				                    contentType : 'application/json'
				                })
				            ).then(function(){
				                if(hakAksesPeran && hakAkses){
				                    populateHakAksesCheckBox(hakAkses
				                            , hakAksesPeran, data);
				                }else{
				                    alert('Gagal');
				                    return;
				                }
				            });
				        });

				        function populateHakAksesCheckBox(peran, peran_pengguna, dataPeran){
				            $('#pengaturanHakAksesChkBox').children().remove();
				            $('#checkAll').click(function(event) {  //on click 
				              if(this.checked) { // check select status
				                  $('#divChkBox input:checkbox').each(function() { 
				                      this.checked = true;
				                  });
				              }else{
				                  $('#divChkBox input:checkbox').each(function() { 
				                      this.checked = false;
				                  });     
				              }
				            });
				            $('#divNamaPeran').text('Pengguna : ' + dataPeran['nama_lengkap']);
				            $('#pengaturanHakAksesChkBox').append('<div id="divChkBox" data="'+dataPeran['id_pengguna']+'">');
				            $.each(peran, function(key, value) {
				                var active = "";
				                $.each(peran_pengguna, function(key2, value2){
				                    if(value.id == value2.id){
				                        active = "checked=checked";
				                        return false;
				                    }else{
				                        active = "";
				                    }
				                });
				                var newContent = '\
				                <input id="chkbox_'+value.id+'"\
				                    type="checkbox"\
				                    name="hakAksesChk"\
				                    value="'+value.nama+'"\
				                    data-id="'+value.id+'"\
				                    '+active+'>\
				                    <label style="font-weight:normal" for="chkbox_'+value.id+'">'+value.nama+'</label><br/>\
				                ';
				                $('#divChkBox').append(newContent);
				            });
				            $('#pengaturanHakAksesChkBox').append('</div>');
				        }

				        $('#button-save-hak-akses').on('click', function(e){
				            var data = {};
				            data.peran = [];
				            data.id_pengguna = $('#divChkBox').attr('data');
				            $('#divChkBox input:checked').each(function() {
				                data.peran.push({
				                    "id_peran"  : $(this).attr('data-id'),
				                    "nama"          : $(this).val()
				                });
				            });
				            $.ajax({
				                url         : 'index.php/master_pengguna/update_peran_pengguna',
				                type        : 'POST',
				                data        : JSON.stringify(data),
				                success     : function(response) {location.reload();},
				                error       : function(e) {onError(e);},
				                dataType    : 'json',
				                contentType : 'application/json'
				            });
				            e.preventDefault();
				        });

				    $( "#input_nama_pengguna" ).autocomplete({
				    source: function (request, response) {
				        $.ajax({
				            url: '',
				            type: 'post',
				            dataType: "json",
				            data: {
				                term: request.term
				            },
				            success: function (data) {
				                response($.map(data, function(item) {
				                    //alert(item.name);
				                    return {
				                        value: item.name,
				                        label: item.name,
				                        id : item.name
				                    };
				                }));
				            }
				        });
				    },
				    change: function(event,ui) {
				        if (ui.item==null) {
				              $(this).val('');
				            }
				        }
				    });

				    });
				</script>
			</div>
<?php include "footer.php"; ?>
