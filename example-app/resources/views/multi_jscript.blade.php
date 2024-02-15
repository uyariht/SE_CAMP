<!DOCTYPE html>
<html>
<head>
    <title>Javascript 101</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }
        #input_container {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-top: -100px;
        }
        #my_number, button {
            padding: 12px 20px;
            font-size: 18px;
            border-radius: 20px;
            border: none;
            outline: none;
            cursor: pointer;
        }
        #my_number {
            margin-right: 10px;
            background-color: #dcdcdc;
        }
        button {
            background-color: #4caf50;
            color: white;
        }
        #multiplication_table {
            margin-left: 200px;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #dcdcdc;
        }
        th {
            background-color: #dcdcdc;
            color: #333;
        }
        #multiplication_table.hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div id="input_container">
        <input type="text" id="my_number" placeholder="Enter a number">
        <button onclick="generateMultiplicationTable()">Submit</button>
    </div>

    <table id="multiplication_table" class="hidden">
        <thead>
            <tr>
                <th>Result Multiply</th>
            </tr>
        </thead>
        <tbody id="multiplication_tbody"></tbody>
    </table>

    <script>
        function generateMultiplicationTable() {
            var inputNumber = parseInt(document.getElementById('my_number').value);
            var tbody = document.getElementById('multiplication_tbody');
            var table = document.getElementById('multiplication_table');
            for (var i = 1; i <= 24; i++) {
                var result = inputNumber * i;
                var row = `<tr>
                               <td>${inputNumber} x ${i} = ${result}</td>
                           </tr>`;
                tbody.innerHTML += row;
            }
            table.classList.remove('hidden');
        }
    </script>
</body>
</html>
