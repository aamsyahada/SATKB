<!DOCTYPE html>
<html>
<head>
	<title>Sistem Analisis Tumbuh Kembang Balita</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		@if(session('sukses'))
		<div class="alert alert-success" role="alert">{{session('sukses')}}</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h2>Rekam Medis Pemeriksaan Balita</h2>
			</div>
			<div class="col-6">
				<button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
				Tambah Data Balita</button>				
			</div>
			<table class="table table-hover">
				<tr>
					<td style="background-color:MediumSeaGreen;">ID</td>
					<td style="background-color:MediumSeaGreen;">NAMA DEPAN</td>
					<td style="background-color:MediumSeaGreen;">NAMA BELAKANG</td>
					<td style="background-color:MediumSeaGreen;">JENIS KELAMIN</td>
					<td style="background-color:MediumSeaGreen;">USIA(Bulan)</td>
					<td style="background-color:MediumSeaGreen;">AKSI</td>
				</tr>
				@foreach($data_balita as $balita)
				<tr>
					<td>{{$balita->id}}</td>
					<td>{{$balita->nama_depan}}</td>
					<td>{{$balita->nama_belakang}}</td>
					<td>{{$balita->jenis_kelamin}}</td>
					<td>{{$balita->umur}}</td>
					<td><a href="/balita/{{$balita->id}}/edit" class="btn-warning btn-sm">UBAH</a></td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Balita</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="/balita/create" method="POST">
				        	{{csrf_field()}}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Depan</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_depan">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Belakang</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_belakang">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Usia(Bulan)</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="umur">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
						    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
						      <option value="L">Laki-laki</option>
						      <option value="P">Perempuan</option>
						    </select>
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Agama</label>
						    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="agama">
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Alamat</label>
						    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
						  </div>

						  <h5>Data Pertumbuhan</h5>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Berat Badan</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="berat_badan">
							    <label for="exampleInputEmail1">Panjang Badan</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="panjang_badan">
							    <label for="exampleInputEmail1">Lingkar Kepala</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
							    name="lingkar_kepala">
							  </div>

							  <h5>Data Perkembangan kemampuan Balita</h5>
							    <div class="form-check">
							    <label style="color:Green">Duduk :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="duduk" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Bisa</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="duduk" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum Bisa</label>
								</div>
								<div class="form-check">
							    <label style="color:Green">Tengkurap :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="tengkurap" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Bisa</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="tengkurap" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum Bisa</label>
								</div>
								<div class="form-check">
							    <label style="color:Green">Bicara :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="bicara" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Bisa</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="bicara" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum Bisa</label>
								</div>
								<div class="form-check">
							    <label style="color:Green">Merangkak :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="merangkak" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Bisa</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="merangkak" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum Bisa</label>
								</div>
								<div class="form-check">
							    <label style="color:Green">Berdiri :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="berdiri" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Bisa</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="berdiri" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum Bisa</label>
								</div>
								<div class="form-check">
							    <label style="color:Green">Berjalan :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="berjalan" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Bisa</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="berjalan" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum Bisa</label>
								</div>
								
								<h6>Data Pemberian Vitamin,Vaksin,& Imunisasi pada Balita</h6>
							    <label style="color:Orange;">Vitamin</label>
							    <div class="form-check">
							    <label style="color:Tomato">Vitamin A :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminA" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminA" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vitamin B :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminB" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminB" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vitamin C :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminC" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminC" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vitamin D :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminD" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminD" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vitamin E :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminE" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminE" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vitamin K :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminK" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vitaminK" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<label style="color:Orange;">Vaksin</label>
							    <div class="form-check">
							    <label style="color:Tomato">Vaksin Hepatitis B :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_hepatitisB" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_hepatitisB" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vaksin Polio :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_polio" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_polio" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vaksin BCG :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_bcg" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_bcg" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vaksin Campak :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_campak" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_campak" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<div class="form-check">
							    <label style="color:Tomato">Vaksin Pentavalen :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_pentavalen" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="vaksin_pentavalen" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>
								<label style="color:Orange;">Imunisasi</label>
							    <div class="form-check">
							    <label style="color:Tomato">Imunisasi :</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="imunisasi" id="exampleRadios1" value="1">
								  <label class="form-check-label" for="exampleRadios1">Sudah</label>
								</div>
								<div class="form-check">
								  <input class="form-check-input" type="radio" name="imunisasi" id="exampleRadios1" value="0">
								  <label class="form-check-label" for="exampleRadios1">Belum</label>
								</div>

								

				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				        </form>
				      </div>
				    </div>
				  </div>
				</div>
	

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
