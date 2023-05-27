@extends('admin')
@section('title', 'Modifica Staff')
@section('crud_staff')

    <div class="wrapper-dashboard">
        <div class="container-dati-staff">
            {{ Form::open(['route' => 'modifica_staff', 'required' => 'required'])}}
            <h1>Modifica i dati di {{$utente->Usename}}</h1>
            <form action="" method="post">
                <div class="row-chri">
                    <div class="cell-1of2">
                        <label for="Username"> Username: </label>
                        <input name="Username" type="text" placeholder="Username" required maxlength="10" value="">
                    </div>
                    <div class="cell-1of2">
                        <label for="Password"> Password: </label>
                        <input name="Password" type="password" placeholder="Password" required maxlength="15" value="">
                    </div>
                    <div class="cell-1of2">
                        <label for="Nome"> Nome: </label>
                        <input name="Nome" type="text" placeholder="Nome" required maxlength="15" value="">
                    </div>
                    <div class="cell-1of2">
                        <label for="Cognome"> Cognome: </label>
                        <input name="Cognome" type="text" required maxlength="15" value="">
                    </div>
                    <div class="cell-1of2">
                        <label for="DataNascita"> Data di Nascita: </label>
                        <input name="DataNascita" type="date" required value="">
                    </div>
                    <div class="cell-1of2">
                        <label for="Email"> Email: </label>
                        <input name="Email" type="email" maxlength="30" placeholder="Email" required pattern="^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$" value="">
                    </div>
                    <div class="cell-1of2">
                        <label for="Telefono"> Numero di Telefono: </label>
                        <input name="Telefono" type="tel" placeholder="Numero di Telefono" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="13" value="">
                    </div>
                    <div class="cell-1of2">
                        <label for="Genere"> Genere: </label>
                        <input name="Genere" type="text" placeholder="Genere" required maxlength="10" value="">
                    </div>
                    <div class="cell-1of2">
                        <button class="btn btn-blue btn-large" type="submit"> Modifica </button>
                    </div>
                    <div class="cell-1of2">
                        <button class="btn btn-light btn-large" type="reset"> Annulla </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
