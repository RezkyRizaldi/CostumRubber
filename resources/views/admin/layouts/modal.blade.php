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
                        <input type="text" name="product_name" class="form-control" placeholder="Masukkan Nama Produk"
                            autofocus="" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" name="image">
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

<script>
    $(document).ready(function() {
        $("#add").modal();
    });
</script>
