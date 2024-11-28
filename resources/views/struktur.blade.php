@extends('layouts.app')
@section('title', 'Struktur Gereja')
@section('content')
<main class="main">
<div class="container mt-5">
   
        <h2 class="text-center mb-4">Struktur Organisasi</h2>
    <div class="struktur-organisasi">
        <style>
            .struktur-root {
                text-align: center;
                font-size: 24px;
                font-weight: bold;
                margin-bottom: 40px;
                color: #2C3E50;
            }

            .struktur-row {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 40px;
                margin-bottom: 30px;
            }

            .struktur-column {
                width: calc(100% / 3 - 40px);
                margin-bottom: 40px;
                text-align: center;
            }

            .struktur-box {
                background-color: #ffffff;
                border: 1px solid #ddd;
                border-radius: 10px;
                padding: 20px;
                font-size: 16px;
                font-weight: bold;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                margin-bottom: 20px;
            }

            .struktur-kepala, .struktur-subkepala {
                background-color: #f2f2f2;
                padding: 15px;
                border-radius: 8px;
                margin-bottom: 20px;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }

            .struktur-judul {
                font-size: 28px;
                color: #16A085;
                margin-bottom: 10px;
            }

            .struktur-subjudul {
                font-size: 22px;
                color: #2980B9;
            }

            .connector {
                width: 2px;
                background-color: #333;
                margin: 10px auto;
                height: 30px;
            }

            .long-connector {
                height: 180px;
            }

            .horizontal-connector {
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 10px 0;
            }

            .horizontal-connector div {
                width: 40px;
                height: 2px;
                background-color: #333;
            }

            .struktur-bidang {
                background-color: #ecf5f5;
                border-radius: 8px;
                padding: 15px;
                font-size: 14px;
                text-align: left;
                box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            }

            .struktur-komisi li {
                margin-bottom: 8px;
                font-size: 13px;
                color: #2C3E50;
            }

            .anggota-list {
                list-style: none;
                padding-left: 20px;
                margin-top: 5px;
            }

            .anggota-list li {
                font-size: 12px;
                color: #7F8C8D;
            }

            /* Ensuring Sekretaris and Bendahara are displayed horizontally */
            .struktur-subkepala {
                display: flex;
                justify-content: center;
                gap: 40px;
                align-items: center;
            }

            .struktur-subkepala .struktur-box {
                width: auto;
                padding: 10px 15px;
                font-size: 14px;
            }

            /* Adjusting vertical and horizontal lines for proper alignment */
            .vertical-line {
                position: absolute;
                width: 2px;
                background-color: #333;
                height: 30px;
                left: 50%;
                transform: translateX(-50%);
            }

            .horizontal-line {
                position: absolute;
                height: 2px;
                background-color: #333;
                top: 50%;
                left: 0;
                right: 0;
                transform: translateY(-50%);
            }
        </style>

        <!-- Root -->
        <div class="struktur-root">
            <div class="struktur-box">
                <h2 class="struktur-judul">Tuhan Yesus Kristus</h2>
            </div>
            <div class="connector"></div>

            <!-- Majelis -->
            <div class="struktur-subkepala">
                <h3 class="struktur-subjudul">Majelis GKJ Sedayu</h3>
            </div>
        </div>

        <!-- Organisasi Struktur -->
        <div class="connector"></div>
        <div class="struktur-row">
           
        @foreach ($ketua as $k)
    <div class="struktur-column">
        <div class="struktur-box">{{ $k->jabatan }}  - {{ $k->nama }}</div>
        
        @if ($k->jabatan == 'Ketua I')
            <div class="connector"></div>
            <div class="struktur-subkepala">
                <div class="struktur-box">
                    Sekretaris: {{ $k->sekretarisBendahara->sekretaris ?? 'Belum diisi' }}
                </div>
                <div class="struktur-box">
                    Bendahara: {{ $k->sekretarisBendahara->bendahara ?? 'Belum diisi' }}
                </div>
            </div>
            <div class="connector"></div>
        @elseif ($k->jabatan == 'Ketua II' || $k->jabatan == 'Ketua III')
            <div class="connector long-connector"></div>
        @endif

        @foreach ($k->bidang as $b)
            <div class="struktur-box struktur-bidang">
                <h4>{{ $b->nama_bidang }}</h4>
                <ul class="struktur-komisi">
                    @foreach ($b->komisi as $c)
                        <li>{{ $c->nama_komisi }}
                            <ul class="anggota-list">
                                @foreach (explode(',', $c->anggota) as $anggota)
                                    <li>{{ $anggota }}</li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
@endforeach

                
        </div>
    </div>
    </div>
</main>
@endsection
