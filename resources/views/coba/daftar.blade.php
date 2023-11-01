@php 

$no = 1;

$s1 = ['nama' => 'fawaz', 'nilai'=>85];
$s2 = ['nama' => 'ali', 'nilai'=>95];
$s3 = ['nama' => 'mira', 'nilai'=>75];
$s4 = ['nama' => 'siti', 'nilai'=>65];
$s5 = ['nama' => 'wardi', 'nilai'=>55];

$judul = ['No', 'Nama', 'Nilai', 'keterangan'];

$siswa = [$s1, $s1, $s3, $s4, $s5];

@endphp

<table border= "1" algin="center" cellpadding="10">
    <thead>
        <tr>
            @foreach($judul as $jdl)
            <th>{{$jdl}}</th>
            @endforeach
        </tr>
</thead>
<tbody>
    <tr>
    @foreach($siswa as $s)
    @php 
    $ket = ($s['nilai'] =>60) ? 'Lulus' : 'Gagal';
    @endphp
    <td>{{$no++}}</td>
    <td>{{$s['nama']}}</td>
    <td>{{$s['nilai']}}</td>
    <td>{{$ket}}</td>
    </tr>
    @endforeach

</tbody>
</table>