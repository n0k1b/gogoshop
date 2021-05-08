@extends('admin.layout.app')
@section('page_css')
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/image_preview.css?{{time()}}">
@endsection
@section('content')
<div class="container-fluid">

				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Courier Man</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>

                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Courier Man</a></li>
                        </ol>
                    </div>
                </div>

				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">

							<div class="card-body">
                                <form action="{{route('add-courier')}}" method="post" enctype="multipart/form-data">
                                @csrf
									<div class="row">


									 <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Name</label>
												<input type="text" class="form-control" name="name">
											</div>
									    </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Mobile</label>
												<input type="text" class="form-control" name="contact_no">
											</div>
									    </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Reference Name</label>
												<input type="text" class="form-control" name="reference_name">
											</div>
									    </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Address</label>
												<input type="text" class="form-control" name="address">
											</div>
									    </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<div class="field" align="left">
													<label class="form-label">User Document(NID/Birth Certificate)</label>
													<input type="file" id="files" name="personal_document" />
												  </div>
											</div>
										</div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<div class="field" align="left">
													<label class="form-label">User Image</label>
													<input type="file" id="files2" name="user_image" />
												  </div>
											</div>
										</div>

                                        <div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<label class="form-label">Default Password</label>
												<input type="text" class="form-control" name="password">
											</div>
									    </div>















										<div class="col-lg-12 col-md-12 col-sm-12">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-light">Cancel</button>
										</div>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
				</div>

            </div>
@endsection

@section('page_js')
<script src="{{asset('assets')}}/admin/js/single_image_preview.js?{{time()}}"></script>
@endsection
