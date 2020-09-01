<form action="/gaji/store" method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="gaji">Gaji</label>
        <input class="form-control @error('gaji') is-invalid @enderror" type="number" name="gaji" id="gaji" value="{{ old('gaji') }}" placeholder="Masukkan Nama Gaji"> @error('gaji')
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