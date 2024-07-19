<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/Profile.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <title>EMPLOYEE PROFILE</title>
</head>
<body>

  <!--SIDEBAR--><!--SIDEBAR--><!--SIDEBAR-->
  <div class="container"> <!--SIDEBAR CONTAINER-->
    <div class="navigation"> <!--SIDEBAR NAVIGATION-->
      <ul> <!--START OF LIST-->

        <!--LOGO-->
        <li>
            <a href="#">
              <span class="logo"><img src="{{ asset('img/logo.png') }}" alt="Logo"></span>
              <span class="title">ROC.PH</span>
            </a>
          </li>
        
          <!--PROFILE TAB-->
          <li class="active">
            <a href="{{ route('show.form') }}">
              <span class="icon"><ion-icon name="person-circle-sharp"></ion-icon></span>
              <span class="title">Profile</span>
            </a>
          </li>

          <!--ATTENDANCE TAB-->
          <li>
            <a href="{{ route('Emp_DTR') }}">
              <span class="icon"><ion-icon name="people-sharp"></ion-icon></span>
              <span class="title">Attendance</span>
            </a>
          </li>

          <!--TASK TAB-->
          <li>
            <a href="{{ route('Emp_Tasks') }}">
              <span class="icon"><ion-icon name="ticket-sharp"></ion-icon></span>
              <span class="title">Tasks</span>
            </a>
          </li>

          <!--TICKETS TAB-->
          <li>
            <a href="{{ route('Emp_Tickets') }}">
              <span class="icon"><ion-icon name="person-add-sharp"></ion-icon></span>
              <span class="title">Tickets</span>
            </a>
          </li>

          <!--LOGOUT TAB-->
          <li>
            <a href="{{ route('LoginPage') }}">
              <span class="icon"><ion-icon name="log-out-sharp"></ion-icon></span>
              <span class="title">Logout</span>
            </a>
          </li>

      </ul> <!--END OF LIST-->
    </div> <!--END OF SIDEBAR NAVIGATION-->
  </div> <!--END OF SIDEBAR CONTAINER-->



  <!--MAIN PANEL--><!--MAIN PANEL--><!--MAIN PANEL-->
  <div class="main"> <!--MAIN CONTAINER-->
    <div class="topbar"> <!--TOPBAR-->
      <!--BURGER MENU-->
      <div class="toggle"><ion-icon name="menu-sharp"></ion-icon></div>
      <!--SEARCH BAR-->
      <div class="search"> <!--SEARCH CONTAINER-->
        <label>
          <input type="text" placeholder="Search"> <ion-icon name="search-sharp"></ion-icon> <!--SEARCH ICON-->
        </label>
      </div> <!--END OF SEARCH CONTAINER-->
    </div> <!--END OF TOPBAR-->

  <!--PROFILE-->  
  <div class="tabContainer"> <!--PROFILE CONTAINER-->
    <div class="ProfileName">Rachel Marie T. Quingco</div>
    <div class="ProfileEmp">Team Member</div>
    <div class="content"><img class="Profilepic" src="{{ asset('img/ProfilePic.png') }}" /></div>
  </div><!--END OF PROFILE CONTAINER-->
    
  <!--MENU TABS-->
  <div class="bigBox"> <!--PANEL BELOW PROFILE-->
   <div class="box"> 
    <div class="MainMenu"> <!--MENU CONTAINER-->
      <button onclick="openTab('personal')" class="active-tab">Personal Information</button>
      <button onclick="openTab('contact')">Contact Information</button>
      <button onclick="openTab('medical')">Medical Information</button>
      <button onclick="openTab('school')">School Information</button>
      <button onclick="openTab('job')">Job Information</button>
      <button onclick="openTab('educ')">Educational Background</button>
      <button onclick="openTab('work')">Work Background</button>
      <button onclick="openTab('requirements')">Requirements</button>
      <button onclick="openTab('account')">Account Settings</button>
      
   </div>

   <!--MENU CONTENTS -->
   <div class="info"> <!--MENU CONTENTS CONTAINER-->
    <span class="icon"><ion-icon name=" "></ion-icon></span> <!--EDIT PENCIL ICON-->
    
    <!--PERSONAL INFORMATION--> 
    <div id="personal" class="tab-content"> 
      <div class="input-container">

        <div class="input-field">
          <p>Last Name<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Last Name" required>
        </div>
        <div class="input-field">
          <p>First Name<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter First Name" required>
        </div>
        <div class="input-field">
          <p>Middle Name</p>
          <input type="text" id="" placeholder="Enter Middle Name">
        </div>
        <div class="input-field">
          <p>Suffix</p>
          <input type="text" id="" placeholder="Ex. Jr. , Sr.">
        </div>
        <div class="input-field">
          <p>Date of Birth<span style="color: red;">*</span></p>
          <input type="date" id="" placeholder="Enter Date of Birth" required>
        </div>
        <div class="input-field">
          <p>Sex<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Female/Male/Others" required>
        </div>
        <div class="input-field">
          <p>Address<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Address" required>
        </div>

        <h3 class="emergency-header">Family Information</h3> <!--FAMILY INFORMATION--> 

        <div class="input-field">
          <p>Father's Full Name<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Father's Full Name" required>
        </div>
        <div class="input-field">
          <p>Occupation<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Father's Occupation" required>
        </div>
        <div class="input-field">
          <p>Contact Number<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Father's Contact Number" required>
        </div>
        <div class="input-field">
          <p>Address<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Father's Address" required>
        </div>
        <div class="input-field">
          <p>Mother's Full Name<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Mother's Full Name" required>
        </div>
        <div class="input-field">
          <p>Occupation<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Mother's Occupation" required>
        </div>
        <div class="input-field">
          <p>Contact Number<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Mother's Contact Number" required>
        </div>
        <div class="input-field">
          <p>Address<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Mother's Address" required>
        </div>
        <div class="input-field">
          <p>Number of Siblings<span style="color: red;">*</span></p>
          <input type="number" id="" placeholder="Enter Number of Siblings" required>
        </div>
        
       
      </div> <!--END OF INPUT CONTAINER--> 
    </div> <!--END OF PERSONAL INFORMATION--> 

    <!--CONTACT INFORMATION--> 
    <div id="contact" class="tab-content">
      <div class="input-container"> 

        <div class="input-field">
          <p>Contact Number<span style="color: red;">*</span></p>
          <input type="number" id="contactNumber" placeholder="Enter 11 Digit Number">
        </div>
        <div class="input-field">
          <p>Personal Email Address<span style="color: red;">*</span></p>
          <input type="email" id="email" placeholder="Enter Email Address">
        </div>

        <h3 class="emergency-header">Contact person in case of emergency</h3> <!--CONTACT PERSON INFORMATION--> 

        <div class="input-field">
          <p>Full Name<span style="color: red;">*</span></p>
          <input type="text" id="lastNameInput" placeholder="Enter Last Name">
        </div>
        <div class="input-field">
          <p>Date of Birth<span style="color: red;">*</span></p>
          <input type="date" id="dob" placeholder="Enter Date of Birth">
        </div>
        <div class="input-field">
          <p>Address<span style="color: red;">*</span></p>
          <input type="text" id="address" placeholder="Enter Address">
        </div>
        <div class="input-field">
          <p>Contact Number<span style="color: red;">*</span></p>
          <input type="number" id="contactNumber" placeholder="Enter 11 Digit Number">
        </div>
        <div class="input-field">
          <p>Email Address<span style="color: red;">*</span></p>
          <input type="email" id="email" placeholder="Enter Email Address">
        </div>
        <div class="input-field">
          <p>Relationship<span style="color: red;">*</span></p>
          <input type="text" id="relationship" placeholder="Enter Relationship">
        </div>
        
      </div> <!--END OF INPUT CONTAINER--> 
    </div> <!--END OF CONTACT INFORMATION--> 

    <!--MEDICAL INFORMATION--> 
    <div id="medical" class="tab-content">
      <div class="input-container">

        <div class="input-field">
          <p>Health Status</p>
          <input type="text" id="" placeholder="Okay / Unsure">
        </div>
        <div class="input-field">
          <p>Blood Type</p>
          <input type="" id="" placeholder="Enter Blood Type">
        </div>
        <div class="input-field">
          <p>Height</p>
          <input type="number" id="" placeholder="Enter Height in cm">
        </div>
        <div class="input-field">
          <p>Weight</p>
          <input type="number" id="" placeholder="Enter Weight in lbs">
        </div>
        <div class="input-field">
          <p>Food Restriction</p>
          <input type="text" id="" placeholder="Enter Food Restrictions">
        </div>
        <div class="input-field">
          <p>Medical Certificate</p>
          <input type="file" id="" placeholder="">
        </div>
        <div class="input-field">
          <p>Medical Insurance</p>
          <input type="file" id="" placeholder="=">
        </div>
       
      </div> <!--END OF INPUT CONTAINER--> 
    </div> <!--END OF MEDICAL INFORMATION--> 

    <!--SCHOOL INFORMATION-->
    <div id="school" class="tab-content">
      <div class="input-container">

        <div class="input-field">
          <p>School<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter School Name" required>
        </div>
        <div class="input-field">
          <p>School Address<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter School Address" required>
        </div>
        <div class="input-field">
          <p>Year and Course<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Ex: 3rd Year Bachelor of Science in Information Technology" required>
        </div>
        <div class="input-field">
          <p>Required Hours of Internship<span style="color: red;">*</span></p>
          <input type="number" id="" placeholder="Enter Hours" required>
        </div>
        <div class="input-field">
          <p>School Contact Person<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter School Contact Person Name" required>
        </div>
        <div class="input-field">
          <p>Position<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter School Contact Person Position" required>
        </div>
        <div class="input-field">
          <p>Email Address<span style="color: red;">*</span></p>
          <input type="email" id="" placeholder="Enter School Contact Person Email" required>
        </div>
        <div class="input-field">
          <p>Contact Number</p>
          <input type="number" id="" placeholder="Enter School Contact Person Number">
        </div>
      
        
        
      </div> <!--END OF INPUT CONTAINER--> 
    </div> <!-- END OF SCHOOL INFORMATION--> 

    <!--JOB INFORMATION -->
    <div id="job" class="tab-content">
      <div class="input-container">

        <div class="input-field">
          <p>ID Number<span style="color: red;">*</span></p>
          <input type="number" id="" placeholder="Enter ID Number" required>
        </div>
        <div class="input-field">
          <p>Work Email<span style="color: red;">*</span></p>
          <input type="number" id="" placeholder="Enter Work Email" required>
        </div>
        <div class="input-field">
          <p>Number of Rendered Days<span style="color: red;">*</span></p>
          <input type="number" id="" placeholder="Enter Days" required>
        </div>
        <div class="input-field">
          <p>Job Position<span style="color: red;">*</span></p>
          <select id="" required>
            <option value="" disabled selected>Select Job Position</option>
            <option value="">(Client Services)Account and Project Services</option>
            <option value="">(Management)Talent, HR and Culture Partnership Services</option>
            <option value="">(Management)Finance, Accounting and Investment Partnership Services</option>
            <option value="">(Digital Services)Creative Multimedia</option>
            <option value="">(Digital Services)Full Stack WordPress Developer</option>
            <option value="">(Digital Services)Full Stack Laravel Developer</option>
            <option value="">(Digital Services)Full Stack Bootstrap Developer</option>
          </select>
        </div>
        <div class="input-field">
          <p>Type of Position<span style="color: red;">*</span></p>
          <select id="" required>
            <option value="" disabled selected>Select Type of Position</option>
            <option value="">Team Leader</option>
            <option value="">Assistant Team Leader</option>
            <option value="">Junior Assistant Team Leader</option>
            <option value="">Team Member</option>
          </select>
        </div>
        <div class="input-field">
          <p>Skills<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Skills" required>
        </div>
        <div class="input-field">
          <p>Type of Employment<span style="color: red;">*</span></p>
          <select id="" required>
            <option value="" disabled selected>Select Employment Type</option>
            <option value="">K12 Work Immersion</option>
            <option value="">College Internship</option>
            <option value="">Graduate Apprentinceship Traineeship</option>
            <option value="">Part Time / Full Time Employement</option>
          </select>
        </div>
        <div class="input-field">
          <p>Department Assigned<span style="color: red;">*</span></p>
          <select id="" required>
            <option value="" disabled selected>Select Department</option>
            <option value="">Client Services</option>
            <option value="">Management</option>
            <option value="">Digital Services</option>
          </select>
        </div>
        <div class="input-field">
          <p>Sub Department Assigned<span style="color: red;">*</span></p>
          <select id="" required>
            <option value="" disabled selected>Select Sub Department</option>
            <option value="">Account and Project Services</option>
            <option value="">Talent, HR and Culture Partnership Services</option>
            <option value="">Finance, Accounting and Investment Partnership Services</option>
            <option value="">Creative Multimedia</option>
            <option value="">Full Stack WordPress Developer</option>
            <option value="">Full Stack Laravel Developer</option>
            <option value="">Full Stack Bootstrap Developer</option>
          </select>
        </div>
        <div class="input-field">
          <p>Team Assigned<span style="color: red;">*</span></p>
          <input type="text" id="" placeholder="Enter Team" required>
        </div>
        
        
      </div> <!--END OF INPUT CONTAINER-->
    </div> <!--END OF JOB APPLICATION INFORMATION--> 

    <!--EDUCATIONAL BACKGROUND-->
    <div id="educ" class="tab-content"> 
      <div class="input-container">

        <div class="input-field">
          <p>College</p>
          <input type="text" id="" placeholder="Enter College University/School">
        </div>
        <div class="input-field">
          <p>Course/Degree</p>
          <input type="text" id="" placeholder="Enter Course/Degree">
        </div>
        <div class="input-field">
          <p>Years Attended</p>
          <input type="text" id="" placeholder="Ex. 2020-2024">
        </div>
        <div class="input-field">
          <p>Senior High School</p>
          <input type="text" id="" placeholder="Enter Senior High School">
        </div>
        <div class="input-field">
          <p>Course/Track</p>
          <input type="text" id="" placeholder="Enter Track Ex.STEM">
        </div>
        <div class="input-field">
          <p>Years Attended</p>
          <input type="text" id="" placeholder="Ex. 2020-2024">
        </div>
        
        
      </div> <!--END OF INPUT CONTAINER-->
    </div> <!--END OF EDUCATIONAL BACKGROUND-->

    <!--WORK BACKGROUND-->
    <div id="work" class="tab-content"> 
      <div class="input-container">

        <div class="input-field">
          <p>Previous Company </p>
          <input type="text" id="" placeholder="Enter Previous Company">
        </div>
        <div class="input-field">
          <p>Job Position</p>
          <input type="text" id="" placeholder="Enter Previous Position">
        </div>
        <div class="input-field">
          <p>Years Attended</p>
          <input type="text" id="" placeholder="Ex. 2020-2024">
        </div>
        <div class="input-field">
          <p>Previous Company </p>
          <input type="text" id="" placeholder="Enter Previous Company">
        </div>
        <div class="input-field">
          <p>Job Position</p>
          <input type="text" id="" placeholder="Enter Previous Position">
        </div>
        <div class="input-field">
          <p>Years Attended</p>
          <input type="text" id="" placeholder="Ex. 2020-2024">
        </div>
        
        
      </div> <!--END OF INPUT CONTAINER-->
    </div><!--END OF WORK BACKGROUND-->

    <!--REQUIREMENTS-->
    <div id="requirements" class="tab-content">
     <div class="input-container">

        <h3 class="emergency-header">Onboarding Requirements</h3> <!--ONBOARDING REQUIREMENTS-->
        
        <div class="input-field">
          <p>Photo ID<span style="color: red;">*</span></p>
          <input type="file" id="" required>
        </div>
        <div class="input-field">
          <p>Photocopy of Workspace/Work Desk<span style="color: red;">*</span></p>
          <input type="file" id=""required>
        </div>
        <div class="input-field">
          <p>Photocopy of Computer/Laptop Specifications<span style="color: red;">*</span></p>
          <input type="file" id=""required>
        </div>
        <div class="input-field">
          <p>Photocopy of Internet Speed<span style="color: red;">*</span></p>
          <input type="file" id=""required>
        </div>
        <div class="input-field">
          <p>Portfolio Link</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Portfolio Files</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Photocopy of School ID<span style="color: red;">*</span></p>
          <input type="file" id=""required>
        </div>
        <div class="input-field">
          <p>Photocopy of Signed Parent's Consent</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Photocopy of Valid ID in Signed Parent's Consent</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Photocopy of Endorsement Letter From School</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Photocopy of MOA/MOU</p>
          <input type="file" id="">
        </div>

        <h3 class="emergency-header">Offboarding Requirements</h3> <!--OFFBOARDING REQUIREMENTS-->
        
        <div class="input-field">
          <p>Photo ID<span style="color: red;">*</span></p>
          <input type="file" id="" required>
        </div>
        <div class="input-field">
          <p>Photocopy of Workspace/Work Desk<span style="color: red;">*</span></p>
          <input type="file" id=""required>
        </div>
        <div class="input-field">
          <p>Photocopy of Computer/Laptop Specifications<span style="color: red;">*</span></p>
          <input type="file" id=""required>
        </div>
        <div class="input-field">
          <p>Photocopy of Internet Speed<span style="color: red;">*</span></p>
          <input type="file" id=""required>
        </div>
        <div class="input-field">
          <p>Portfolio Link</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Portfolio Files</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Photocopy of School ID<span style="color: red;">*</span></p>
          <input type="file" id=""required>
        </div>
        <div class="input-field">
          <p>Photocopy of Signed Parent's Consent</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Photocopy of Valid ID in Signed Parent's Consent</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Photocopy of Endorsement Letter From School</p>
          <input type="file" id="">
        </div>
        <div class="input-field">
          <p>Photocopy of MOA/MOU</p>
          <input type="file" id="">
        </div>

      </div> <!--END OF INPUT CONTAINER-->
    </div> <!--END OF REQUIREMENTS-->

    <!--ACCOUNT SETTINGS-->
    <div id="account" class="tab-content">
    <div class="input-container">

      <div class="input-field">
        <p>Email<span style="color: red;">*</span></p>
        <input type="email" id="" placeholder="Enter Email" required>
      </div>
      <div class="input-field">
        <p>Password<span style="color: red;">*</span></p>
        <input type="password" id="" placeholder="Enter Password"required>
      </div>
      <div class="input-field">
        <p>Confirm Password<span style="color: red;">*</span></p>
        <input type="password" id="" placeholder="Confirm Password"required>
      </div>

    </div> <!--END OF INPUT CONTAINER--> 
    </div> <!--END OF ACCOUNT SETTINGS--> 

    <!--SAVE CHANGES BUTTON-->
    <button class="save" style="display:none;" id="saveButton">Save Changes</button>
    
    </div> <!--END OF MENU CONTENTS-->

