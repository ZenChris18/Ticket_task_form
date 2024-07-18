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
          </div>
        </div>


        <div class="Menu">
          <div class="tab-buttons">
            <div class="button a blue-background">     
            <button onclick="openTab('hours25', this)">25% Notification</button>
            <button onclick="openTab('hours50', this)">50% Notification</button>
            <button onclick="openTab('hours75', this)">75% Notification</button>
            <button onclick="openTab('hours100', this)">100% Notification</button>
          </div>
          </div>
        </div>


        <!--Tab Content-->
        <div id="absence" class="tab-content">
          
          <table>
            <thead>
              <tr>
                <td>Notification</td>
                <td>Date</td>
                <td>Status</td>
                <td>Created By</td>
                <td>Modified By</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                  <td>50% Hours Notification</td>
                  <td>05-25-24</td>
                  <td>Pending</td>
                  <td>1897 - Rachel Marie</td>
                  <td>-</td>
              </tr>
              <tr>
                  <td>25% Hours Notification</td>
                  <td>05-19-24</td>
                  <td>Checked</td>
                  <td>1897 - Rachel Marie</td>
                  <td>Admin</td>
              </tr>
            </tbody>
          </table>
        </div>


        
      <!--HOURSS 25%-->
      <div id="hours25" class="tab-content">
        <h2></h2>
        <div class="name25">
          <span class="n25">First Name<span style="color: red;">*</span></span>
          <input type="text" class="n1" placeholder="Enter First Name" required>
      </div>
      
      <div class="lname">
          <span class="e25">Last Name<span style="color: red;">*</span></span>
          <input type="text" class="e1" placeholder="Enter Last Name" required>
      </div>

      <div class="mail25">
        <span class="m25">Email<span style="color: red;">*</span></span>
        <input type="text" class="m1" placeholder="Enter Email" required>
      </div>

      <div class="date25">
        <span class="da25">Date of 25% Hours<span style="color: red;">*</span></span>
        <input type="text" class="da1" placeholder="Enter Date" required>
      </div>

      <div class="dept25">
        <label for="dept25" class="d1">Your Department<span style="color: red;">*</span></label>
        <div class="d25">
          <select id="dept25" name="dept25">
            <option value="option1"> - </option>
            <option value="option2">Talent Services</option>
            <option value="option3">Account Services</option>
            <option value="option3">Project Services</option>
            <option value="option3">Client Services</option>
            <option value="option3">Digital Services</option>
          </select>
        </div>
      </div>

      <div class="pos25">
        <label for="pos25" class="p1">Current Position<span style="color: red;">*</span></label>
        <div class="p25">
          <select id="pos25" name="pos25">
            <option value="option1"> - </option>
            <option value="option2">Team Leader</option>
            <option value="option3">ATL</option>
            <option value="option3">JATL</option>
            <option value="option3">Team Member</option>
          </select>
        </div>
      </div>

      <div class="ren25">
          <span class="r25">Rendered Hours<span style="color: red;">*</span></span>
          <input type="text" class="r1" placeholder="Enter Rendered Hours" required>
      </div>

      <div class="numreq25">
          <span class="num25">No. Required Hrs<span style="color: red;">*</span></span>
          <input type="text" class="n1" placeholder="Enter Required Hours" required>
      </div> 

      <div class="file25">
          <span class="fil1">Upload your 2-5 minutes video format per question<span style="color: red;">*</span></span>
      </div>

      <div class="upload-container upload1">
          <div class="upload-box">
            <div class="upload-label">Experience with your Group</div>
            <label class="custom-file-upload">
              <input type="file" onchange="updateFileName(this)" />
              Choose File
            </label>
            <span class="file-name"></span>
          </div>
        </div>
        
        <div class="upload-container upload2">
          <div class="upload-box">
            <div class="upload-label">Experience within your Department</div>
            <label class="custom-file-upload">
              <input type="file" onchange="updateFileName(this)" />
              Choose File
            </label>
            <span class="file-name"></span>
          </div>
        </div>

        <div class="upload-container upload3">
          <div class="upload-box">
            <div class="upload-label">Experience outside your Department</div>
            <label class="custom-file-upload">
              <input type="file" onchange="updateFileName(this)" />
              Choose File
            </label>
            <span class="file-name"></span>
          </div>
        </div>
        
        <div class="upload-container upload4">
          <div class="upload-box">
            <div class="upload-label">Experience with your Department Leadership</div>
            <label class="custom-file-upload">
              <input type="file" onchange="updateFileName(this)" />
              Choose File
            </label>
            <span class="file-name"></span>
          </div>
        </div>

        <div class="upload-container upload5">
          <div class="upload-box">
            <div class="upload-label">Experience outside your Company Supervisor</div>
            <label class="custom-file-upload">
              <input type="file" onchange="updateFileName(this)" />
              Choose File
            </label>
            <span class="file-name"></span>
          </div>
        </div>

        <div class="upload-container upload6">
          <div class="upload-box">
            <div class="upload-label">Screenshot of your Email Notification</div>
            <label class="custom-file-upload">
              <input type="file" onchange="updateFileName(this)" />
              Choose File
            </label>
            <span class="file-name"></span>
          </div>
        </div>

        <div class="question">Do you want to schedule 1 on 1 Listener with Talents Team?</div>
        <div class="options">
          <label><input type="radio" name="schedule" value="yes"> Yes</label>
          <label><input type="radio" name="schedule" value="no"> No</label>
        </div>

        <div class="submit-button">
          <div class="submit">
            <a href="Emp_Hours.html">Submit</a>
          </div>
        </div>
      </div>
        


        <!--HOURSS 50%-->
        <div id="hours50" class="tab-content">
          <h2></h2>
          <div class="name25">
            <span class="n25">First Name<span style="color: red;">*</span></span>
            <input type="text" class="n1" placeholder="Enter First Name" required>
        </div>
        
        <div class="lname">
            <span class="e25">Last Name<span style="color: red;">*</span></span>
            <input type="text" class="e1" placeholder="Enter Last Name" required>
        </div>
  
        <div class="mail25">
          <span class="m25">Email<span style="color: red;">*</span></span>
          <input type="text" class="m1" placeholder="Enter Email" required>
        </div>
  
        <div class="date25">
          <span class="da25">Date of 50% Hours<span style="color: red;">*</span></span>
          <input type="text" class="da1" placeholder="Enter Date" required>
        </div>
  
        <div class="dept25">
          <label for="dept25" class="d1">Your Department<span style="color: red;">*</span></label>
          <div class="d25">
            <select id="dept25" name="dept25">
              <option value="option1"> - </option>
              <option value="option2">Talent Services</option>
              <option value="option3">Account Services</option>
              <option value="option3">Project Services</option>
              <option value="option3">Client Services</option>
              <option value="option3">Digital Services</option>
            </select>
          </div>
        </div>
  
        <div class="pos25">
          <label for="pos25" class="p1">Current Position<span style="color: red;">*</span></label>
          <div class="p25">
            <select id="pos25" name="pos25">
              <option value="option1"> - </option>
              <option value="option2">Team Leader</option>
              <option value="option3">ATL</option>
              <option value="option3">JATL</option>
              <option value="option3">Team Member</option>
            </select>
          </div>
        </div>
  
        <div class="ren25">
            <span class="r25">Rendered Hours<span style="color: red;">*</span></span>
            <input type="text" class="r1" placeholder="Enter Rendered Hours" required>
        </div>
  
        <div class="numreq25">
            <span class="num25">No. Required Hrs<span style="color: red;">*</span></span>
            <input type="text" class="n1" placeholder="Enter Required Hours" required>
        </div> 
  
        <div class="file25">
            <span class="fil1">Upload your 2-5 minutes video format per question<span style="color: red;">*</span></span>
        </div>
  
        <div class="upload-container upload1">
            <div class="upload-box">
              <div class="upload-label">Experience with your Group</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
          
          <div class="upload-container upload2">
            <div class="upload-box">
              <div class="upload-label">Experience within your Department</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload3">
            <div class="upload-box">
              <div class="upload-label">Experience outside your Department</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
          
          <div class="upload-container upload4">
            <div class="upload-box">
              <div class="upload-label">Experience with your Department Leadership</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload5">
            <div class="upload-box">
              <div class="upload-label">Experience outside your Company Supervisor</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload6">
            <div class="upload-box">
              <div class="upload-label">Screenshot of your Email Notification</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="question">Do you want to schedule 1 on 1 Listener with Talents Team?</div>
          <div class="options">
            <label><input type="radio" name="schedule" value="yes"> Yes</label>
            <label><input type="radio" name="schedule" value="no"> No</label>
          </div>
  
          <div class="submit-button">
            <div class="submit">
              <a href="Emp_Hours.html">Submit</a>
            </div>
          </div>
        </div>
        


        <!--HOURSS 75%-->
        <div id="hours75" class="tab-content">
          <h2></h2>

          <div class="name25">
            <span class="n25">First Name<span style="color: red;">*</span></span>
            <input type="text" class="n1" placeholder="Enter First Name" required>
        </div>
        
        <div class="lname">
            <span class="e25">Last Name<span style="color: red;">*</span></span>
            <input type="text" class="e1" placeholder="Enter Last Name" required>
        </div>
  
        <div class="mail25">
          <span class="m25">Email<span style="color: red;">*</span></span>
          <input type="text" class="m1" placeholder="Enter Email" required>
        </div>
  
        <div class="date25">
          <span class="da25">Date of 75% Hours<span style="color: red;">*</span></span>
          <input type="text" class="da1" placeholder="Enter Date" required>
        </div>
  
        <div class="dept25">
          <label for="dept25" class="d1">Your Department<span style="color: red;">*</span></label>
          <div class="d25">
            <select id="dept25" name="dept25">
              <option value="option1"> - </option>
              <option value="option2">Talent Services</option>
              <option value="option3">Account Services</option>
              <option value="option3">Project Services</option>
              <option value="option3">Client Services</option>
              <option value="option3">Digital Services</option>
            </select>
          </div>
        </div>
  
        <div class="pos25">
          <label for="pos25" class="p1">Current Position<span style="color: red;">*</span></label>
          <div class="p25">
            <select id="pos25" name="pos25">
              <option value="option1"> - </option>
              <option value="option2">Team Leader</option>
              <option value="option3">ATL</option>
              <option value="option3">JATL</option>
              <option value="option3">Team Member</option>
            </select>
          </div>
        </div>
  
        <div class="ren25">
            <span class="r25">Rendered Hours<span style="color: red;">*</span></span>
            <input type="text" class="r1" placeholder="Enter Rendered Hours" required>
        </div>
  
        <div class="numreq25">
            <span class="num25">No. Required Hrs<span style="color: red;">*</span></span>
            <input type="text" class="n1" placeholder="Enter Required Hours" required>
        </div> 
  
        <div class="file25">
            <span class="fil1">Upload your 2-5 minutes video format per question<span style="color: red;">*</span></span>
        </div>
  
        <div class="upload-container upload1">
            <div class="upload-box">
              <div class="upload-label">Experience with your Group</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
          
          <div class="upload-container upload2">
            <div class="upload-box">
              <div class="upload-label">Experience within your Department</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload3">
            <div class="upload-box">
              <div class="upload-label">Experience outside your Department</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
          
          <div class="upload-container upload4">
            <div class="upload-box">
              <div class="upload-label">Experience with your Department Leadership</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload5">
            <div class="upload-box">
              <div class="upload-label">Experience outside your Company Supervisor</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload6">
            <div class="upload-box">
              <div class="upload-label">Screenshot of your Email Notification</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="question">Do you want to schedule 1 on 1 Listener with Talents Team?</div>
          <div class="options">
            <label><input type="radio" name="schedule" value="yes"> Yes</label>
            <label><input type="radio" name="schedule" value="no"> No</label>
          </div>
  
          <div class="submit-button">
            <div class="submit">
              <a href="Emp_Hours.html">Submit</a>
            </div>
          </div>
        </div>
        

        <!--HOURSS 100%-->
        <div id="hours100" class="tab-content">
          <h2></h2>
          <div class="name25">
            <span class="n25">First Name<span style="color: red;">*</span></span>
            <input type="text" class="n1" placeholder="Enter First Name" required>
        </div>
        
        <div class="lname">
            <span class="e25">Last Name<span style="color: red;">*</span></span>
            <input type="text" class="e1" placeholder="Enter Last Name" required>
        </div>
  
        <div class="mail25">
          <span class="m25">Email<span style="color: red;">*</span></span>
          <input type="text" class="m1" placeholder="Enter Email" required>
        </div>
  
        <div class="date100">
          <span class="da100">Date of 100% Hours<span style="color: red;">*</span></span>
          <input type="text" class="da10" placeholder="Enter Date" required>
        </div>
  
        <div class="dept25">
          <label for="dept25" class="d1">Your Department<span style="color: red;">*</span></label>
          <div class="d25">
            <select id="dept25" name="dept25">
              <option value="option1"> - </option>
              <option value="option2">Talent Services</option>
              <option value="option3">Account Services</option>
              <option value="option3">Project Services</option>
              <option value="option3">Client Services</option>
              <option value="option3">Digital Services</option>
            </select>
          </div>
        </div>
  
        <div class="pos25">
          <label for="pos25" class="p1">Current Position<span style="color: red;">*</span></label>
          <div class="p25">
            <select id="pos25" name="pos25">
              <option value="option1"> - </option>
              <option value="option2">Team Leader</option>
              <option value="option3">ATL</option>
              <option value="option3">JATL</option>
              <option value="option3">Team Member</option>
            </select>
          </div>
        </div>
  
        <div class="ren25">
            <span class="r25">Rendered Hours<span style="color: red;">*</span></span>
            <input type="text" class="r1" placeholder="Enter Rendered Hours" required>
        </div>
  
        <div class="numreq25">
            <span class="num25">No. Required Hrs<span style="color: red;">*</span></span>
            <input type="text" class="n1" placeholder="Enter Required Hours" required>
        </div> 
  
        <div class="file25">
            <span class="fil1">Upload your 2-5 minutes video format per question<span style="color: red;">*</span></span>
        </div>
  
        <div class="upload-container upload1">
            <div class="upload-box">
              <div class="upload-label">Experience with your Group</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
          
          <div class="upload-container upload2">
            <div class="upload-box">
              <div class="upload-label">Experience within your Department</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload3">
            <div class="upload-box">
              <div class="upload-label">Experience outside your Department</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
          
          <div class="upload-container upload4">
            <div class="upload-box">
              <div class="upload-label">Experience with your Department Leadership</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload5">
            <div class="upload-box">
              <div class="upload-label">Experience outside your Company Supervisor</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="upload-container upload6">
            <div class="upload-box">
              <div class="upload-label">Screenshot of your Email Notification</div>
              <label class="custom-file-upload">
                <input type="file" onchange="updateFileName(this)" />
                Choose File
              </label>
              <span class="file-name"></span>
            </div>
          </div>
  
          <div class="question">Do you want to schedule 1 on 1 Listener with Talents Team?</div>
          <div class="options">
            <label><input type="radio" name="schedule" value="yes"> Yes</label>
            <label><input type="radio" name="schedule" value="no"> No</label>
          </div>
  
          <div class="submit-button">
            <div class="submit">
              <a href="Emp_Hours.html">Submit</a>
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





    // HANDLING THE SIDEBAR JAVASCRIPT ACTIVE TAB
    document.querySelector('.toggle').onclick = function(){
      document.querySelector('.navigation').classList.toggle('active');
      document.querySelector('.main').classList.toggle('active');
    }

    let list = document.querySelectorAll('.navigation li');
    list.forEach(item => item.addEventListener('mouseover', function() {
      list.forEach(item => item.classList.remove('hovered'));
      this.classList.add('hovered');
    }));

    function openTab(tabName) {
      const tabContent = document.querySelectorAll('.tab-content');
      tabContent.forEach(content => content.style.display = 'none');
      document.getElementById(tabName).style.display = 'block';
    }

    // Default tab to open
    openTab('absence');




  // HANDLING THE OPENTAB JAVASCRIPT ACTIVE TAB
  function openTab(tabName, button) {
  const tabContent = document.querySelectorAll('.tab-content');
  tabContent.forEach(content => content.style.display = 'none');
  document.getElementById(tabName).style.display = 'block';

  // Remove active class from all buttons
  document.querySelectorAll('.button.a button').forEach(btn => {
    btn.classList.remove('active');
  });

  // Add active class to the clicked button
  button.classList.add('active');
}

  </script>

</body>
</html>