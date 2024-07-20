<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/Tasks.css') }}">
  <link rel="icon" type="image/png" href="img/favicon.png"> <!--LOGO FAVICON-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>EMPLOYEE TASK</title>
</head>
<body>
  <!--sidebar-->
  <div class="container">
    <div class="navigation">
      <ul>
        <li>
          <a href="#">
            <span class="logo"><img src="img/logo.png" alt="Logo"></span>
            <span class="title">ROC.PH</span>
          </a>
        </li>
        <li>
          <a href="{{ route('show.form') }}">
            <span class="icon"><ion-icon name="person-circle-sharp"></ion-icon></span>
            <span class="title">Profile</span>
          </a>
        </li>
        <li>
          <a href="{{ route('Emp_DTR') }}">
            <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
            <span class="title">Attendance</span>
          </a>
        </li>
        <li class="active">
          <a href="{{ route('Emp_Tasks') }}">
            <span class="icon"><ion-icon name="ticket-sharp"></ion-icon></span>
            <span class="title">Tasks</span>
          </a>
        </li>
        <li>
          <a href="{{ route('Emp_Tickets') }}">
            <span class="icon"><ion-icon name="person-add-sharp"></ion-icon></span>
            <span class="title">Tickets</span>
          </a>
        </li>
        <li>
          <a href="{{ route('LoginPage') }}">
            <span class="icon"><ion-icon name="log-out-sharp"></ion-icon></span>
            <span class="title">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <!--main panel-->
  <div class="main">
    <!--topbar (menu,search,profile)-->
    <div class="topbar">
      <div class="toggle">
        <ion-icon name="menu-sharp"></ion-icon>
      </div>
      <!--Search bar-->
      <div class="search">
        <label>
          <input type="text" placeholder="Search"> <ion-icon name="search-sharp"></ion-icon>
        </label>
      </div>
      
    </div>
    
    <div class="tabContainer">
      <div class="ProfileName">Rachel Marie R. Quingco</div>
      <div class="ProfileEmp">Team Member</div>
      <div class="content">
        <img class="Profilepic" src="{{ asset('img/ProfilePic.png') }}" />
      </div>
    </div>
    
    <!--Employee List-->
    <div class="bigBox">
        <div class="box">
          <div class="Menu">
            <div class="tab-buttons">
                <div class="maintask-button">
                    <a href="#" onclick="openTab('maintask-button')"> </a>
                </div>
                <div class="createTask-button">
                    <div class="button a">
                        <a href="#" onclick="openTab('createTask-button')">Create My Own Tasks </a>
                    </div>
                </div>
                <div class="viewTask-button">
                    <a href="#" onclick="openTab('viewTask-button')"> </a>
                </div>
            </div>
        </div>


            <!-- TL MAIN TASK (TL MAIN PAGE) -->
            <div id="maintask-button" class="tab-content">
                <table>
                    <table>
                        <thead>
                            <tr>
                              <td>Project Date</td>
                              <td>Project Name</td>
                              <td>Status</td>
                              <td>Team</td>
                              <td>Members</td>
                              <td>Assigned Task</td>
                              <td>Created By</td>
                              <td>Modified By</td> 
                            </tr>
                          </thead>
                          <tbody>
                            <tr onclick="openTab('viewTask-button');" style="cursor:pointer;">
                              <td>05-02-24</td>
                              <td>1Basic Plan</td>
                              <td>In Progress</td>
                              <td>B</td>
                              <td>See Members</td>
                              <td>See Task</td>
                              <td>Client Service</td>
                              <td>Team Leader</td>
                            </tr>
                            <tr onclick="openTab('viewTask-button');" style="cursor:pointer;">
                              <td>04-30-24</td>
                              <td>FAQ Accordion</td>
                              <td>In Progress</td>
                              <td>B</td>
                              <td>See Members</td>
                              <td>See Task</td>
                              <td>Client Service</td>
                              <td>Team Leader</td>
                            </tr>
                            <tr onclick="openTab('viewTask-button');" style="cursor:pointer;">
                              <td>04-29-24</td>
                              <td>Resizing icons</td>
                              <td>Completed</td>
                              <td>D</td>
                              <td>See Members</td>
                              <td>See Task</td>
                              <td>Client Service</td>
                              <td>Team Leader</td>
                            </tr>
                            <tr onclick="openTab('viewTask-button');" style="cursor:pointer;">
                              <td>04-29-24</td>
                              <td>Basic Plan - Instagram</td>
                              <td>Completed</td>
                              <td>A</td>
                              <td>See Members</td>
                              <td>See Task</td>
                              <td>Client Service</td>
                              <td>Team Leader</td>
                            </tr>
                            <tr onclick="openTab('viewTask-button');" style="cursor:pointer;">
                              <td>04-29-24</td>
                              <td>Standard Hosting</td>
                              <td>In Progress</td>
                              <td>C</td>
                              <td>See Members</td>
                              <td>See Task</td>
                              <td>Client Service</td>
                              <td>Team Leader</td>
                            </tr>
                          </tbody>
                    </table>  
                </table>
            </div>



