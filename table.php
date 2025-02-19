<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Form</title>
</head>
<body>
    <h1>Student Record</h1>
    <table id="Student_Record" border="1">

    </table>

    <script>
        const StudentRecord = document.getElementById("Student_Record");

        console.log("Hello World");

        const row1 = StudentRecord.insertRow();

        const row1col1 = row1.insertCell();
        row1col1.innerHTML = "Last Name";

        const row1col2 = row1.insertCell();
        row1col2.innerHTML = "First Name";

        const row2 = StudentRecord.insertRow();
        const row2col1 = row2.insertCell();
        const row2col2 = row2.insertCell();

        const inputLastName = document.createElement("INPUT");
        inputLastName.type = "text";
        inputLastName.placeholder = "Enter Last Name";

        row2col1.append (inputLastName);

        const inputFirstName = document.createElement("INPUT");
        inputFirstName.type = "text";
        inputFirstName.placeholder = "Enter Last Name";

        row2col2.append (inputFirstName);

        const row3 = StudentRecord.insertRow();
        const row3col1 = row3.insertCell();
        const row3col2 = row3.insertCell();

        console.log(StudentRecord);
    </script>
</body>
</html>