<?php
session_start();
include_once('../../dashboards/resident/sidenav_resident.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar-view</title>
    <link rel="stylesheet" href="../../data/public/css/styles.css">
    <script src="index.js"></script>

</head>

<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calendar</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Calendar</title>
</head>

<body>
    <div class="calendar1">
        <h1 style="margin:30vh 35vw 0vh 40vw"> Calendar</h1>
        <table>
            <thead>
                <tr>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                    <th>Sun</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                </tr>
            </tbody>
        </table>
    </div>
    <button class="action-button view-button"style="margin-top:80vh;margin-bottom:17vh;margin-left:-15vw" onclick="viewRow(1)">View</button>
                <button class="action-button edit-button" style="margin-top:80vh;margin-bottom:17vh" onclick="editRow(1)">Edit</button>
                <button class="action-button delete-button"style="margin-top:80vh;margin-bottom:17vh" onclick="deleteRow(1)">Delete</button>
</body>
</html>



