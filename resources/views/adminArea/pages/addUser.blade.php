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
                    <input id="inp_email" onkeyup="validateEmail()" class="form-control" placeholder="Enter Email"
                        type="email" name="email" required>
                    <span class="invalid-feedback" id="email_msg">
                    </span>
                    {{-- @if ($errors->has('email'))
                        <strong>{{ $errors->first('email') }}</strong>
                    @endif --}}<br>
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
                $('#message').html('Password is Matching').css('color', 'green');
            } else
                $('#message').html('Password is not Matching').css('color', 'red');
        });



        function validateEmail() {
            $.ajax({
                url: "{{ route('validate-email') }}?email=" + $('#inp_email').val(),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                success: function(response) {
                    if (response['status'] == 1) {
                        $('#inp_email').addClass("is-valid").removeClass("is-invalid");
                        email_valid = true;
                        $('#valid_email').val(1);
                        validsubmit();
                    } else {
                        email_valid = false;
                        $('#inp_email').addClass("is-invalid").removeClass("is-valid");
                        $('#email_msg').html(
                            "<strong class='text-danger'>" +
                            response['msg'] +
                            " </strong> ");
                        $('#valid_email').val(0);
                        validsubmit();
                    }
                }
            });
        }

    </script>
@endsection
