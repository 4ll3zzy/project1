<table class="table align-items-center table-flush">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="sort" data-sort="name">No</th>
            <th scope="col" class="sort" data-sort="budget">Nama Kelas</th>
            <th scope="col">Kompetensi Keahlian</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="list">
        @php
        $i=1;
        @endphp
        @foreach ($data_kelas as $kelas)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$kelas->nama}}</td>
            <td>{{$kelas->kompetensikeahlian}}</td>
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