<style>
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
<div class="table-responsive">
  <table class="table table-responsive-sm text-dark">
      <thead>
          <tr>
              <th>NO</th>
              <th>Tenaga Kerja</th>
              <th>No KPJ</th>
              <th>Status Klime</th>
              <th>Tanggal Pengajuan</th>
              <th>Keterangan</th>
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
          </tr>

          @endforeach
      </tbody>
  </table>
</div>