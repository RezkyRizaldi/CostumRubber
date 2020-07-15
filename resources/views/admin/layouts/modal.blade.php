<!-- Awal Modal -->
<!-- Tambah -->
<div class="modal fade" role="dialog" id="add">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning o-hidden h-100 text-light">
                <div class="tambah-modal-icon">
                    <i class="fad fa-fw fa-burger-soda"></i>
                </div>
                <h3 class="modal-title">Tambah Data Produk</h3>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{ route('add_product') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="product_name">Nama Produk</label>
                        <input type="text" name="product_name"
                            class="form-control @error('username') is-invalid @enderror"
                            value="{{ old('product_name') }}" placeholder=" Masukkan Nama Produk" autofocus=""
                            autocomplete="off">
                        @error('product_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="image">Gambar</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror"
                            value="{{ old('image') }}" name="image">
                        @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Produk</label>
                        <textarea type="text" name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            value="{{ old('description') }}" placeholder="Masukkan Deskripsi Produk"
                            autocomplete="off"></textarea>
                        @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe</label>
                        <select class="form-control" required="required" name="type">
                            <option value="Masker">Masker</option>
                            <option value="Terjual">Gelang</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Produk</label>
                        <input type="number" name="price" class="form-control @error('price') is-invalid @enderror"
                            value="{{ old('price') }}" placeholder="Masukkan Harga Produk" autocomplete="off">
                        @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stock">Stok</label>
                        <input type="number" name="stock" class="form-control @error('stock') is-invalid @enderror"
                            value="{{ old('stock') }}" placeholder="Masukkan Stok" autocomplete="off">
                        @error('stock')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" required="required" name="status">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Terjual">Terjual</option>
                            <option value="Akan Datang">Akan Datang</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $("#add").modal();
    });
</script>
