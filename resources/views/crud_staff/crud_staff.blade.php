@extends('admin')
@section('title','CRUD STAFF')
@section('crud_staff')
    <div class="background">
        <div class="large-table">
            <div class="table-margin">
                <div class="table-wrap">
                    <div class="table-title">
                        <h1> CRUD STAFF </h1>
                        <a>
                            <img src="{{ asset('img/icon/create-button.png') }}" class="action-buttons-crud"/>
                        </a>
                    </div>
                    <div class="table-chri">
                        <table class>
                            <thead>
                            <tr>
                                <th> # </th>
                                <th> Staff Username </th>
                                <th> Nome </th>
                                <th> Cognome </th>
                                <th> Telefono </th>
                                <th> Email </th>
                                <th> Actions </th>
                            </tr>
                            </thead>

                            @foreach ($staff as $utente)
                                <tbody>
                                <tr>
                                    <th> {{ $loop->iteration }} </th>
                                    <td>
                                        <img src="{{ asset($utente->ProPic) }}" alt="Foto Profilo" class="foto-chri-table">
                                        {{ $utente-> Username }}
                                    </td>
                                    <td> {{ $utente-> Nome }} </td>
                                    <td> {{ $utente -> Cognome }} </td>
                                    <td> {{ $utente-> Telefono }} </td>
                                    <td> {{ $utente-> Email }} </td>
                                    <td>
                                        <button class="edit-button">Modifica</button>
                                        <button class="delete-button">Elimina</button>
                                    </td>
                                </tr>
                                </tbody>
                            @endforeach

                        </table>
                    </div>
                    <div class="table-footer">
                        @include('crud_staff.paginator', ['paginator' => $staff])
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
