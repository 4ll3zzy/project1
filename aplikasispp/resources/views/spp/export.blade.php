<table class="table align-items-center table-flush">
    <thead class="thead-light">
        <tr>
            <th scope="col" class="sort" data-sort="name">No</th>
            <th scope="col" class="sort" data-sort="budget">Tahun</th>
            <th scope="col">Nominal</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody class="list">
        @php
        $i=1;
        @endphp
        @foreach ($data_spp as $spp)
        <tr>
            <th scope="row">{{$i}}</th>
            <td>{{$spp->tahun}}</td>
            <td>{{$spp->nominal}}</td>
            <td class="text-right">
                <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" x-placement="bottom-end" style="position: absolute; transform: translate3d(-160px, 31px, 0px); top: 0px; left: 0px; will-change: transform;">
                    </div>
                </div>
            </td>
        </tr>
        @php
        $i++;
        @endphp
        @endforeach
    </tbody>
</table>