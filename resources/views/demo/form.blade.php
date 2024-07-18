<!--Ticket Task Form-->
<!Doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ticket Task Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

 
  </head>
  <body> 
    
<!--Start of the Forms-->

<form id="survey-form" action="{{ route('submit.form') }}" method="post">
   <div>
        <label id="number-label">
            Employee ID <span>*</span>
        </label>
        <br>
        <label for="number"> 
            <input type="number" id="number" min="0" max="5000" placeholder="0"/>
        </label>
   </div> 
  <div>
    <label id="days-label">
        Number of Rendered Days <span>*</span>
    </label>
    <br>
    <label for="days">
    <input type="text" id="days" placeholder="If Oreintation, It's Day 0" required>
    </label>
</div>    
  <div>
        <div class="row">
            <div class="col-sm-4">
                <label id="name-label">
                    First Name <span>*</span>
                </label>
                <br>
                <label for="name"> 
                <input type="text" id="name" placeholder="" required>
                </label>
            </div>
            <div class="col-sm-4">
                <label id="name-label">
                    Middle Name
                </label>
                <br>
                <label for="name"> 
                <input type="text" id="name" placeholder="">
                </label>
            </div>
            <div class="col-sm-4">
                <label id="name-label">
                    Last Name <span>*</span>
                </label>
                <br>
                <label for="name"> 
                <input type="text" id="name" placeholder="" required>
                </label>
            </div>
        </div>
  </div>
  <div>
        <label id="email-label">
            Email <span>*</span>
        </label>
        <br>
        <label for="email">
            <input type="email" id="email" placeholder="Enter Email..." required>
        </label>
  </div>
  <hr>
  <div>
      <label id="Employment">
          Type of Employment Program <span>*</span> 
      </label>
      <br>
      <label>
          <input type="radio" name="employment-status" value="K12-Internship"> K12 Work Immersion
      </label>
      <br>
      <label>
          <input type="radio" name="employment-status" value="College-Internship"> College Internship
      </label>
      <br>
      <label>
          <input type="radio" name="employment-status" value="Apprenticeship"> Graduate Apprenticeship Traineeship
      </label>
      <br>
      <label>
          <input type="radio" name="employment-status" value="PT-FT-Employment"> Part Time/Full Time Employment
      </label>   
  </div>
  <hr>
  <div>
        <label id="dropdown-list">
            Type of Department <span>*</span>
        </label>
        <br>
            <select id="dropdown" onchange="EnableHidden(this)">
                <option value="">-Select-</option>
                <option value="CS">Client Services</option>
                <option value="Mngmt">Management</option>
                <option value="DS">Digital Services</option>
            </select>
    </div>
    <div class="hidden" id="CS">
        <label id="dropdown-list">
            Type of Client Service Team <span>*</span>
        </label>
        <br>
            <select id="dropdown-CS" class="Client-services">
                <option value="">-Select-</option>
                <option value="Acc & Proj Services">Account and Project Services</option>
            </select>
    </div>
    <div class="hidden" id="Mngmt">
        <label id="dropdown-list">
            Type of Management Team <span>*</span>
        </label>
        <br>
            <select id="dropdown-Management" class="Management">
                <option value="">-Select-</option>
                <option value="Talents">Talent, HR and Culture Partnership Services</option>
                <option value="Finance">Finance, Accounting and Investment Partnership Services</option>
            </select>
    </div>
    <div class="hidden" id="DS">
        <label id="dropdown-list">
            Type of Department <span>*</span>
        </label>
        <br>
            <select id="dropdown-DS" class="Digital-services">
                <option value="">-Select-</option>
                <option value="Multimedia">Creative Multimedia</option>
                <option value="Wordpress Webdev">Full Stack Wordpress Developer</option>
                <option value="Laravel Dev">Full Stack Laravel Developer</option>
                <option value="Bootstrap Dev">Full Stack Bootstrap Developer</option>
            </select>
    </div>
    <div>
        <label id="dropdown-list">
            Type of Position <span>*</span>
        </label>
        <br>
            <select id="dropdown">
                <option value="">-Select-</option>
                <option value="TL">Team Leader</option>
                <option value="ATL">Assitant Team Leader</option>
                <option value="JATL">Junior Assitant Team Leader</option>
                <option value="TM">Team Member</option>
        </select>
    </div>
  <hr>
  <div>
        <label for="task">
            What is your To Do Task/s for this Shift? <span>*</span>
        </label>
  <br>
  <textarea id="task"></textarea>
  </div>
  <input type="submit" id="submit" value="SUBMIT FORM">
</form>

<!--End of Forms-->

    <!--JS Script-->
    <script src="{{ asset('js/script.js') }}"></script>
    <!--Bootstrap--> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  </body>
</html>

