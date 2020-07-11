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
                    <div class="row mt-2">
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
                                    <tbody>
                                        @foreach ($products as $p)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $p->product_name }}</td>
                                            <td><img src="/assets/img/produk.jpg" alt="" srcset=""
                                                    style="width: 50px; height: 50px"></td>
                                            <td>{{ $p->description }}</td>
                                            <td>{{ $p->type }}</td>
                                            <td>{{ $p->price }}</td>
                                            <td>
                                                <a href="#edit" class="edit" data-toggle="modal" data-id="{{ $p->id }}"
                                                    data-target="#edit" class="btn btn-primary" title="Ubah Data"><i
                                                        class="far fa-edit "></i>
                                                </a> |
                                                <a href="/product/delete/{{ $p->id }}"
                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?');"
                                                    class="btn btn-danger" title="Hapus Data"><i
                                                        class="far fa-trash-alt"></i>
                                                </a>
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
