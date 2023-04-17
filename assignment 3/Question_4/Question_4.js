/*for time in the header*/
function updateTime() {
  const now = new Date();
  const time = now.toLocaleTimeString();
  document.getElementById('live-time').innerHTML = time;
}

setInterval(updateTime, 1000);


function validateCheckboxes() {
  var checkboxes = document.querySelectorAll('input[type="checkbox"]');
  var checkedOne = Array.prototype.slice.call(checkboxes).some(x => x.checked);

  if (!checkedOne) {
    alert("Please select at least one checkbox.");
  }
}


function footer() {
  alert("Dear users,\n\nWe take the security and privacy of your personal information extremely seriously at HomeFinder. We want to reassure you that we would never sell your information or use it improperly in any way. We recognise how crucial it is to maintain the privacy of your personal information and will always take precautions to keep it secure. Strict security controls are in place on our website to guard  against unauthorised access to your information, and we'll never share or sell it to anybody.\n\nFurthermore, we value the accuracy and timeliness of  the data you give on our platform as a pet owner. Though we acknowledge that mistakes do occur, we want to make sure that any inaccurate information is quickly updated.\n\nPlease contact us if you think  any information on our site is inaccurate, and we will make the appropriate corrections. We appreciate your confidence in HomeFinder. In order to meet all of your pet-related demands, weare dedicated to giving you a safe and secure platform.\n");
}