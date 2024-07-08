"use strict";

const departments = {
  computerScience: [
    "سیستم های معلوماتی",
    "تکنالوژی معلوماتی",
    "انجنیری نرم افزار",
  ],
  finance: [],
  arts: [],
  engineering: ["سیول", "برق", "میخانیک"],
  agriculture: [],
  canon: [],
  managementAndPolicy: [],
  languageAndLiterature: [],
  pharmacy: [],
  veterinary: [],
  naturalScience: [],
  socialScience: [],
  psychology: [],
};

function updateItems() {
  const faculty = document.getElementById("faculty").value;
  const department = document.getElementById("department");

  department.innerHTML = "<option disabled selected>دیپارتمنت</option>";

  if (faculty) {
    department.disabled = false;
    if (departments[faculty]) {
      departments[faculty].forEach(function (departement) {
        const option = document.createElement("option");
        option.value = departement.toLowerCase();
        option.text = departement;
        department.appendChild(option);
      });
    }
  } else {
    department.disabled = true;
  }

  // if (faculty && departments[faculty]) {
  //   departments[faculty].forEach(function (departement) {
  //     const option = document.createElement("option");
  //     option.value = departement.toLowerCase();
  //     option.text = departement;
  //     department.appendChild(option);
  //   });
  // }
}

const semesters = {
  1: ["اول", "دوم"],
  2: ["سوم", "چهارم"],
  3: ["پنجم", "ششم"],
  4: ["هفتم", "هشتم"],
};

function updateSemesters() {
  const year = document.getElementById("year").value;
  const semesterr = document.getElementById("semester");

  semesterr.innerHTML = "";

  if (year) {
    semesterr.disabled = false;
    if (semesters[year]) {
      semesters[year].forEach(function (semester) {
        const option = document.createElement("option");
        option.value = semester.toLowerCase();
        option.text = semester;
        semesterr.appendChild(option);
      });
    }
  } else {
    semesterr.disabled = true;
  }
}
