@php 
$nama = "wardi";
$nilai = 59.99;
@endphp

@if ($nilai >= 60) @php @ket = "Lulus"; @endphp 
@else @php $ket = "Gagal"; @endphp
@endif

Siswa{{$nama}} dengan Nilai {{$nilai}} dinyatakan {{$ket}}
