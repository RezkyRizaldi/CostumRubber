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
                <form action="{{ route('add_product') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="product">Nama Produk</label>
                        <input type="text" name="product" class="form-control" placeholder="Masukkan Nama Produk"
                            autofocus="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" name="gambar">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Produk</label>
                        <textarea type="text" name="description" class="form-control"
                            placeholder="Masukkan Deskripsi Produk" autofocus="" autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe</label>
                        <select class="form-control" required="required" name="type">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Produk</label>
                        <input type="number" name="price" class="form-control" placeholder="Masukkan Harga Produk"
                            autofocus="" autocomplete="off">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Ubah -->
<div class="modal fade" role="dialog" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning o-hidden h-100 text-light">
                <div class="tambah-modal-icon">
                    <i class="fad fa-fw fa-burger-soda"></i>
                </div>
                <h3 class="modal-title">Ubah Data Produk</h3>
                <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="formEdit">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="product">Nama Produk</label>
                        <input type="text" name="product" id="product" class="form-control"
                            placeholder="Masukkan Nama Produk" autofocus="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                    <div class="form-group">
                        <label for="description">Deskripsi Produk</label>
                        <textarea type="text" name="description" class="form-control"
                            placeholder="Masukkan Deskripsi Produk" autofocus="" id="description"
                            autocomplete="off"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="type">Tipe</label>
                        <select class="form-control" required="required" id="type" name="type">
                            @foreach ($products as $p)
                            <option value="{{ $p->id }}" name="category" {{$p->id ? 'selected' : ''}}>{{ $p->type }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="price">Harga Produk</label>
                        <input type="number" name="price" class="form-control" id="price"
                            placeholder="Masukkan Harga Produk" autofocus="" autocomplete="off">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal -->

{{-- Script --}}
<script>
    $(document).ready(function() {
                $("#add").modal();
            });
</script>
{{-- <script>
    $(document).ready(function() {
                $("#edit").modal();
            });
</script> --}}
