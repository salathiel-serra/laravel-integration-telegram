@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="bg-body-tertiary p-5 rounded">
        <div class="col-sm-8 py-5 mx-auto">
            <p class="fs-5"> Formulário </p> <hr>

            <form action="{{ route('send-notification') }}" method="POST" autocomplete="off">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputName" class="form-label"> Nome: </label>
                        <input type="text" name="name" class="form-control" id="inputName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label"> E-mail: </label>
                        <input type="email" name="email" class="form-control" id="inputEmail" required>
                    </div>
                </div>
    
                <div class="row mt-2">
                    <div class="col-md-12">
                        <label for="textAreaMessage" class="form-label"> Mensagem: </label>
                        <textarea name="message" class="form-control" id="textAreaMessage" rows="3" required></textarea>
                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success w-100"> Enviar </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection