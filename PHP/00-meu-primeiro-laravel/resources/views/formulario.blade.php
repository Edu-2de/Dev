<!DOCTYPE html>
<html>
<head>
    <title>Novo Orçamento</title>
    <script src="https://cdn.tailwindcss.com"></script></head>
<body>
    @if ($errors->any())
        <div class="bg-red-500 text-white p-2.5 mb-2.5">
            <strong>Ops! Corrija os erros abaixo:</strong>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/calcular" method="POST">
        @csrf
        <label>Nome do Cliente:</label>
        <input class="border-2" type="text" name="cliente" required>
        <label>Valor Hora:</label>
        <input class="border-2" type="number" name="valor_hora">
        <br>
        <label>Total Horas:</label>
        <input class="border-2" type="number" name="total_horas">
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
