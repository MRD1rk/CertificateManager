@extends('layout')

@section('content')
    <div class="row">
        @if($certificate->isConfirmed)
            <div class="col-8">
                @include('certificates/pdf-template', ['certificate' => $certificate])
            </div>
            <div class="col-4">
                <a class="btn btn-primary" href="{{ route('certificates.download', ['id' => $certificate->certificate_id]) }}">Download</a>
            </div>
        @else
            <div class="col-12 text-center">
                <div class="card">
                    <div class="card-header">
                        <h2>Scan Qr code for confirm your certificate</h2>
                    </div>
                    <div class="card-body">
                        {!! QrCode::size(300)->backgroundColor(255,90,0)->generate(route('certificates.confirm', ['id' => $certificate->certificate_id])) !!}
                    </div>
                </div>
            </div>
        @endif
    </div>
@stop
