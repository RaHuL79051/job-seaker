const container = document.querySelectorAll(".BigContainer");
const welcomeHeading = document.querySelector('.welcomeHeading')

const mainContainer = document.querySelector('.Maincontainer')

const employeeLoginForm = document.querySelector('.EmployeeLogin')
const companyLoginForm = document.querySelector('.CompanyLogin')

container.forEach((item) => {
  item.addEventListener('click', (i) => {
    var classList = i.target.className.split(' ')
    if (classList.includes('Employee')) {
      welcomeHeading.style.display = "none";
      mainContainer.style.display = 'none';
      employeeLoginForm.style.display = "block";
    }
    if (classList.includes('Company')) {
      welcomeHeading.style.display = "none";
      mainContainer.style.display = 'none';
      companyLoginForm.style.display = "block";
    }
  })
})

function refreshPage() {
  window.location.reload();
}
