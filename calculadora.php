Apartado 1)
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP Simple</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .calculator { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); text-align: center; }
        input[type="number"], select { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        input[type="submit"] { background-color: #007bff; color: white; border: none; padding: 10px; width: 100%; border-radius: 4px; cursor: pointer; font-size: 16px; }
        input[type="submit"]:hover { background-color: #0056b3; }
        .result { margin-top: 15px; font-size: 18px; font-weight: bold; color: #333; }
    </style>
</head>
<body>


Apartado 2)
<div class="calculator">
    <h2>Calculadora PHP</h2>
    <form method="POST" action="">
        <!-- Primer número -->
        <input type="number" name="num1" step="any" placeholder="Primer número" required>
        
        <!-- Selector de operaciones -->
        <select name="operacion" required>
            <option value="suma">Sumar (+)</option>
            <option value="resta">Restar (-)</option>
            <option value="multiplicacion">Multiplicar (*)</option>
            <option value="division">Dividir (/)</option>
        </select>
        
        <!-- Segundo número -->
        <input type="number" name="num2" step="any" placeholder="Segundo número" required>
        
        <!-- Botón de envío -->
        <input type="submit" name="calcular" value="Calcular">
    </form>

Apartado 3)
<div class="result">
        <?php
        if (isset($_POST['calcular'])) {
            // Captura de datos de los inputs mediante el atributo 'name'
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operacion = $_POST['operacion'];
            $resultado = 0;


            // Validación de seguridad para confirmar que son números válidos
            if (is_numeric($num1) && is_numeric($num2)) {
