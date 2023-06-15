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
              <th>Perusahaan</th>
              <th>Tanggal Terima Berkas</th>
              <th>Rumah Sakit</th>
              <th>Jumlah Tagihan</th>
              <th>STMB</th>
              <th>Kekurangan Berkas</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($data as $row)
          <?php $no=1 ?>
          <tr>
              <th>{{ $no++  }}</th>
              <td>{{ $row->nama_tenaga_kerja }}</td>
              <td>{{ $row->no_kpj }}</td>
              <td>{{ $row->perusahaan }}</td>
              <td>{{ $row->tgl_terima_berkas }}</td>
              <td>{{ $row->rs }}</td>
              <td>{{ $row->tagihan }}</td>
              <td>{{ $row->stmb }}</td>
              <td>{{ $row->kekurangan_berkas }}</td>
          </tr>

          @endforeach
      </tbody>
  </table>
</div>