<!DOCTYPE html>
<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    	<title>Register Pengguna</title>
    </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 offset-md-3">
    				<div class="card ">
    					<div class="card-title text-center">
    						<h1>Register</h1>
                            @if (session('status'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <p>{{ session('status') }}</p>
                                </div>
                            @endif
                            @foreach ($errors->all() as $error)
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <p>{{ $error }}</p>
                                </div>
                            @endforeach
    					</div>
    					<div class="card-body">
    						<form action="{{ route('pengguna.store') }}" method="post">
                            @csrf
    							<div class="form-group">
    								<label for="nama">Nama Lengkap</label>
    								<input type="text" name="nama" class="form-control" id="nama" aria-describedby="nama" placeholder="Nama lengkap" required="required">
    							</div>
    							<div class="form-group">
    								<label for="alamat">Alamat</label>
                                    <textarea name="alamat"  class="form-control" id="alamat" aria-describedby="alamat" placeholder="Alamat" required="required"></textarea>
    							</div>
                                <div class="form-group">
    								<label for="telp">No Telp</label>
    								<input type="text" name="telp" class="form-control" id="telp" aria-describedby="telp" placeholder="+62.../08.." required="required">
    							</div>
                                <div class="form-group">
    								<label for="sim">No SIM</label>
    								<input type="text" name="sim" class="form-control" id="sim" aria-describedby="sim" placeholder="Nomor SIM" required="required">
    							</div>
    							<div class="form-group">
    								<label for="pass">Password</label>
    								<input type="pass" name="pass" class="form-control" id="pass" placeholder="Password" required="required">
    							</div>
    							<button type="submit" class="btn btn-primary">Register</button>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </body>
</html>