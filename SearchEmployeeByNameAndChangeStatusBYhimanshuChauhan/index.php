<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Search employees</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h3 style="text-align:center;">Search employees by their name and change their status</h3>
      <div id="search-bar">
        <label>Search :</label>
        <input type="text" id="search" onkeyup="load_search()" autocomplete="off">
      </div>
    </div>
    
    <div id="table-data">
      <h3>All Records</h3>
    
      <table border="1" width="100%" cellspacing="0" cellpadding="10px">
        <thead>
          <tr>
          <th>Id</th>
            <th>Employee Name</th>
           
            <th width="90px">Status</th>
           
          </tr>
        </thead>
        <tbody id="tbody"></tbody>
      </table>
    </div>

    <div id="error-message"></div>
    <div id="success-message"></div>
  </div>


  <!-- modal for show add new -->
  <div id="addModal">
    <div id="modal-form" >
      <h2>Add New Form</h2> 
      <div id="close-btn" onclick="hide_modal()">X</div>
    </div>
  </div>

  <!-- modal for show edit -->
  <div id="modal">
    <div id="modal-form">
      <h2>Important!!!</h2>
      <form method="POST">
        <table cellpadding="10px" width="100%" id="edit-form">
          <tr>
            <td >Are you sure to change Status  <span  id='Namestatus'></span></td>
            <td>
                <input type='text' id='edit-id' hidden>
            </td>
          </tr>
         
          <tr>
            <td>
             
                <input type='text' id='edit-status' hidden>
            </td>
          </tr>
          <tr>
          <td><button type="button" class="delete-btn" onclick='modify_data()' id='edit-submit'>Change Status</button></td>
          </tr>
        </table>
      </form>
      <div id="close-btn" onclick="hide_modal()">X</div>
    </div>
  </div>

  
<script type="text/javascript" src="js/fetch.js"></script>
</body>
</html>
