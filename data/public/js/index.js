const prevMonthButton = document.querySelector(".prevMonth");
const nextMonthButton = document.querySelector(".nextMonth");
const currentMonth = document.querySelector(".currentMonth");
const daysContainer = document.querySelector(".days");

const months = [
  "January", "February", "March", "April", "May", "June", "July",
  "August", "September", "October", "November", "December"
];

const weekdays = ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"];

const currentDate = new Date();
let currentYear = currentDate.getFullYear();
let currentMonthIndex = currentDate.getMonth();

prevMonthButton.addEventListener("click", () => {
    currentMonthIndex--;
    if (currentMonthIndex < 0) {
        currentMonthIndex = 11;
        currentYear--;
    }
    updateCalendar(currentYear, currentMonthIndex);
});

nextMonthButton.addEventListener("click", () => {
    currentMonthIndex++;
    if (currentMonthIndex > 11) {
        currentMonthIndex = 0;
        currentYear++;
    }
    updateCalendar(currentYear, currentMonthIndex);
});

function updateCalendar(year, monthIndex) {
    currentMonth.textContent = `${months[monthIndex]} ${year}`;
    daysContainer.innerHTML = "";

    const firstDayOfMonth = new Date(year, monthIndex, 1).getDay();
    const daysInMonth = new Date(year, monthIndex + 1, 0).getDate();

    for (let i = 0; i < firstDayOfMonth; i++) {
        const emptyDay = document.createElement("div");
        emptyDay.classList.add("empty");
        daysContainer.appendChild(emptyDay);
    }

    for (let i = 1; i <= daysInMonth; i++) {
        const dayElement = document.createElement("div");
        dayElement.textContent = i;
        dayElement.classList.add("day");
        daysContainer.appendChild(dayElement);
    }
}

updateCalendar(currentYear, currentMonthIndex);


  

  

  
  
  