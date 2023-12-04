<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simple</title>
</head>
<body>
    <form action="operar2.php" method="post">
        Ingrese primer valor:
        <input type="text" name="valor1" placeholder="0">
       
        Ingrese segundo valor:
        <input type="text" name="valor2" placeholder="0">
        
        <select name="operacion">
            <option value="suma">Sumar</option>
            <option value="resta">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        
        <input type="submit" name="Calcular">
    </form>
</body>
</html>