function validateForm() {
    var x = document.forms["myForm"]["leaveType"].value;
    var startDate = document.getElementById("StartDate").value;
    var endDate = document.getElementById("EndDate").value;
if(x== "" ){
  alert("Please select type of leave");
return false;
}
/*if ( valueDate== null || valueDate== '')
{
    alert('Date is empty');
    return false;
}

if(startDate=="" || startDate==null){
  alert("Start bate is Empty");
return false;
}

if(endDate=='' || endDate==null){
  alert("End Date is empty");
return false;
}
    */

    if ((Date.parse(startDate) > Date.parse(endDate))) {
        alert("End date should be greater than Start date");

        
return false;
    }



    //var ExpiryDate = document.getElementById(' StartDate').value;
   /* if (x == "") {
      alert("leave type must be filled out");
      return false;
    }*/
   
    
  
   
}