//-------------------------------------------------------------
// Added By    : MOHAMMED ENAD
// Added On    : 7 Feb 2023
// Describtion : Clear Form
//-------------------------------------------------------------

function clearForm() {
  document.getElementById("myForm").reset();
}

//-------------------------------------------------------------
// Added By    : MOHAMMED ENAD
// Added On    : 29 March 2023
// Describtion : Validation registertest form
//-------------------------------------------------------------

function validateRegistration() {
  const regFirstNameInput = document.getElementById("typeFirstName");
  const regLastNameInput = document.getElementById("typeLastName");
  const regEmailInput = document.getElementById("typeRegEmail");
  const regAddressInput = document.getElementById("typeAddress");
  const regGenderSelect = document.getElementById("typeGenderSelect");
  const regMobileInput = document.getElementById("typeMobile");
  const regPasswordInput = document.getElementById("typeRegPassword");
  const regConfirmPasswordInput = document.getElementById(
    "typeRegConfirmPassword"
  );

  const regFirstNameLable = document.getElementById("lblFirstName");
  const regLastNameLable = document.getElementById("lblLastName");
  const regEmailLable = document.getElementById("lblRegEmail");
  const regAddressLable = document.getElementById("lblAddress");
  const regGenderLable = document.getElementById("lblGender");
  const regMobileLabel = document.getElementById("lblMobile");
  const regPasswordLabel = document.getElementById("lblRegPassword");
  const regConfirmPasswordLabel = document.getElementById(
    "lblRegConfirmPassword"
  );

  const regNamePattern = /^[a-zA-Z]{3,25}$/; // Regex name contains only letters with min 3 and max 25
  const regEmailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //
  const regPasswordPattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,}$/;
  // const regAddressPattern = /^(\d{1,}) [a-zA-Z0-9\s]{5,}$/;
  const regAddressPattern = /^\d+\s[A-Za-z]+\s[A-Za-z]+(\s[A-Za-z]+)?,\s[A-Za-z]+\s[A-Za-z]+\s[A-Za-z]\d[A-Za-z]\s?\d[A-Za-z]\d$/i;
  const regMobilePattern = /^\(\d{3}\)\d{3}-\d{4}$/;

  function regValidateInput(input, label, pattern) {
    if (!input.value) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else if (input.type === "select-one" && input.selectedIndex === 0) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else if (pattern && !input.value.match(pattern)) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else {
      label.style.display = "none";
      input.classList.remove("error");
      return true;
    }
  }

  function regValidateConfirmPassword() {
    if (!regConfirmPasswordInput.value) {
      regConfirmPasswordLabel.style.display = "block";
      regConfirmPasswordInput.classList.add("error");
      regConfirmPasswordInput.focus();
      return false;
    } else if (regConfirmPasswordInput.value !== regPasswordInput.value) {
      regConfirmPasswordLabel.style.display = "block";
      regConfirmPasswordInput.classList.add("error");
      regConfirmPasswordInput.focus();
      return false;
    } else {
      regConfirmPasswordLabel.style.display = "none";
      regConfirmPasswordInput.classList.remove("error");
      return true;
    }
  }

  const regPasswordToggleBtn = document.getElementById("toggleRegPassword");
  const regConfirmPasswordToggleBtn = document.getElementById(
    "toggleRegConfirmPassword"
  );

  regPasswordToggleBtn.addEventListener("click", () => {
    if (regPasswordInput.type === "password") {
      regPasswordInput.type = "text";
      regPasswordToggleBtn.textContent = "Hide";
    } else {
      regPasswordInput.type = "password";
      regPasswordToggleBtn.textContent = "Show";
    }
  });

  regConfirmPasswordToggleBtn.addEventListener("click", () => {
    if (regConfirmPasswordInput.type === "password") {
      regConfirmPasswordInput.type = "text";
      regConfirmPasswordToggleBtn.textContent = "Hide";
    } else {
      regConfirmPasswordInput.type = "password";
      regConfirmPasswordToggleBtn.textContent = "Show";
    }
  });

  // validate First Name
  regFirstNameInput.oninput = () =>
    regValidateInput(regFirstNameInput, regFirstNameLable, regNamePattern);
  // validate Last Name
  regLastNameInput.oninput = () =>
    regValidateInput(regLastNameInput, regLastNameLable, regNamePattern);
  // validate Email Regex
  regEmailInput.oninput = () =>
    regValidateInput(regEmailInput, regEmailLable, regEmailPattern);
  // validate Address Regex
  regAddressInput.oninput = () =>
    regValidateInput(regAddressInput, regAddressLable, regAddressPattern);
  // validate Gender
  regGenderSelect.oninput = () =>
    regValidateInput(regGenderSelect, regGenderLable);
  // validate Mobile Regex
  regMobileInput.oninput = () =>
    regValidateInput(regMobileInput, regMobileLabel, regMobilePattern);
  // validate Password Regex
  regPasswordInput.oninput = () =>
    regValidateInput(regPasswordInput, regPasswordLabel, regPasswordPattern);
  // validate Confirm Password
  regConfirmPasswordInput.oninput = regValidateConfirmPassword;

  return (
    regValidateInput(regFirstNameInput, regFirstNameLable, regNamePattern) &&
    regValidateInput(regLastNameInput, regLastNameLable, regNamePattern) &&
    regValidateInput(regEmailInput, regEmailLable, regEmailPattern) &&
    regValidateInput(regAddressInput, regAddressLable, regAddressPattern) &&
    regValidateInput(regGenderSelect, regGenderLable) &&
    regValidateInput(regMobileInput, regMobileLabel, regMobilePattern) &&
    regValidateInput(regPasswordInput, regPasswordLabel, regPasswordPattern) &&
    regValidateConfirmPassword()
  );
}

