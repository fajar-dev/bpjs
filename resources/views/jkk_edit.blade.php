@extends('layout.app')

@section('content')
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header d-flex justify-content-beetwen">
                                <h4 class="card-title">Edit data JKK</h4>
                            </div>  

                            <div class="card-body">
                              <div class="basic-form">
                                <form method="POST" action="{{ route('jkk_update') }}" enctype="multipart/form-data">
                                  <input type="hidden" value="{{ $data->id }}" name="id">
                                    @csrf
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Nama Tenaga Kerja</label>
                                      <div class="col-sm-10">
                                          <input type="text" name="nama_tenaga_kerja" value="{{ $data->nama_tenaga_kerja }}" class="form-control"  required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Nomor KPJ</label>
                                      <div class="col-sm-10">
                                          <input type="number" class="form-control" name="no_kpj" value="{{ $data->no_kpj }}" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Perusahaan</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="perusahaan" value="{{ $data->perusahaan }}"  required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tanggal Terima Berkas</label>
                                      <div class="col-sm-10">
                                          <input type="date" class="form-control" name="tgl_terima_berkas" value="{{ $data->tgl_terima_berkas }}"  required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Rumah Sakit</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="rs" value="{{ $data->rs }}"  required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Tagihan</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="tagihan" value="{{ $data->tagihan }}" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">STMB</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="stmb" value="{{ $data->stmb }}" required>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Kekurangan Berkas</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="kekurangan_berkas" required value="{{ $data->kekurangan_berkas }}">
                                          <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                        </div>
                                    </div>
                                  </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
@endsection