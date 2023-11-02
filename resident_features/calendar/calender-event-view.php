<?php
session_start();
include_once('../../dashboards/resident/sidenav_resident.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>complaints </title>
        <link rel="stylesheet" href="../../data/public/css/styles.css" />
      </head>
      
      <body style="background-color: #d4def5;">
      <div class="calendar1">
          <br>
          <br>
        <h1 style="margin:20vh 50vw 0vh 35vw"> </h1>
        <table style="margin-left:20vw">
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
                    <td style="background-color: #507d8f">28</td>
                    <td>29</td>
                    <td>30</td>
                </tr>
            </tbody>
        </table>
    </div>
          <div class="container" style="margin-left:60%;margin-top:7vh ">
            <h1><b>Event Details</b></h1>
            <p><b>Date:</b> 28/11/2023</p>
            <p><b>Event Catergory:</b>Payments</p>
            <p><b>Subject:</b>Maintenance Payment</p>
            <p><b>Description:</b>Payments that related to essential services such as landscaping, security, and common area upkeep.</p>
            <button class="action-button edit-button1" onclick="editRow(1)">Edit</button>
            <button class="action-button delete-button1" onclick="deleteRow(1)">Delete</button>
          </div>
      </body>
      </html>