</div> <!--END OF BOX-->
</div> <!--END OF BIG BOX-->
  </div> <!--END OF MAIN CONTAINER-->


  <!--SCRIPT-->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script> <!--FOR ICONS-->
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script> <!--FOR ICONS-->

  <script> // FOR SIDEBAR
    let toggle = document.querySelector('.toggle');
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');

    toggle.onclick = function()
    {
      navigation.classList.toggle('active');
      main.classList.toggle('active');
    }

    let List = document.querySelectorAll('.navigation li');
    function activeLink()
    {
      List.forEach((item) => item.classList.remove('hovered'));
      this.classList.add('hovered');
    }
    List.forEach((item) => item.addEventListener('mouseover', activeLink));
  </script> <!--END FOR SIDEBAR SCRIPT-->

  <script> // FOR MAIN MENU
    function openTab(tabName, event) 
    {
      var i, tabContent, tabButtons;

      // Hide all tab content
      tabContent = document.querySelectorAll(".tab-content");
      for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
      }

      // Show the selected tab content
      document.getElementById(tabName).style.display = "block";

      // Remove 'active-tab' class from all buttons
      tabButtons = document.querySelectorAll('.MainMenu button');
      for (i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove('active-tab');
      }

      // Add 'active-tab' class to the clicked button
      event.currentTarget.classList.add('active-tab');
    }

      // Personal Information is active by default
      document.addEventListener('DOMContentLoaded', function() 
      {
        const personalButton = document.querySelector('.MainMenu button:nth-child(1)');
        personalButton.classList.add('active-tab'); // Make the Personal Information button active
        const tabName = personalButton.getAttribute('onclick').split("'")[1];
        openTab(tabName, { currentTarget: personalButton }); // Open the Personal Information tab
      });

      // Add event listeners to all tab buttons
      const tabButtons = document.querySelectorAll('.MainMenu button');
      tabButtons.forEach(button => {
        button.addEventListener('click', function(event) {
          const tabName = this.getAttribute('onclick').split("'")[1];
          openTab(tabName, event);
        });
      });

      // Add event listeners to all pencil icons
      const pencilIcons = document.querySelectorAll('.icon ion-icon[name="pencil-sharp"]');
      pencilIcons.forEach(icon => {
        icon.addEventListener('click', function() {
          const saveButton = this.parentElement.parentElement.parentElement.querySelector('.save');
          saveButton.style.display = 'block'; // Show the save button when the pencil icon is clicked
        });
      });

      // Add event listeners to all save buttons
      const saveButtons = document.querySelectorAll('.save');
      saveButtons.forEach(button => {
        button.addEventListener('click', function() {
          this.style.display = 'none'; // Hide the save button when it's clicked
        });
      });
  </script> <!--END FOR MAINMENU SCRIPT-->


</body>
</html>



