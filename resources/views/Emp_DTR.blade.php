<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="Attendance.css">
  <link rel="icon" type="image/png" href="img/favicon.png"> <!--LOGO FAVICON-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>EMPLOYEE ATTENDANCE</title>
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
            <a href="Profile.html">
              <span class="icon"><ion-icon name="person-circle-sharp"></ion-icon></span>
              <span class="title">Profile</span>
            </a>
          </li>
          <li class="active">
            <a href="Emp_DTR.html">
              <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
              <span class="title">Attendance</span>
            </a>
          </li>
          <li>
            <a href="Emp_Tasks.html">
              <span class="icon"><ion-icon name="ticket-sharp"></ion-icon></span>
              <span class="title">Tasks</span>
            </a>
          </li>
          
          <li>
            <a href="Emp_Tickets.html">
              <span class="icon"><ion-icon name="person-add-sharp"></ion-icon></span>
              <span class="title">Tickets</span>
            </a>
          </li>
          
          
          <li>
            <a href="LoginPage.html">
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
         <img class="Profilepic" src="Profilepic.JPG" />
  
      </div>
      <!-- Other tabs -->
    </div>
    
    <!--Employee List-->
    <div class="bigBox">
      <div class="box">
        <div class="boxHeader">
          <div class="button a">
            <div class="dtr-button">
              <a href="Emp_DTR.html">Daily Track Record</a>
              <a href="Emp_Leave.html">Leave</a>
              <a href="Emp_Hours.html">Hours Notification</a>
            </div>

            <div class="amIn-button">
              <a href="#" class="trigger" data-title="AM Time In">AM Time In</a>
              <a href="#" class="trigger" data-title="AM Time Out">AM Time Out</a>
              <a href="#" class="trigger" data-title="PM Time In">PM Time In</a>
              <a href="#" class="trigger" data-title="PM Time Out">PM Time Out</a>
            </div>
          </div>
          
        
        <table>
          <thead>
            <tr>
              <td>ID</td>
              <td>Name</td>
              <td>Status</td>
              <td>Date</td>
              <td>AM IN</td>
              <td>AM OUT</td>
              <td>PM IN</td>
              <td>PM OUT</td>
              <td>Total Hrs</td>
              <td>Created By</td>
              <td>Modified By</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1897</td>
              <td>Rachel Marie Quingco</td>
              <td>Working</td>
              <td>05-20-24</td>
              <td>7:47AM</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>...</td>
              <td>Rachel Marie</td>
              <td>HR Name</td>
            </tr>
            <tr>
              <td>1897</td>
              <td>Rachel Marie Quingco</td>
              <td>Sick Leave</td>
              <td>05-19-24</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td>0</td>
              <td>HR Name</td>
              <td>HR Name</td>
            </tr>
            <tr>
              <td>1897</td>
              <td>Rachel Marie Quingco</td>
              <td>Working</td>
              <td>05-18-24</td>
              <td>7:47AM</td>
              <td>12:02PM</td>
              <td>12:45PM</td>
              <td>5:10PM</td>
              <td>8</td>
              <td>Rachel Marie</td>
              <td>HR Name</td>
            </tr>
            <tr>
              <td>1897</td>
              <td>Rachel Marie Quingco</td>
              <td>Working</td>
              <td>05-17-24</td>
              <td>7:47AM</td>
              <td>12:02PM</td>
              <td>12:45PM</td>
              <td>5:10PM</td>
              <td>8</td>
              <td>Rachel Marie</td>
              <td>HR Name</td>
            </tr>
            <tr>
              <td>1897</td>
              <td>Rachel Marie Quingco</td>
              <td>Working</td>
              <td>05-16-24</td>
              <td>7:47AM</td>
              <td>12:02PM</td>
              <td>12:45PM</td>
              <td>5:10PM</td>
              <td>8</td>
              <td>Rachel Marie</td>
              <td>HR Name</td>
            </tr>
          </tbody>
        </table>
        
        <!-- POP UP -->
        <div id="popupBox" class="popup-box"></div>
  
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


    // HANDLING THE SIDEBAR JAVASCRIPT ACTIVE TAB
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function(){
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    }

    let list = document.querySelectorAll('.navigation li');
    function activeLink(){
      list.forEach((item) => 
        item.classList.remove('hovered'));
      this.classList.add('hovered');
    }
    list.forEach((item) =>
      item.addEventListener('mouseover', activeLink));


    // Function to create popup box
  function createPopup(title) {
    return `
      <div class="popup-content">
        <span class="close-button">&times;</span>
        <h2>${title}</h2>
        <img src="camera.JPG" alt="QR Code" class="qr-code">
        <p></p>
        <button class="submitAttendanceButton">Submit Attendance</button>
      </div>
    `;
  }

  // Popup functionality
  document.addEventListener('click', function(event) {
    if (event.target.classList.contains('trigger')) {
      const title = event.target.getAttribute('data-title');
      const popupContent = createPopup(title);
      const popupBox = document.getElementById('popupBox');
      popupBox.innerHTML = popupContent;
      popupBox.style.display = 'block';
    } else if (event.target.classList.contains('close-button')) {
      const popupBox = document.getElementById('popupBox');
      popupBox.style.display = 'none';
    }
  });

// KEEP DTR BUTTON ACTIVE WHEN CLICKING ON TIME BUTTONS  
document.querySelectorAll('.amIn-button a').forEach(button => {
  button.addEventListener('click', function(event) {
    event.preventDefault(); // Prevent the default link behavior
    
    // Remove active-tab class from all links except "DTR"
    document.querySelectorAll('.button .dtr-button a').forEach(btn => {
      btn.classList.remove('active-tab');
    });
    
    // Add active-tab class to the "DTR" button
    document.querySelector('.dtr-button a').classList.add('active-tab');
  });
});
  


  </script>



</body>
</html>
