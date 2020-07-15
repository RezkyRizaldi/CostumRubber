<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">

                {{-- Tambah Data --}}
                <div class="container">
                    <div class="row mt-4">
                        <div class="col-lg">
                            <div class="d-flex justify-content-start">
                                <a class="btn btn-success" href="#add" data-toggle="modal" data-target="#add">
                                    <i class="fad fa-plus-circle mr-2"></i>Tambah Data
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- DATA TABLE -->
                <div class="container">
                    <div class="row m-t-30">
                        <div class="col-md-12">

                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <table id="dataTable" class="table table-striped table-bordered text-center"
                                    style="width:100%">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Produk</th>
                                            <th>Gambar</th>
                                            <th>Deskripsi</th>
                                            <th>Tipe</th>
                                            <th>Harga</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="test">
                                        @foreach ($products as $p)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $p->product_name }}</td>
                                            <td><img src="{{ URL::to('/') }}/admin/image/{{ $p->image }}"
                                                    alt="{{ $p->image }}" style="width: 160px; height: 80px;">
                                            </td>
                                            <td>{{ $p->description }}</td>
                                            <td>{{ $p->type }}</td>
                                            <td>{{ $p->price }}</td>
                                            <td>
                                                <a href="{{ url('/admin/product/edit-product/'.$p->id) }}"
                                                    class="btn btn-primary" title="Ubah Data"><i
                                                        class="far fa-edit "></i></a> |
                                                <form action="{{ $p->id }}" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button type="submit" name="submit"
                                                        onclick="return confirm('Anda yakin ingin menghapus data ini?');"
                                                        class="btn btn-danger" title="Hapus Data"><i
                                                            class="far fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- END DATA TABLE-->

                        </div>
                    </div>
                </div>
                <!-- END DATA TABLE -->

                <!-- Dashboard Analytics end -->

        </div>
    </div>
</div>
<!-- END: Content-->
