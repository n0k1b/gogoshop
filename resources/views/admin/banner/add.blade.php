@extends('admin.layout.app')
@section('page_css')
<link rel="stylesheet" href="{{asset('assets')}}/admin/css/image_preview.css?{{time()}}">
@endsection
@section('content')
<div class="container-fluid">

				<div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Banner</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>

                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Banner</a></li>
                        </ol>
                    </div>
                </div>

				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">

							<div class="card-body">
                                <form action="{{route('add-banner')}}" method="post" enctype="multipart/form-data">
                                @csrf
									<div class="row">





										<div class="col-lg-12 col-md-12 col-sm-12">
											<div class="form-group">
												<div class="field" align="left">
													<label class="form-label">Banner</label>
													<input type="file" id="files" name="image" />
												  </div>
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
