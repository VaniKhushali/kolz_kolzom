<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="{{ static_asset('assets/img1/logo.jpg') }}"type="image/x-icon">
    <title>Kolzom || Seller</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" />
<!-- google font -->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ static_asset('assets/css/style.css') }}">

    
</head>
<body>
   

<nav class="bg-white dark:bg-gray-900 fixed   w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="#" class="flex items-center">
      <img src="#" class="h-8 mr-3" alt="">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"><img class="h-auto" src="{{ static_asset('assets/img1/logo.jpg') }}" alt="image description" style="width:200px;"></span>
  </a>
  <div class="flex md:order-2">
      
     
  </div>
 
  </div>
</nav><br /><br /><br/>
    <form id="signUpForm" class="p-12 shadow-md rounded-2xl  bg-white mx-auto border-solid border-2 border-gray-100 mb-8" action="#!">
        <!-- start step indicators -->
        <div class="form-header flex gap-3 mb-4 text-xs text-center">
            <span class="stepIndicator flex-1 pb-8 relative">Add Profile</span>
            <span class="stepIndicator flex-1 pb-8 relative">Add Address</span>
            <span class="stepIndicator flex-1 pb-8 relative">Verify ID & Bank</span>
          
        </div> 
        <!-- step One -->
        <div class="step" style="height:500px;">
        <section class="flex mt-50" style="padding:40px;">
        <div class="w-1/2 p-8" style="color:black;">
  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-black">Hey Seller,</span><br />
  <span class="self-center text-2xl font-semibold  dark:text-white">How about we get to know you better?</span><br /><br /><br />
    
      
      <input class="w-full px-2 py-3 rounded-md font-medium" style="" type="text" name="username" placeholder="Your Store Name" required oninput="this.className = 'w-full px-2 py-3 rounded-md font-medium'"><br /><br />
  
      <input class="w-full px-2 py-3 rounded-md font-medium " type="email" name="email" placeholder="Email Address" required oninput="this.className = 'w-full px-2 py-3 rounded-md font-medium'"><br /><br />
      
      <input class="w-full px-2 py-3 rounded-md font-medium " type="text" name="password" placeholder="Mobile Number" required oninput="this.className = 'w-full px-2 py-3 rounded-md font-medium'">
    
     
    
  </div>

  <div class="w-1/2 p-8 ">
  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Important Tips</span>
<p class="text-gray-500 dark:text-gray-500 pt-8 " style="font-size:18px;color:#000000e6;font-family: Arial, sans-serif;">Track  work  across  the  enterprise  through  an  open,  collaborative  platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p><br />

    <iframe class="w-full aspect-video hover:aspect-square" src="https://cloud.video.taobao.com/play/u/null/p/1/e/6/t/1/421926168002.mp4?SBizCode=xiaoer" style="height:300px;"></iframe>

  </div>
  </section>
    </div>

    <div class="step">
        <section class="flex mt-50" style="padding:40px;">
        <div class="w-1/2 p-8">
  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white" style="color:black;">Address Information</span><br /><br /><br />
      <label class=" tracking-wide text-gray-500 text-lg ml-2  "style="color:black;" for="register_username">Store Address</label>
      <input type="text" id="disabled-input" aria-label="disabled input" class="w-full px-2 py-3 rounded-md font-medium bg-gray-200" style="color:gray;" value="Nepal" disabled oninput="this.className = 'w-full px-2 py-3 rounded-md font-medium text-gay-300 bg-gray-200'"><br /><br />
<select id="countries" class="w-full px-2 py-3 rounded-md font-medium" style="color:gray;">
  <option selected>State</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select><br /><br />
          <select id="countries" class="w-full px-2 py-3 rounded-md font-medium" style="color:gray;">
  <option selected>Area</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select><br /><br />
          <select id="countries" class="w-full px-2 py-3 rounded-md font-medium" style="color:gray;">
  <option selected>District</option>
  <option value="US">United States</option>
  <option value="CA">Canada</option>
  <option value="FR">France</option>
  <option value="DE">Germany</option>
</select><br /><br />
           
      
      <label class=" tracking-wide text-gray-500 text-lg  ml-2 " style="color:black;" for="register_username">Enter The Full Address</label>
      <textarea id="message" rows="4" class="w-full px-2 py-3 rounded-md font-medium" placeholder="Enter Address Hear..." required oninput="this.className = 'w-full px-2 py-3 rounded-md font-medium'"></textarea><br/><br />
      
<label class="relative inline-flex items-center mr-5 cursor-pointer">
  <input type="checkbox" value="" class="sr-only peer" checked >
  <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
  <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Return Address</span>
</label>
    
  </div>

  <div class="w-1/2 p-8 ">
  <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Important Tips</span>
