@extends('layouts.main')

@section('content')

<style>
        /* Adicione seus estilos aqui */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: blue;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
</style>

    <form action="/auctionlist" method="post">
        @csrf

        <label for="fname"> First Name </label> <br>
        <input type="text" name="fname" required> <br> 

        <label for="lname"> Last Name </label> <br>
        <input type="text" name="lname" required> <br> 

        <label for="email"> Email </label> <br>
        <input type="text" name="email" required> <br> 
        
        <label for="codname"> Código da Obra </label> <br>
        <input type="text" name="codname" required> <br>

        <label for="value"> Value </label> <br>
        <input type="text" name="value" required> <br>

        <input type="submit"> <br>

    </form>


@endsection
