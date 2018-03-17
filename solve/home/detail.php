<?php
/**
 * Created by IntelliJ IDEA.
 * User: gaura
 * Date: 17-Mar-18
 * Time: 7:17 PM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .dropbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #ddd}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>

<form action="/action_page.php">
    First name:<br>
    <input type="text" name="firstname">
    <br>
    Last name:<br>
    <input type="text" name="lastname">
    <br>
    Contact number:<br>
    <input type="number" name="contact">
    <br>
    Department:<br>
    <input type="radio" name="dept" value="IT"> IT<br>
    <input type="radio" name="dept" value="Comps"> Comps<br>
    <input type="radio" name="dept" value="Mech"> Mech<br>
    <input type="radio" name="dept" value="Mech"> Civil<br>
    <input type="radio" name="dept" value="Mech"> Mech<br>
    <br>
    Teaching for:<br>
    <input type="checkbox" name="year" value="1"> First Year<br>
    <input type="checkbox" name="year" value="2"> Second Year<br>
    <input type="checkbox" name="year" value="3"> Third Year<br>
    <input type="checkbox" name="year" value="4"> Fourth Year<br>
    <br>
    <br>

    <form method="post" action="">
        <table border="1">
            <caption>Work Load</caption>
            <tr>
                <th>Period</th>
                <th>1</th>
                <th>2</th>
                <th>3</th>
                <th>4</th>
                <th>5</th>
                <th>6</th>
                <th>7</th>
            </tr>
            <tr>
                <th>Day\Time</th>
                <th>from<input type="time" name="time"><br>to<input type="time" name="time"></th>
                <th>from<input type="time" name="time"><br>to<input type="time" name="time"></th>
                <th>from<input type="time" name="time"><br>to<input type="time" name="time"></th>
                <th>from<input type="time" name="time"><br>to<input type="time" name="time"></th>
                <th>from<input type="time" name="time"><br>to<input type="time" name="time"></th>
                <th>from<input type="time" name="time"><br>to<input type="time" name="time"></th>
                <th>from<input type="time" name="time"><br>to<input type="time" name="time"></th>
            </tr>
            <tr>
                <th>Monday</th>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Tuesday</th>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Wednesday</th>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Thursday</th>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>Friday</th>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
                <td>
                    <select>
                        <option value="0">Free</option>
                        <option value="1">Lectures</option>
                        <option value="2">Pracs</option>
                        <option value="3">Exams</option>
                        <option value="4">Assesment</option>
                        <option value="5">Break</option>
                    </select>
                </td>
            </tr>

        </table>
    <input type="submit" value="Submit">
</form>
    
</body>
</html>
