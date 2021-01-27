@extends('adminArea.layouts.adminApp')
@section('content')
    <br><br><br><br>
    <div class="text-center">
        <div class="row">
            <div class="col-12">
                <h1>Update Category</h1>
                <form action="{{ route('update-user-part') }}" method="post">
                    {{ csrf_field() }}
                    <input class="form-control" name="name" type="text" value="{{ $update_user_data->name }}">
                    <input class="form-control" name="email" type="text" value="{{ $update_user_data->email }}">
                    <input name="id" type="hidden" value="{{ $update_user_data->id }}">
                    <br>
                    <input type="submit" class="btn btn-success" value="UPDATE">
                    <a href="{{ route('admin-show-user') }}" class="btn btn-warning">CANCEL</a>
                </form>
            </div>
        </div>
    </div>

@endsection
