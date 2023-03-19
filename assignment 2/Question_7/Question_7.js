/*for time in the header*/
function updateTime() {
  const now = new Date();
  const time = now.toLocaleTimeString();
  document.getElementById('live-time').innerHTML = time;
}

setInterval(updateTime, 1000);


//dog form for find dog/cat
function validateForm1() {
  var breedInput1 = document.forms["Find_a_Dog"]["Breed1"].value;
  var doesNotMatterCheckbox1 = document.forms["Find_a_Dog"]["DoesNotMatter1"];
  var dropdownAge1 = document.forms["Find_a_Dog"]["age1"];
  var dropdownGender1 = document.forms["Find_a_Dog"]["gender1"];

  if (doesNotMatterCheckbox1.checked) {
    if (dropdownAge1.value === "default") {
      alert("Please select an option from the dropdown menu.");
      event.preventDefault();
      return false;
    }
    if (dropdownGender1.value === "default") {
      alert("Please select an option from the dropdown menu.");
      event.preventDefault();
      return false;
    }
  }
  if (!doesNotMatterCheckbox1.checked && breedInput1 === "") {
    alert("Please input a breed");
    event.preventDefault();
    return false;
  }
  if (dropdownAge1.value === "default") {
    alert("Please select an option from the dropdown menu.");
    event.preventDefault();
    return false;
  }
  if (dropdownGender1.value === "default") {
    alert("Please select an option from the dropdown menu.");
    event.preventDefault();
    return false;
  }

  return true;
}

//cat form for find dog/cat
function validateForm2() {
  var breedInput2 = document.forms["Find_a_Cat"]["Breed2"].value;
  var doesNotMatterCheckbox2 = document.forms["Find_a_Cat"]["DoesNotMatter2"];
  var dropdownAge2 = document.forms["Find_a_Cat"]["age2"];
  var dropdownGender2 = document.forms["Find_a_Cat"]["gender2"];

  if (doesNotMatterCheckbox2.checked) {
    if (dropdownAge2.value === "default") {
      alert("Please select an option from the dropdown menu.");
      event.preventDefault();
      return false;
    }
    if (dropdownGender2.value === "default") {
      alert("Please select an option from the dropdown menu.");
      event.preventDefault();
      return false;
    }
  }
  if (!doesNotMatterCheckbox2.checked && breedInput2 === "") {
    alert("Please input a breed");
    event.preventDefault();
    return false;
  }
  if (dropdownAge2.value === "default") {
    alert("Please select an option from the dropdown menu.");
    event.preventDefault();
    return false;
  }
  if (dropdownGender2.value === "default") {
    alert("Please select an option from the dropdown menu.");
    event.preventDefault();
    return false;
  }

  return true;
}



