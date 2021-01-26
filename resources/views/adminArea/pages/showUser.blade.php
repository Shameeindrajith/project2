@extends('adminArea.layouts.adminApp')

@section('content')
    <br><br><br>

    <div class="text-center">
        <div class="row">
            <div class="col-12">
                <h1>Users</h1>
                <div id='addnewuser'><button type="button" class="btn btn-warning"><a
                            href="{{ route('admin-add-user') }}">Add
                            New</a></button></div>
                <br>
                <table class="table table-dark">
                    <th>ID</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>User_role</th>
                    <th>Created_at</th>


                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->user_role }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <style>
        #adminbtn {
            background-color: #B1E1EF !important;
        }

        #addnewuser {
            line-height: 12px;
            width: 18px;
            font-size: 8pt;
            font-family: tahoma;
            margin-top: 1px;
            margin-right: 100px;
            position: absolute;
            top: 2px;
            right: 0;

        }

    </style>
@endsection
