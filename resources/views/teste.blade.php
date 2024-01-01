@extends('layouts.main')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Formulário de Inscrição</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 600px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: grid;
    gap: 10px;
}

label {
    font-weight: bold;
}

input,
textarea {
    width: 100%;
    padding: 8px;
    box-sizing: border-box;
    margin-top: 4px;
    margin-bottom: 12px;
}

button {
    background-color: #4caf50;
    color: #fff;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

button:hover {
    background-color: #45a049;
}
</style>
</head>
<body>

    <div class="container">
        <form id="registration-form">
            <label for="first-name">Primeiro Nome:</label>
            <input type="text" id="first-name" name="first-name" required>

            <label for="last-name">Último Nome:</label>
            <input type="text" id="last-name" name="last-name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>

            <label for="contact">Contato:</label>
            <input type="text" id="contact" name="contact" required>

            <label for="address">Endereço:</label>
            <textarea id="address" name="address" required></textarea>

            <button type="submit">Inscrever-se</button>
        </form>
    </div>

</body>
</html>












@endsection
