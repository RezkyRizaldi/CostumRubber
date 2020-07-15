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

                            <!-- DATA TABLE-->
                            <div class="table-responsive m-b-40">
                                <table id="dataTable" class="table table-striped table-bordered text-center"
                                    style="width:100%">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Pengguna</th>
                                            <th>Alamat E-mail</th>
                                            <th>Subjek</th>
                                            <th>Pesan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contact as $c)
                                        <tr>
                                            <td>{{ $loop->iteration }}.</td>
                                            <td>{{ $c->username }}</td>
                                            <td>{{ $c->email }}</td>
                                            <td>{{ $c->subject }}</td>
                                            <td>{{ $c->message }}</td>
                                            <td>
                                                <a href="/chat/delete/{{ $c->id }}"
                                                    onclick="return confirm('Anda yakin ingin menghapus data ini?');"
                                                    class="btn btn-danger" title="Hapus Data"><i
                                                        class="far fa-trash-alt"></i></a>
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
