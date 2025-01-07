<?php


include("database.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tarım Ürün Takip Sistemi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 1rem;
            text-align: center;
        }
        main {
            padding: 2rem;
        }
        .form-section, .table-section {
            margin-bottom: 2rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
        }
        input, select, button {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 0.8rem;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <h1>Tarım Ürün Takip Sistemi</h1>
    </header>
    <main>
        <section class="form-section">
            <h2>Ürün Ekle</h2>
            <form id="productForm">
                <label for="productName">Ürün Adı:</label>
                <input type="text" id="productName" name="productName" required>
                
                <label for="productCategory">Kategori:</label>
                <select id="productCategory" name="productCategory">
                    <option value="Sebze">Sebze</option>
                    <option value="Meyve">Meyve</option>
                    <option value="Tahıl">Tahıl</option>
                    <option value="Diğer">Diğer</option>
                </select>

                <label for="productQuantity">Miktar (kg):</label>
                <input type="number" id="productQuantity" name="productQuantity" required>
                
                <label for="harvestDate">Hasat Tarihi:</label>
                <input type="date" id="harvestDate" name="harvestDate" required>

                <button type="submit">Ürünü Kaydet</button>
            </form>
        </section>

        <section class="table-section">
            <h2>Ürün Listesi</h2>
            <table id="productTable">
                <thead>
                    <tr>
                        <th>Ürün Adı</th>
                        <th>Kategori</th>
                        <th>Miktar (kg)</th>
                        <th>Hasat Tarihi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ürünler buraya eklenecek -->
                </tbody>
            </table>
        </section>
    </main>
    <script>
        const form = document.getElementById('productForm');
        const productTable = document.getElementById('productTable').querySelector('tbody');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const productName = document.getElementById('productName').value;
            const productCategory = document.getElementById('productCategory').value;
            const productQuantity = document.getElementById('productQuantity').value;
            const harvestDate = document.getElementById('harvestDate').value;

            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${productName}</td>
                <td>${productCategory}</td>
                <td>${productQuantity}</td>
                <td>${harvestDate}</td>
            `;

            productTable.appendChild(newRow);

            form.reset();
        });
    </script>
</body>
</html>
