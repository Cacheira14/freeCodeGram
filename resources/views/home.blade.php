@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 pt-5">
                <img src="https://i.redd.it/ibi06ok4clf71.jpg" class="rounded-circle" height="300px">
            </div>
            <div class="col-9 pt-5 ps-5">
                <div>
                    <h1>Conta Teste</h1>
                </div>
                <div class="d-flex">
                    <div class="pe-5"><strong>8</strong> posts</div>
                    <div class="pe-5"><strong>243</strong> followers</div>
                    <div class="pe-5"><strong>227</strong> following</div>
                </div>
                <div class="pt-4 fw-bold">contaTeste.net</div>
                <div>Isto é um projeto demonstrativo e esta é uma conta de testes.</div>
                <div><a href="#">www.contateste.net</a></div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="https://i.redd.it/ibi06ok4clf71.jpg" class="w-100 pt-5">
            </div>
            <div class="col-4">
                <img src="https://i.redd.it/ibi06ok4clf71.jpg" class="w-100 pt-5">
            </div>
            <div class="col-4">
                <img src="https://i.redd.it/ibi06ok4clf71.jpg" class="w-100 pt-5">
            </div>
        </div>
    </div>
@endsection
