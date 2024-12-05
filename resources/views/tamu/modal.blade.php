<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan pengajuan</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action='{{route("pengajuan")}}' method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama penanggung jawab</label>
            <input type="text" class="form-control" name='nama' id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Asal instansi</label>
            <input type="text" class="form-control" name='asal' id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tanggal berkunjung</label>
            <input type="date" class="form-control" name='tanggal'id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tujuan/bagian yang di kunjungi</label>
            <select class="form-select" name='tujuan' aria-label="Default select example">
                <option selected>pilih</option>
                <option value="pimpinan">pimpinan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Jumlah Kunjungan</label>
            <input type="number" class="form-control" name='jumlah'id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Materi kunjungan</label>
            <textarea class="form-control" name='materi'id="exampleInputEmail1" aria-describedby="emailHelp"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Surat Permohonan Kunjungan</label>
            <input type="file" class="form-control" name='permohonan'id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Surat Tugas Kunjungan  (satu file beserta pendamping)</label>
            <input type="file" class="form-control" name='pendamping' id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nomor Telepon</label>
            <input type="Number" class="form-control" name='no_tlp' id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
  </div>
    </form>
  </div>
</div>