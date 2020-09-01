@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Input Gaji</div>
                <form action="/gaji/store" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="gaji">Gaji</label>
                        <input class="form-control @error('gaji') is-invalid @enderror" type="number" name="gaji" id="gaji" value="{{ old('gaji') }}" placeholder="Masukkan Gaji"> @error('gaji')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tahun">tahun</label>
                        <input class="form-control @error('type') is-invalid @enderror" type="date" name="date" id="date" value="{{ old('tahun') }}" placeholder="masukkan tahun"> @error('tahun')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    <div class="form-group float-right">
                        <button class="btn btn-lg btn-primary" type="submit">Submit</button>
                    </div>
                </form>
                  
            </div>
        </div>
    </div>
</div>
<div class="container">
        <div class="card-header">Tabel Gaji</div>
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
@endsection