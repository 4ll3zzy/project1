<table class="table table-flush dataTable" id="datatable-basic" role="grid"
aria-describedby="datatable-basic_info">
<thead class="thead-light">
    <tr role="row">
        <th class="sorting_asc" tabindex="0" aria-controls="datatable-basic"
            rowspan="1" colspan="1" aria-sort="ascending"
            aria-label="Name: activate to sort column descending"
            style="width: 177px;">Nama Petugas</th>
        <th class="sorting" tabindex="0" aria-controls="datatable-basic"
            rowspan="1" colspan="1"
            aria-label="Position: activate to sort column ascending"
            style="width: 274px;">Nama Siswa</th>
        <th class="sorting" tabindex="0" aria-controls="datatable-basic"
            rowspan="1" colspan="1"
            aria-label="Office: activate to sort column ascending"
            style="width: 139px;">Biaya Spp</th>
        <th class="sorting" tabindex="0" aria-controls="datatable-basic"
            rowspan="1" colspan="1"
            aria-label="Age: activate to sort column ascending"
            style="width: 63px;">Bulan Dibayar</th>
        <th class="sorting" tabindex="0" aria-controls="datatable-basic"
            rowspan="1" colspan="1"
            aria-label="Start date: activate to sort column ascending"
            style="width: 136px;">Dibayar</th>
        <th class="sorting" tabindex="0" aria-controls="datatable-basic"
            rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending"
            style="width: 114px;">Tunggakan</th>
        <th class="sorting" tabindex="0" aria-controls="datatable-basic"
            rowspan="1" colspan="1"
            aria-label="Salary: activate to sort column ascending"
            style="width: 114px;">Tanggal Dibayar</th>
    </tr>
</thead>
<tfoot>
  @foreach ($pembayaran as $pembayaran)
    <tr>
        <th rowspan="1" colspan="1">{{$pembayaran->user->name}}</th>
        <th rowspan="1" colspan="1">{{$pembayaran->siswa->nama}}</th>
        <th rowspan="1" colspan="1">{{$pembayaran->siswa->spp->tahun}} - {{$hspp = $pembayaran->siswa->spp->nominal}}</th>
        <th rowspan="1" colspan="1">{{$pembayaran->bulan}}</th>
        <th rowspan="1" colspan="1">{{$bspp = $pembayaran->bayar}}</th>
        <th rowspan="1" colspan="1">{{$hspp = $bspp}}</th>
        <th rowspan="1" colspan="1">{{$pembayaran->created_at->format('d M,Y')}}</th>
    </tr>
    @endforeach
</tfoot>
</table>