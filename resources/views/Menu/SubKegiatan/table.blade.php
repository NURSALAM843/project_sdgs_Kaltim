<table class="table table-bordered" id="example" width="100%" cellspacing="0">
  <thead>
      <tr align="center">
          <th>No</th>
          <th>Kode Program</th>
          <th>Kode Kegiatan</th>
          <th>Kode & Nama Sub-Kegiatan</th>
          <th>Nama Indikator Sub Kegiatan</th>
          <th>Satuan</th>
      </tr>
  </thead>
  <tbody>
      @foreach ($subkegiatans as $sub)

              <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $sub->program }}</td>
                  <td>{{ $sub->kegiatan }}</td>
                  <td>{{ $sub->kode_sub_kegiatan }}. {{ $sub->name_sub_kegiatan }}</td>
                  <td>{{ $sub->indikator_sub}}</td>
                  <td>{{ $sub->satuan }}</td>
              </tr>
             
        
      @endforeach
  </tbody>
</table>