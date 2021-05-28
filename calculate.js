window.onload = () => {
    let button = document.querySelector("#bmi-btn");
    let button2 = document.querySelector("#bmr-btn");

    button.addEventListener("click", BMI);
    button2.addEventListener("click", BMR);
};
// Function for calculating BMI
function BMI(){
  let weight = parseInt(document.querySelector("#weight").value);
  let height = parseInt(document.querySelector("#height").value);
  let result = document.querySelector("#result");
  if (height === "" || isNaN(height) || height<=0 || height>270){
      result.innerHTML = "Invalid Height!";
  }
  else if (weight === "" || isNaN(weight) || weight<=0 || weight>500){
      result.innerHTML = "Invalid Weight!";
  }
  else{
    let bmi = (weight / ((height * height) / 10000)).toFixed(2);
    if (bmi < 18.6){
      result.innerHTML =`Under Weight : <span>${bmi}</span>`;
    }
    else if (bmi >= 18.6 && bmi < 24.9) {
      result.innerHTML = `Normal : <span>${bmi}</span>`;
    }
    else{
      result.innerHTML =`Over Weight : <span>${bmi}</span>`;
    }
  }
  document.querySelector("#weight").value = "";
  document.querySelector("#height").value = "";
}

// Function for calculating BMR
function BMR(){
  let bmr;
  let weight2 = parseFloat(document.querySelector("#weight2").value);
  let height2 = parseFloat(document.querySelector("#height2").value);
  let age = parseFloat(document.querySelector("#age").value);
  let gender = $("input[type='radio'][name='gender']:checked").value;
  let result2 = document.querySelector("#result2");
  if (height2 === "" || isNaN(height2) || height2<=0 || height2>270){
      result2.innerHTML = "Invalid Height!";
  }
  else if (weight2 === "" || isNaN(weight2) || weight2<0 || weight2>500){
      result2.innerHTML = "Invalid Weight!";
  }
  else if (age === "" || isNaN(age) || age<=0) {
      result2.innerHTML = "Invalid Age!";
  }
  else {
    if (gender == "male") {
      bmr = parseInt(66.5 + (13.75 * weight2) + (5.003 * height2) - (6.755 * age));
      result2.innerHTML =`Your daily caloric intake is : <span>${bmr}</span>`;
    }
    else {
      bmr = parseInt(655.1 + (9.563 * weight2) + (1.850 * height2) - (4.676 * age));
      result2.innerHTML =`Your daily caloric intake is : <span>${bmr}</span>`;
    }
  }
  document.querySelector("#weight2").value = "";
  document.querySelector("#height2").value = "";
  document.querySelector("#age").value = "";
}
