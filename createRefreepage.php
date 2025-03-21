<!DOCTYPE html>
<html>
<head>
    <title>Referee Performance Report</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f0f0f0;
        }

        .container {
            width: 80%;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .match-details, .assessment-criteria {
            margin-bottom: 20px;
        }

        .match-details h3, .assessment-criteria h3 {
            text-align: center;
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .match-details p {
            margin: 5px 0;
        }

        .assessment-criteria table {
            width: 100%;
            border-collapse: collapse;
        }

        .assessment-criteria th, .assessment-criteria td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .assessment-criteria th {
            background-color: #f2f2f2;
        }

        .assessment-criteria .yellow {
            background-color: yellow;
            padding: 5px;
            border-radius: 3px;
        }

        .assessment-criteria .red {
            background-color: red;
            color: white;
            padding: 5px;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Referee Performance Report</h2>

    <div class="match-details">
        <h3>Match Details</h3>
        <p><strong>Date:</strong> <input type="date"></p>
        <p><strong>Teams:</strong> England VS Spain</p>
        <p><strong>Referee Name:</strong> <input type="text"></p>
    </div>

    <div class="assessment-criteria">
        <h3>Referee Assessment Criteria</h3>
        <table>
            <tr>
                <th>Decision Making</th>
                <th>Penalty Decisions</th>
                <th>Fouls and Free Kicks</th>
                <th>Offside Calls</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <select>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Game Management and Control</th>
                <th>Discipline</th>
                <th>Advantage Rule</th>
                <th>Managing Player</th>
            </tr>
            <tr>
                <td></td>
                <td>
                    <select>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Disciplinary Actions</th>
                <th>Correct Issuance of Yellow Cards <span class="yellow"></span></th>
                <th>Correct Issuance of Red Cards <span class="red"></span></th>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <select>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
               </select>
                </td>
                <td>
                    <select>
                        <option value="good">Good</option>
                        <option value="average">Average</option>
                        <option value="poor">Poor</option>
                    </select>
                </td>
                <td></td>
            </tr>
        </table>
    </div>
</div>

</body>
</html>