//-------------------------------------------------------------
// Added By    : MOHAMMED ENAD
// Added On    : 28 March 2023
// Describtion : Validation login form
//-------------------------------------------------------------
function validateEmailPassword() {
  const emailInput = document.getElementById("typeEmail");
  const passwordInput = document.getElementById("typePassword");
  const emailLabel = document.getElementById("lblEmail");
  const passwordLabel = document.getElementById("lblPassword");
  const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

  function validateInput(input, label, pattern) {
    if (!input.value) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else if (!input.value.match(pattern)) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else {
      label.style.display = "none";
      input.classList.remove("error");
      return true;
    }
  }

  emailInput.oninput = () =>
    validateInput(emailInput, emailLabel, emailPattern);
  passwordInput.oninput = () => validateInput(passwordInput, passwordLabel);

  return (
    validateInput(emailInput, emailLabel, emailPattern) &&
    validateInput(passwordInput, passwordLabel)
  );
}


//-------------------------------------------------------------
// Added By    : MOHAMMED ENAD
// Added On    : 30 March 2023
// Describtion : Validation registertest form
//-------------------------------------------------------------

function validateAdmin() {
  const regFirstNameInput = document.getElementById("typeFirstName");
  const regLastNameInput = document.getElementById("typeLastName");
  const regEmailInput = document.getElementById("typeRegEmail");
  const regRoleSelect = document.getElementById("typeRoleSelect");
  const regBranchInput = document.getElementById("typeRegBranch");
  const regPasswordInput = document.getElementById("typeRegPassword");
  const regConfirmPasswordInput = document.getElementById(
    "typeRegConfirmPassword"
  );

  const regFirstNameLable = document.getElementById("lblFirstName");
  const regLastNameLable = document.getElementById("lblLastName");
  const regEmailLable = document.getElementById("lblRegEmail");
  const regRoleLable = document.getElementById("lblRole");
  const regBranchLable = document.getElementById("lblRegBranch");
  const regPasswordLabel = document.getElementById("lblRegPassword");
  const regConfirmPasswordLabel = document.getElementById(
    "lblRegConfirmPassword"
  );

  const regNamePattern = /^[a-zA-Z]{3,25}$/; // Regex name contains only letters with min 3 and max 25
  const regEmailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/; //
  const regBranchPattern = /^SW\d{4}$/; // match SW0001 for example (SW - Smart Wallet)
  const regPasswordPattern =
    /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,}$/;

  function regValidateInput(input, label, pattern) {
    if (!input.value) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else if (input.type === "select-one" && input.selectedIndex === 0) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else if (pattern && !input.value.match(pattern)) {
      label.style.display = "block";
      input.classList.add("error");
      input.focus();
      return false;
    } else {
      label.style.display = "none";
      input.classList.remove("error");
      return true;
    }
  }

  function regValidateConfirmPassword() {
    if (!regConfirmPasswordInput.value) {
      regConfirmPasswordLabel.style.display = "block";
      regConfirmPasswordInput.classList.add("error");
      regConfirmPasswordInput.focus();
      return false;
    } else if (regConfirmPasswordInput.value !== regPasswordInput.value) {
      regConfirmPasswordLabel.style.display = "block";
      regConfirmPasswordInput.classList.add("error");
      regConfirmPasswordInput.focus();
      return false;
    } else {
      regConfirmPasswordLabel.style.display = "none";
      regConfirmPasswordInput.classList.remove("error");
      return true;
    }
  }

  const regPasswordToggleBtn = document.getElementById("toggleRegPassword");
  const regConfirmPasswordToggleBtn = document.getElementById(
    "toggleRegConfirmPassword"
  );

  regPasswordToggleBtn.addEventListener("click", () => {
    if (regPasswordInput.type === "password") {
      regPasswordInput.type = "text";
      regPasswordToggleBtn.textContent = "Hide";
    } else {
      regPasswordInput.type = "password";
      regPasswordToggleBtn.textContent = "Show";
    }
  });

  regConfirmPasswordToggleBtn.addEventListener("click", () => {
    if (regConfirmPasswordInput.type === "password") {
      regConfirmPasswordInput.type = "text";
      regConfirmPasswordToggleBtn.textContent = "Hide";
    } else {
      regConfirmPasswordInput.type = "password";
      regConfirmPasswordToggleBtn.textContent = "Show";
    }
  });

  // validate First Name
  regFirstNameInput.oninput = () =>
    regValidateInput(regFirstNameInput, regFirstNameLable, regNamePattern);
  // validate Last Name
  regLastNameInput.oninput = () =>
    regValidateInput(regLastNameInput, regLastNameLable, regNamePattern);
  // validate Email Regex
  regEmailInput.oninput = () =>
    regValidateInput(regEmailInput, regEmailLable, regEmailPattern);
  // validate Role
  regRoleSelect.oninput = () =>
    regValidateInput(regRoleSelect, regRoleLable);
  regBranchInput.oninput = () =>
    regValidateInput(regBranchInput, regBranchLable, regBranchPattern);
  // validate Password Regex
  regPasswordInput.oninput = () =>
    regValidateInput(regPasswordInput, regPasswordLabel, regPasswordPattern);
  // validate Confirm Password
  regConfirmPasswordInput.oninput = regValidateConfirmPassword;

  return (
    regValidateInput(regFirstNameInput, regFirstNameLable, regNamePattern) &&
    regValidateInput(regLastNameInput, regLastNameLable, regNamePattern) &&
    regValidateInput(regEmailInput, regEmailLable, regEmailPattern) &&
    regValidateInput(regRoleSelect, regRoleLable) &&
    regValidateInput(regBranchInput, regBranchLable, regBranchPattern) &&
    regValidateInput(regPasswordInput, regPasswordLabel, regPasswordPattern) &&
    regValidateConfirmPassword()
  );
}
