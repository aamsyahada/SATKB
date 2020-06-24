<!DOCTYPE html>
<html>
<head>
	<title>Sistem Analisis Tumbuh Kembang Balita</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
		<body>
			<div class="container">
				<h2>Update Data Balita Setelah Pemeriksaan Bulanan</h2>
				@if(session('sukses'))
				<div class="alert alert-success" role="alert">
				  {{session('sukses')}}
				</div>
				@endif
				<div class="row">
					<div class="col-lg-12">
					<form action="balita/{{$balita->id}}/update" method="POST">
					        	{{csrf_field()}}
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Depan</label>
							    <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Depan" value="{{$balita->nama_depan}}">
							  </div>
							   
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nama Belakang</label>
							    <input name="nama_belakang"type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Belakang" value="{{$balita->nama_belakang}}">
							  </div>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Umur</label>
							    <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Umur" value="{{$balita->umur}}">
							  </div>

							  <div class="form-group">
							    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
							    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" value="{{$balita->jenis_kelamin}}">
							      <option value="L" @if($balita->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
							      <option value="P" @if($balita->jenis_kelamin == 'P') selected @endif>Perempuan</option>
							    </select>
							  </div>

							  <div class="form-group">
							    <label for="exampleInputEmail1">Agama</label>
							    <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Agama" value="{{$balita->agama}}">
							  </div>

							  <div class="form-group">
    							<label for="exampleFormControlTextarea1">Alamat</label>
							    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Alamat">{{$balita->alamat}}</textarea>
							  </div>

							  <h2>Data Pertumbuhan</h2>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Berat Badan</label>
							    <input name="berat_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Berat Badan" value="{{$balita->berat_badan}}">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Panjang Badan</label>
							    <input name="panjang_badan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Panjang Badan" value="{{$balita->panjang_badan}}">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Lingkar Kepala</label>
							    <input name="lingkar_kepala" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Lingkar Kepala" value="{{$balita->lingkar_kepala}}">
							  </div>
							  
							  <h4>Data Perkembangan kemampuan Balita</h4>
							  <div class="form-group">
							  	<label>Duduk :</label>
								  <input class="form-group-input" type="radio" name="duduk" id="exampleRadios1" value="1">
								  <label class="form-group-label" for="exampleRadios1">Bisa</label>
								  <input class="form-group-input" type="radio" name="duduk" id="exampleRadios2" value="0">
								  <label class="form-group-label" for="exampleRadios2">Belum Bisa</label>
							  </div>
							  <div class="form-group">
							  	<label>Tengkurap :</label>
								  <input class="form-group-input" type="radio" name="tengkurap" id="exampleRadios1" value="1">
								  <label class="form-group-label" for="exampleRadios1">Bisa</label>
								  <input class="form-group-input" type="radio" name="tengkurap" id="exampleRadios2" value="0">
								  <label class="form-group-label" for="exampleRadios2">Belum Bisa</label>
							  </div>
							  <div class="form-group">
							  	<label>Bicara :</label>
								  <input class="form-group-input" type="radio" name="bicara" id="exampleRadios1" value="1">
								  <label class="form-group-label" for="exampleRadios1">Bisa</label>
								  <input class="form-group-input" type="radio" name="bicara" id="exampleRadios2" value="0">
								  <label class="form-group-label" for="exampleRadios2">Belum Bisa</label>
							  </div>
							  <div class="form-group">
							  	<label>Merangkak :</label>
								  <input class="form-group-input" type="radio" name="merangkak" id="exampleRadios1" value="1">
								  <label class="form-group-label" for="exampleRadios1">Bisa</label>
								  <input class="form-group-input" type="radio" name="merangkak" id="exampleRadios2" value="0">
								  <label class="form-group-label" for="exampleRadios2">Belum Bisa</label>
							  </div>
							  <div class="form-group">
							  	<label>Berdiri :</label>
								  <input class="form-group-input" type="radio" name="berdiri" id="exampleRadios1" value="1">
								  <label class="form-group-label" for="exampleRadios1">Bisa</label>
								  <input class="form-group-input" type="radio" name="berdiri" id="exampleRadios2" value="0">
								  <label class="form-group-label" for="exampleRadios2">Belum Bisa</label>
							  </div>
							  <div class="form-group">
							  	<label>Berjalan :</label>
								  <input class="form-group-input" type="radio" name="berjalan" id="exampleRadios1" value="1">
								  <label class="form-group-label" for="exampleRadios1">Bisa</label>
								  <input class="form-group-input" type="radio" name="berjalan" id="exampleRadios2" value="0">
								  <label class="form-group-label" for="exampleRadios2">Belum Bisa</label>
							  </div>
								
							    <button type="submit" class="btn btn-primary">Submit</button>
					        </form>
					    </div>
				</div>
			</div>
			

			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
		</body>
</html>

