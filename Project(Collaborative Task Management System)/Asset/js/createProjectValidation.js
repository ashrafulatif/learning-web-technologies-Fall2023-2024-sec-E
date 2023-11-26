function createProjectVal() {
  let projectName = document.getElementById("projectName").value;
  let projectType = document.getElementById("projectType").value;
  let projectDetails = document.getElementById("projectDetails").value;

  //pTypeCharCheck= '!@#$%^&*()+=-[]{}|:;"\'<>,.?/~`';

  if (projectName == '' || projectType == '' || projectDetails == '') {
    alert("Null value! Have to provide all the value");
    return false;
  } else if (
    projectType.includes("!") ||
    projectType.includes("@") ||
    projectType.includes("$") ||
    projectType.includes("%") ||
    projectType.includes("#")
  ) {
    alert(" Type cannot be contain any special character");
    return false;
  } else {
    return true;
  }
}