<form action="{{ route('tasks.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- TL CREATE TASK (TL CREATE TASK BUTTON)-->
    <div id="createTask-button" class="tab-content">
        <div class="task-container">
            <div class="taskdate">
                <span class="label1">Date:</span>
                <input type="date" class="value1" name="date" placeholder="Enter Date" required>
            </div>
            <div class="taskname1">
                <span class="label2">Project / Task Name:</span>
                <input type="text" class="value2" name="project_name" placeholder="Enter Project Title" required>
            </div>
            <div class="taskteam">
                <span class="label3">Team:</span>
                <input type="text" class="value3" name="team" placeholder="Enter Team" required>
            </div>
            <div class="viewtask">
              <label for="fileUpload" class="vtask6">File Upload</label>
              <div class="texttask6">
                  <input type="file" id="fileUpload" name="fileUpload" class="file-upload-input">
                  <label for="fileUpload" class="file-upload-label">Choose File</label>
              </div>
            </div>
            <div class="ticDes">
                <span class="tdes1">Task Description</span>
                <textarea id="ticketDescription" name="task_description" rows="4" cols="50" placeholder="Enter task description here..."></textarea>
            </div>
            <div class="savetl2-button">
                <div class="button a savetl2">
                    <button type="submit">Save Changes</button>
                </div>
            </div>
        </div>
    </div>
</form>

          



           <!-- TL VIEW TASK  (TL VIEW BUTTON)-->
<div id="viewTask-button" class="tab-content">
    <div class="task-container">
        <div class="datetask">
            <span class="date1">Date *</span>
            <span class="d1">05-02-24</span>
        </div>
        <div class="taskname">
            <span class="task1">Project / Task Name *</span>
            <span class="t1">1Basic Plan</span>
        </div>
        <div class="teamname">
            <span class="team1">Team *</span>
            <span class="te1">D</span>
        </div>

        <div class="viewtask1">
            <label for="viewtask1" class="vtask61">Assigned Members</label>
            <div class="texttask61">
                <select id="viewtask1" name="viewtask1">
                    <option value="option1">Members</option>
                    <option value="option2">Rachel Marie Quingco</option>
                    <option value="option3">Reanne Angela Buccat</option>
                    <option value="option4">Hayya Michaela Cajuday</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
        </div>

        <!-- File upload box -->
        <div class="file-upload">
            <label for="fileInput" class="file-label">File Uploaded:</label>
            <input type="" id="fileInput" class="file-input">
        </div>

        <div class="assigned">
            <span class="ass1">Assigned Task</span>
            <textarea id="AssignedTask" rows="4" cols="50" placeholder="This is the assigned Task for Team D......."></textarea>
        </div>

        <div class="created">
            <span class="create1">Created By: </span>
            <span class="c1">Client Services</span>
        </div>
        <div class="modified">
            <span class="modify1">Modified By: </span>
            <span class="m1">Team Leader</span>
        </div>
    </div>
</div>



        </div>
    </div>
    
     
  </div>

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <script>


// HANDLING THE MAIN TAB FOR ATTENDANCE JAVASCRIPT ACTIVE TABs
document.querySelectorAll('.button a').forEach(button => {
  button.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior

    // Remove active-tab class from all links
    document.querySelectorAll('.button a').forEach(btn => {
      btn.classList.remove('active-tab');
    });

    // Add active-tab class to the clicked link
    this.classList.add('active-tab');

    // Store the active tab URL in localStorage
    localStorage.setItem('activeTab', this.href);

    // Navigate to the clicked link
    window.location.href = this.href;
  });
});

// Apply the active tab state based on the current URL
  window.addEventListener('load', function() {
  const currentUrl = window.location.href;
  document.querySelectorAll('.button a').forEach(btn => {
    if (btn.href === currentUrl) {
      btn.classList.add('active-tab');
    }
  });
});



    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
  
    toggle.onclick = function() {
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    }
  
    function openTab(tabId) {
      var tabContent = document.getElementsByClassName('tab-content');
      for (var i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = 'none';
      }
      document.getElementById(tabId).style.display = 'block';
    }
    
    // Function to run on page load to show the profile tab by default
    function showProfileTab() {
      openTab('maintask-button');
    }

    window.onload = showProfileTab; 
    // Function to run on page load to show the profile tab by default
    function showProfileTab() {
      openTab('maintask-button');
    }

    window.onload = showProfileTab;

    function toggleDropdown() {
      var dropdown = document.getElementById('dropdownMenu');
      if (dropdown.style.display === 'none' || dropdown.style.display === '') {
        dropdown.style.display = 'block';
      } else {
        dropdown.style.display = 'none';
      }
    }


    
  
  </script>
  
  
  
</body>
</html>
