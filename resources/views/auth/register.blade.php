<!doctype html>
<html lang="en">


<!-- Mirrored from arasari.studio/wp-content/projects/forny/templates/03_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 07:06:02 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Authentication forms">
    <meta name="author" content="Arasari Studio">

    <title>GOGO SHOP</title>
    <link href="{{asset('assets')}}/auth/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('assets')}}/auth/css/common.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">




<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;display=swap" rel="stylesheet">
<link href="{{asset('assets')}}/auth/css/theme-03.css?{{ time() }}" rel="stylesheet">

<style>
    .btn{
    width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 15px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
    }
    .google {
  background-color: #bf0000;
  color: white !important;
}

</style>

</head>

<body>
    <div class="forny-container">

<div class="forny-inner">
    <div class="forny-form">
        <div class="mb-8 text-center forny-logo">
            <img src="{{ asset('assets')}}/admin/images/logo.png" height="100px" width="100px">
        </div>
        <div class="text-center">
            @if(count($errors)>0)

            @foreach($errors->all() as $error)

               <p class="alert alert-danger" >{{$error}}</p>
            @endforeach
          @endif
            <h4>Login</h4>
            <p class="mb-10">Setup a new account in a minute.</p>
        </div>
        <form action="{{ route('send_otp') }}" method="POST">
            @csrf

    <div class="form-group">

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    width="32.666px" height="32.666px" viewBox="0 0 32.666 32.666" style="enable-background:new 0 0 32.666 32.666;"
                    xml:space="preserve">
               <g>
                   <path d="M28.189,16.504h-1.666c0-5.437-4.422-9.858-9.856-9.858l-0.001-1.664C23.021,4.979,28.189,10.149,28.189,16.504z
                        M16.666,7.856L16.665,9.52c3.853,0,6.983,3.133,6.981,6.983l1.666-0.001C25.312,11.735,21.436,7.856,16.666,7.856z M16.333,0
                       C7.326,0,0,7.326,0,16.334c0,9.006,7.326,16.332,16.333,16.332c0.557,0,1.007-0.45,1.007-1.006c0-0.559-0.45-1.01-1.007-1.01
                       c-7.896,0-14.318-6.424-14.318-14.316c0-7.896,6.422-14.319,14.318-14.319c7.896,0,14.317,6.424,14.317,14.319
                       c0,3.299-1.756,6.568-4.269,7.954c-0.913,0.502-1.903,0.751-2.959,0.761c0.634-0.377,1.183-0.887,1.591-1.529
                       c0.08-0.121,0.186-0.228,0.238-0.359c0.328-0.789,0.357-1.684,0.555-2.518c0.243-1.064-4.658-3.143-5.084-1.814
                       c-0.154,0.492-0.39,2.048-0.699,2.458c-0.275,0.366-0.953,0.192-1.377-0.168c-1.117-0.952-2.364-2.351-3.458-3.457l0.002-0.001
                       c-0.028-0.029-0.062-0.061-0.092-0.092c-0.031-0.029-0.062-0.062-0.093-0.092v0.002c-1.106-1.096-2.506-2.34-3.457-3.459
                       c-0.36-0.424-0.534-1.102-0.168-1.377c0.41-0.311,1.966-0.543,2.458-0.699c1.326-0.424-0.75-5.328-1.816-5.084
                       c-0.832,0.195-1.727,0.227-2.516,0.553c-0.134,0.057-0.238,0.16-0.359,0.24c-2.799,1.774-3.16,6.082-0.428,9.292
                       c1.041,1.228,2.127,2.416,3.245,3.576l-0.006,0.004c0.031,0.031,0.063,0.06,0.095,0.09c0.03,0.031,0.059,0.062,0.088,0.095
                       l0.006-0.006c1.16,1.118,2.535,2.765,4.769,4.255c4.703,3.141,8.312,2.264,10.438,1.098c3.67-2.021,5.312-6.338,5.312-9.719
                       C32.666,7.326,25.339,0,16.333,0z"/>     </g><g> </g> <g> </g>   <g> </g>  <g> </g> <g> </g><g> </g> <g>  </g><g> </g> <g> </g> <g>  </g> <g> </g>  <g>  </g> <g>   </g>   <g>
               </g>
               <g>    </g>
               </svg>

                </span>
            </div>

    <input required  class="form-control" name="mobile_number" type="username" placeholder="Mobile Number">

        </div>
    </div>






            <div>
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </div>

            <div class="line mt-10 mb-6">
                <span>or </span>
            </div>

            <div class="text-center">

                <div class="d-inline-block mr-4">

                    <a href="" class="btn google"> <i class="bi bi-google"></i> Login With Google</a>

                </div>

            </div>


        </form>
    </div>
</div>

    </div>

    <script src="{{asset('assets')}}/auth/js/jquery.min.js"></script>
    <script src="{{asset('assets')}}/auth/js/bootstrap.min.js"></script>
    <script src="{{asset('assets')}}/auth/js/main.js"></script>
    <script src="{{asset('assets')}}/auth/js/demo.js"></script>

</body>


<!-- Mirrored from arasari.studio/wp-content/projects/forny/templates/03_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Mar 2021 07:06:02 GMT -->
</html>
