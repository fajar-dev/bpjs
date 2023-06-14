@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Data JHT</h4>
                                <a href="{{ route('jht_add') }}" class="btn btn-rounded btn-primary" ><span class="btn-icon-left text-primary"><i class="fa fa-plus color-primary"></i>
                                </span>Tambah</a>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-sm text-dark">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Tenaga Kerja</th>
                                                <th>No KPJ</th>
                                                <th>Status Klime</th>
                                                <th>Tanggal Pengajuan</th>
                                                <th>Keterangan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $row)
                                            <?php $no=1 ?>
                                            <tr>
                                                <th>{{ $no++  }}</th>
                                                <td>{{ $row->nama_tenaga_kerja }}</td>
                                                <td>{{ $row->no_kpj }}</td>
                                                <td>{{ $row->status_klime }}</td>
                                                <td>{{ $row->tgl_pengajuan }}</td>
                                                <td>{{ $row->keterangan }}</td>
                                                <td>
                                                    <a href="" data-toggle="modal" data-target="#edit{{ $row->id }}" class="btn btn-warning">Edit</a>
                                                    <a href="/jht_delete/{{ $row->id }}" onclick="confirm('anda yakin ingin menghapus data ini?')" class="btn btn-danger">Hapus</a>
                                                </td>
                                            </tr>

                                            <div class="bootstrap-modal">
                                                <div class="modal fade" id="edit{{ $row->id }}">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Tambah Instansi</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('jht_update') }}" method="POST">
                                                                @csrf
                                                                <input type="hidden" name="id" value="{{ $row->id }}">
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="">Nama Instansi</label>
                                                                        <input type="text" class="form-control input-default" name="nama" placeholder="nama instansi" value="" required>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection