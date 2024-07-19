<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/Tickets.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}"> <!--LOGO FAVICON-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>EMPLOYEE TICKETS</title>
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
        <li>
          <a href="{{ route('Emp_Tasks') }}">
            <span class="icon"><ion-icon name="ticket-sharp"></ion-icon></span>
            <span class="title">Tasks</span>
          </a>
        </li>
        <li class="active">
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
                    <div class="createTicket1-button">
                        <a href="#" onclick="openTab('createTicket1-button')"> </a>
                    </div>
                    <div class="createTicket2-button">
                      <div class="button a">
                        <a href="#" onclick="openTab('createTicket2-button')">Create New Ticket </a>
                      </div>
                    </div>
                    <div class="viewTicket-button">
                        <a href="#" onclick="openTab('viewTicket-button')"> </a>
                    </div>
                </div>
            </div>


            <!-- TL CREATE TICKET 1 (TL MAIN PAGE) -->
            <div id="createTicket1-button" class="tab-content">
                <table>
                    <table>
            <thead>
              <tr>
                <td>Date</td>
                <td>Time</td>
                <td>Ticket No.</td>
                <td>Status</td>
                <td>Ticket Subject</td>             
                <td>Created By</td>
                <td>Modified By</td>
              </tr>
            </thead>
            <tbody>
              <tr onclick="openTab('viewTicket-button');" style="cursor:pointer;">
                <td>05-09-24</td>
                <td>5:25 PM</td>
                <td>19056</td>
                <td>In Progress</td>
                <td>Request for signature</td>
                <td>Rachel Marie Quingco</td>
                <td> - </td>             
              </tr>
              <tr onclick="openTab('viewTicket-button');" style="cursor:pointer;">
                <td>05-03-24</td>
                <td>5:00 PM</td>
                <td>19029</td>
                <td>In Progress</td>
                <td>Request for acceptance</td>
                <td>Rachel Marie Quingco</td>
                <td>HR Name</td>
              </tr>
              <tr onclick="openTab('viewTicket-button');" style="cursor:pointer;">
                <td>05-02-24</td>
                <td>12:00 PM</td>
                <td>18067</td>
                <td>Completed</td>
                <td>Endorsement Letter</td>
                <td>Rachel Marie Quingco</td>
                <td>HR Name</td>
            </tr>
            
              <tr onclick="openTab('viewTicket-button');" style="cursor:pointer;">
                <td>04-27-24</td>
                <td>9:00 AM</td>
                <td>18067</td>
                <td>Completed</td>
                <td>Access for account</td>
                <td>Rachel Marie Quingco</td>
                <td>HR Name</td>
              </tr>
              <tr onclick="openTab('viewTicket-button');" style="cursor:pointer;">
                <td>04-07-24</td>
                <td>8:45 AM</td>
                <td>18040</td>
                <td>In Progress</td>
                <td>Access for account</td>
                <td>Rachel Marie Quingco</td>
                <td>HR Name</td>
              </tr>
            </tbody>
          </table>  
                </table>
            </div>


            <!-- TL CREATE TICKET 2 (TL CREATE BUTTON)-->
            <div id="createTicket2-button" class="tab-content">
              <div class="task-container">
                <div class="createTicket2">
                    <label for="createTicket2" class="cretic1">Ticket Subject</label>
                    <div class="cre1">
                        <select id="createTicket2" name="createTicket2">
                            <option value="option1"> - </option>
                <option value="option2">Academic Leave Request</option>
                <option value="option3">Sick Leave Request</option>
                <option value="option3">Request for E-Signature</option>
                <option value="option3">Request for DTR</option>
                <option value="option3">Request for Change of Information</option>
                <option value="option3">Others</option>
                        </select>
                    </div>
                </div>

                <div class="viewtask">
                  <label for="fileUpload" class="vtask6">File Upload</label>
                  <div class="texttask6">
                      <input type="file" id="fileUpload" name="fileUpload" class="file-upload-input">
                      <label for="fileUpload" class="file-upload-label">Choose File</label>
                  </div>
              </div>

              <div class="taskteam1">
                <span class="labe3">Subject</span>
                <input type="text" class="valu3" placeholder="Enter Subject" required>
            </div>

            <div class="ticDes">
              <span class="tdes1">Ticket Description</span>
              <textarea id="ticketDescription" rows="4" placeholder="Enter ticket description..."></textarea>
          </div>
          

                  <div class="savetl-button">
                    <div class="savetl">
                        <a href="Emp_Tickets.html">Save Changes</a>
                    </div>
                 </div>

                <div class="editTickettl-button">
                    <div class="editTickettl">
                        <a href="">Edit</a>
                    </div>
                </div>
            </div>
          </div>


             <!-- TL VIEW TICKET  (TL VIEW BUTTON)-->
            <div id="viewTicket-button" class="tab-content">
              <div class="task-container">
                <div class="dtime">
                    <span class="dtime1">Date & Time</span>
                      <span class="time1">May 11, 2024 4:30 PM</span>
              </div>
              <div class="ticketnum">
                  <span class="ticketnum1">Ticket Number</span>
                  <span class="num1">19099</span>
              </div>
              <div class="status">
                  <span class="status1">Status</span>
                  <span class="st1">Pending</span>
              </div>
              <div class="subject">
                  <span class="sub1">Ticket Subject</span>
                  <span class="s1">Request for E-Signature</span>
              </div>
      
              
      
                <!-- File upload box -->
              <div class="file-upload">
                    <label for="fileInput" class="file-label">File Uploaded:</label>
                    <input id="fileInput" class="file-input">
              </div>
      
                  
            
              <div class="ticDes2">
                <span class="tdes2">Ticket Description</span>
                <textarea id="ticketDescription2" rows="4" placeholder="Enter ticket description..."></textarea>
            </div>
      
                <div class="tcreated">
                    <span class="create2">Created By: </span>
                      <span class="c2">Rachel Marie Quingco</span>
              </div>
              <div class="tmodified">
                  <span class="modify2">Modified By: </span>
                  <span class="m2"> - </span>
              </div>
                
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
      openTab('createTicket1-button');
    }

    window.onload = showProfileTab; 
    // Function to run on page load to show the profile tab by default
    function showProfileTab() {
      openTab('createTicket1-button');
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
