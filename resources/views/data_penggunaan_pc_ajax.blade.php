
    @foreach ($data['thisday'] as $item)
    <div class="card mb-3 col-sm-6">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" width="200px" alt="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Komputer Nomor {{$item->PC}}</h5>
                    <p class="card-text">User : {{$item->Siswa}}.</p>
                    <p class="card-text">Kelas : {{$item->Kelas}}.</p>
                    <p class="card-text">Absen : {{$item->Absen}}.</p>
                    <p class="card-text"><small class="text-muted">{{$item->Alasan}}</small></p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
