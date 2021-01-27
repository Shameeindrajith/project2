@extends('adminArea.layouts.adminApp')
@section('content')
    <br><br><br><br>
    <div class="text-center">
        <div class="row">
            <div class="col-12">
                <h1>Add Product</h1>
                <form method="post" action="{{ route('save-user') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" class="form-control" name="name" placeholder="Enter name"><br>
                    <input type="text" class="form-control" name="email" placeholder="Enter email"><br>
                    <input type="password" id="password" class="form-control" name="password"
                        placeholder="Enter password"><br>
                    <input type="password" id="repassword" class="form-control" name="repassword"
                        placeholder="Re enter password"><br>
                    <span id='message'></span>

                    <br>
                    <input type="submit" class="btn btn-primary" value="SAVE">
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#password, #repassword').on('keyup', function() {
            if ($('#password').val() == $('#repassword').val()) {
                $('#message').html('Password Matching').css('color', 'green');
            } else
                $('#message').html('Password Not Matching').css('color', 'red');
        });

    </script>
@endsection
