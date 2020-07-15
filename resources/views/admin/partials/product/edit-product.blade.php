@extends('admin.layouts.main')
@section('title')
Edit Produk - Admin | Rull Rubber - Jual Gelang Custom
@endsection
@section('content')
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">

                <!-- DATA TABLE -->
                <div class="container">
                    <div class="row m-t-30">
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="/admin/product" name="back" class="btn btn-dark" value="Kembali"><i
                                        class="fa fa-arrow-left"></i></a>
                            </div>
                            @foreach ($products as $p)
                            <form action="{{ route('update_product', $p->id) }}" method="POST"
                                enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="product_id">Id Produk</label>
                                    <input type="text" name="id" value="{{ $p->id }}" class="form-control"
                                        id="product_id" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="product_name">Nama Produk</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name"
                                        value="{{ $p->product_name }}" autofocus="" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <label for="image">Pilih Gambar</label>
                                    <input type="file" class="form-control-file" id="image" name="image">
                                </div>
                                <div class="form-group">
                                    <label for="preview-image">Gambar saat ini</label><br>
                                    <img src="{{ URL::to('/') }}/admin/image/{{ $p->image }}" alt="{{ $p->image }}"
                                        style="width: 200px; height: 100px">
                                </div>
                                <div class="form-group">
                                    <label for="preview-image">Preview Gambar Terbaru</label><br>
                                    <img src="" id="preview-image" alt="" style="width: 200px; height: 100px">
                                </div>
                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea type="text" class="form-control" id="description" name="description"
                                        autocomplete="off">{{ $p->description }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="type">Tipe</label>
                                    <select type="text" class="form-control" id="type" name="type">
                                        <option value="nahwey">nahwey</option>
                                        {{-- @foreach ($products as $p)
                                        <option value="{{ $p->id }}" name="type"
                                        {{ (isset($p->id) || old('id'))? "selected": "" }}>
                                        {{ $p->type }}
                                        </option>
                                        @endforeach --}}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="price">Harga</label>
                                    <input type="number" class="form-control" id="price" name="price"
                                        value="{{ $p->price }}" autocomplete="off">
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="Simpan">
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection
