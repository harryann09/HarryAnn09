<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
    <style>
        body {
        background-color: beige ;
        }
        h1 {
            text-align: center;
        }
        form {
            text-align: center;
        }
        div {
            text-align: center;
        }

        #averageResult{text-align:center;}
        .result {
            text-align: center;
        }
    </style>
    <script src="script.js"></script>
</head>
<body>
    <h1>Student Form</h1>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>

        <label for="section">Section:</label>
        <input type="text" id="section" name="section"><br><br>

        <label for="year-level">Year Level:</label>
        <input type="text" id="year-level" name="year-level"><br><br>

        <label for="CIT1">CIT1:</label>
        <input type="number" id="CIT1" name="CIT1"><br><br>

        <label for="CIT17">CIT2:</label>
        <input type="number" id="CIT2" name="CIT2"><br><br>

        <label for="CIT14">CIT5:</label>
        <input type="number" id="CIT5" name="CIT5"><br><br>

        <label for="CC13">CC13:</label>
        <input type="number" id="CIT14" name="CIT14"><br><br>

        <label for="SOCSCI">SOCSCI:</label>
        <input type="number" id="SOCSCI" name="SOCSCI"><br><br>

        <button type="button" onclick="calculate()">Calculate Average</button>
    </form>

    <div id="output"></div>
</body>
</html>