<p class="text-gray-500 dark:text-gray-400 pt-8 " style="font-size:18px;color:#000000e6;font-family: Arial, sans-serif;">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p><br />

    <iframe class="w-full aspect-video hover:aspect-square"  src="https://cloud.video.taobao.com/play/u/null/p/1/e/6/t/1/421926168002.mp4?SBizCode=xiaoer" style="height:300px;"></iframe>

  </div>
  </section>
    </div>
        
    
        <!-- step Three -->
        <div class="step">
        <section class="flex mt-50" style="padding:40px;">

<div class="w-1/2 p-8">

<span class="self-center text-2xl font-semibold  dark:text-white">ID & Bank Account Information</span><br/>
<span class="text-sm text-gray-500 hover:text-blue-800  cursor-pointer" style="color:gray;">Let us know about your bank information, don,t worry we,ll keep this infomation confidential</span><br />
    <label class=" tracking-wide text-gray-500 text-sm font-bold  " style="color:gray;" for="register_username">Upload Verify Business Documents</label><br /><br />
    
   
<div class="flex items-left  " style="width:100%;" >
  <label for="dropzone-file" class="flex flex-col items-left w-full h-40 border-2 border-red-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
      <div class="flex flex-col items-center justify-center pt-5 pb-6">
          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
          </svg>
          <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold"> Click or drag file hear </span></p>
          
      </div>
      <input id="dropzone-file" type="file" class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200 hidden" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
  </label>
  
</div> 
<br /><br />
    

     

    <input class="w-full px-2 py-3 rounded-md font-medium" type="text" name="brn" placeholder="Business registration Number" required oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'"><br /><br />
    <label class=" tracking-wide text-gray-500 text-lg  " for="register_username" style="color:gray;">Verify Bank Account</label><br />
    <span class="text-sm text-gray-500 hover:text-blue-800  cursor-pointer " style="color:gray;">Upload the front page for Bankbook/Bank Statement/Cheque Copy/Mobile Banking Screenshot</span><br /><br />
    <div class="flex items-left  " style="width:100%;" >
  <label for="dropzone-file" class="flex flex-col items-left w-full h-40 border-2 border-red-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
      <div class="flex flex-col items-center justify-center pt-5 pb-6">
          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
          </svg>
          <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold"> Click or drag file hear </span></p>
          
      </div>
      <input id="dropzone-file" type="file" class="w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200 hidden" oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'" />
  </label>
</div><br />
<input class="w-full px-2 py-3 rounded-md font-medium" type="text" name="acc_name" placeholder="Account Holder Name" required oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'"><br /><br />
<input class="w-full px-2 py-3 rounded-md font-medium" type="text" name="bank_name" placeholder="Bank Name" required oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'"><br /><br />
<input class="w-full px-2 py-3 rounded-md font-medium" type="text" name="branch_code" placeholder="Bank Code" required oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'"><br /><br />
<input class="w-full px-2 py-3 rounded-md font-medium" type="text" name="branch_name" placeholder="Branch Name" required oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'"><br /><br />

<input class="w-full px-2 py-3 rounded-md font-medium" type="text" name="branch_name" placeholder="Account Number" required oninput="this.className = 'w-full px-4 py-3 rounded-md text-gray-700 font-medium border-solid border-2 border-gray-200'">
</div>

<div class="w-1/2 p-8 ">
<span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Important Tips</span>
<p class="text-gray-500 dark:text-gray-400 pt-8 " style="font-size:18px;color:#000000e6;font-family: Arial, sans-serif;">Track work across the enterprise through an open, collaborative platform. Link issues across Jira and ingest data from other software development tools, so your IT support and operations teams have richer contextual information to rapidly respond to requests, incidents, and changes.</p>< br /><be />

  <iframe class="w-full aspect-video hover:aspect-square" src="https://cloud.video.taobao.com/play/u/null/p/1/e/6/t/1/421926168002.mp4?SBizCode=xiaoer" style="height:300px;"></iframe>

</div>
</section>
        </div>
    
        <!-- step three -->
      
</div>
        <div class="form-footer flex gap-3" style="width:500px;margin-left:80px;">
            <button type="button" id="prevBtn" class="flex-1 focus:outline-none border-5 border-gray-300 rounded-lg shadow-sm text-center text-gray-700 bg-gray-400 hover:bg-gray-300 shadow-blue-500/50 shadow-lg text-lg" style="font-family: inherit; background-color:#EBECF0;font-size:27px;" onclick="nextPrev(-1)">Previous</button>
            <button type="button" id="nextBtn" class="flex-1 border border-transparent p-3 focus:outline-none rounded-md text-center text-white bg-indigo-600 hover:bg-indigo-700 text-2lg" style="background-color:#0372FF;font-size:30px;" onclick="nextPrev(1)">Next</button>
        </div>
        <!-- end previous / next buttons -->
    </form>


<!-- tailwind css -->

<script>
    var currentTab = 0; 
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
          } else {
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("signUpForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          y = x[currentTab].getElementsByTagName("textarea");
          y = x[currentTab].getElementsByTagName("select");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
</script>
</body>
</html>