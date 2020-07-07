@extends('home.layouts.master')

@section('page')

Dashboard

@endsection

@section('content')

		<div class="content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-warning text-center">
											<i class="fas fa-user-graduate"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Pendidikan</p>
											{{ $pendidikan->count() }}
										</div>
									</div>
								</div>
								<div class="footer">
									<hr/>	
									<div class="stats">
										<a href="/pendidikan"><i class="fas fa-user-graduate"></i>Pendidikan</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-success text-center">
											<i class="fas fa-building"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Pengalaman Bekerja</p>											
											4
										</div>
									</div>
								</div>
								<div class="footer">
									<hr/>	
									<div class="stats">
										<a href="/pengalamanbekerja"><i class="fas fa-building"></i>Pengalaman Bekerja</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-danger text-center">
											<i class="ti-desktop"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Keterampilan</p>
											8
										</div>
									</div>
								</div>
								<div class="footer">
									<hr/>	
									<div class="stats">
										<a href="/keterampilan"><i class="ti-desktop"></i>Keterampilan</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="card">
							<div class="content">
								<div class="row">
									<div class="col-xs-5">
										<div class="icon-big icon-info text-center">
										<i class="fas fa-certificate"></i>
										</div>
									</div>
									<div class="col-xs-7">
										<div class="numbers">
											<p>Training</p>
											{{ $training->count() }}
										</div>
									</div>
								</div>
								<div class="footer">
								<hr/>
									<div class="stats">
										<a href="/training"><i class="fas fa-certificate"></i>Training</a>
									</div>
								</div>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>

@endsection