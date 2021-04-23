<table class="table align-items-center table-flush">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="sort" data-sort="name">No</th>
            <th scope="col" class="sort" data-sort="budget">Nisn</th>
            <th scope="col" class="sort" data-sort="status">Nis</th>
            <th scope="col">Nama</th>
            <th scope="col" class="sort" data-sort="completion">Kelas</th>
            <th scope="col" class="sort" data-sort="completion">Alamat</th>
            <th scope="col" class="sort" data-sort="completion">No Telepon</th>
            <th scope="col" class="sort" data-sort="completion">Email</th>
            <th scope="col" class="sort" data-sort="completion">Spp</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="list">
        @php
        $i=1;
        @endphp
        @foreach ($data_siswa as $siswa)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$siswa->nisn}}</td>
            <td>{{$siswa->nis}}</td>
            <td>{{$siswa->nama}}</td>
            <td>{{$siswa->kelas->nama}}</td>
            <td>{{$siswa->alamat}}</td>
            <td>{{$siswa->tlpn}}</td>
            <td>{{$siswa->user->email}}</td>
            <td>{{$siswa->spp->tahun}}</td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                </div>
            </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
    </tbody>
</table>