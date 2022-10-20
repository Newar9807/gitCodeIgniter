<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    // echo '<pre>';
    // print_r($serverResponse);
    // echo '</pre>';

    // {
    //     "CId": 1,
    //     "ControlCode": "sample string 2",
    //     "ControlName": "sample string 3",
    //     "ControlDescription": "sample string 4",
    //     "UserId": 5,
    //     "EntryDate": "2022-10-20T11:55:45.9757296+05:45",
    //     "IsActive": true
    //   }
    ?>
    <form action="api/data/InsertUpdateControlDetails/true" method="POST">
        <label for="">CId</label>
        <input type="number" name="CId" value="1"> <br />
        <label for="">ControlCode</label>
        <input type="text" name="ControlCode" value="sample string 2"><br />
        <label for="">ControlName</label>
        <input type="text" name="ControlName" value="sample string 3"><br />
        <label for="">ControlDescription</label>
        <input type="text" name="ControlDescription" value="sample string 4"><br />
        <label for="">UserId</label>
        <input type="number" name="UserId" value="5"><br />
        <label for="">EntryDate</label>
        <input type="text" name="EntryDate" value="2022-10-20T11:55:45.9757296+05:45"><br />
        <label for="">IsActive</label>
        <input type="text" name="IsActive" value="true" maxlength="1"><br />
        <button type="submit">test</button>
   </form>