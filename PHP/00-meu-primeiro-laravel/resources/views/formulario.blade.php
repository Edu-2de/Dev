<!DOCTYPE html>
<html>
<head><title>Novo Orçamento</title></head>
<body>
    <form action="/calcular" method="POST">
        @csrf

        <label>Valor Hora:</label>
        <input type="number" name="valor_hora">
        <br>
        <label>Total Horas:</label>
        <input type="number" name="total_horas">
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
