@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <tbody>
                    <?php $i = 1; ?>
                        @foreach($errors as $user)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        @endforeach
                </tbody>
            </div>
        </div>
    </div>
</div>
@endsection