document.addEventListener("DOMContentLoaded", function () {
    const monthYearDisplay = document.getElementById('monthYear');
    const calendarDays = document.getElementById('calendarDays');
    const prevMonthButton = document.getElementById('prevMonth');
    const nextMonthButton = document.getElementById('nextMonth');

    let currentDate = new Date();

    let events = {
        // Example event format: 'YYYY-MM-DD': ['Event 1', 'Event 2']
        //'2024-07-01': ['Event 1'],
        //'2024-07-05': ['Event 2', 'Event 3'],
    };

    function updateCalendar() {
        calendarDays.innerHTML = '';
        
        const year = currentDate.getFullYear();
        const month = currentDate.getMonth();
        const firstDay = new Date(year, month, 0).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();
    
        monthYearDisplay.textContent = `${new Date(year, month).toLocaleString('default', { month: 'long' })} ${year}`;
    
        // Previous month's empty cells
        for (let i = 0; i < firstDay; i++) {
            calendarDays.innerHTML += '<div class="w-1/7 h-[104px] border-b border-l"></div>';
        }
    
        // Current month's days
        for (let i = 1; i <= daysInMonth; i++) {
            const dateKey = `${year}-${String(month + 1).padStart(2, '0')}-${String(i).padStart(2, '0')}`;
            const dayEvents = events[dateKey] || [];
            const eventList = dayEvents.map(event => `<div>${event}</div>`).join('');
    
            calendarDays.innerHTML += `
                <div class="w-1/7 h-[104px] border-b border-l">
                    <div class="text-center text-gray-700">${i}</div>
                    <div class="py-4 text-center text-sm text-red-600">${eventList}</div>
                </div>`;
        }
    
        // Next month's empty cells
        const totalCells = firstDay + daysInMonth;
        const nextMonthCells = (totalCells % 7) === 0 ? 0 : 7 - (totalCells % 7);
        for (let i = 0; i < nextMonthCells; i++) {
            calendarDays.innerHTML += '<div class="w-1/7 h-[104px] border-b border-l"></div>';
        }
    }

    function addEvent(date, event) {
        if (!events[date]) {
            events[date] = [];
        }
        events[date].push(event);
        updateCalendar(); // Refresh calendar to show the new event
    }
    
    // Example usage:
    addEvent('2024-02-29', 'Bahrain Grand Prix (Practice 1 & 2)');
    addEvent('2024-03-01', 'Bahrain Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-03-02', 'Bahrain Grand Prix (Race)');
    addEvent('2024-03-07', 'Saudi Arabian Grand Prix (Practice 1 & 2)');
    addEvent('2024-03-08', 'Saudi Arabian Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-03-09', 'Saudi Arabian Grand Prix (Race)');
    addEvent('2024-03-22', 'Australian Grand Prix (Practice 1 & 2)');
    addEvent('2024-03-23', 'Australian Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-03-24', 'Australian Grand Prix (Race)');
    addEvent('2024-04-05', 'Japanese Grand Prix (Practice 1 & 2)');
    addEvent('2024-04-06', 'Japanese Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-04-07', 'Japanese Grand Prix (Race)');
    addEvent('2024-04-19', 'Chinese Grand Prix (Practice 1 & Sprint Qualifying)');
    addEvent('2024-04-20', 'Chinese Grand Prix (Sprint & Race Qualifying)');
    addEvent('2024-04-21', 'Chinese Grand Prix (Race)');
    addEvent('2024-05-03', 'Miami Grand Prix (Practice 1 & 2)');
    addEvent('2024-05-04', 'Miami Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-05-05', 'Miami Grand Prix (Race)');
    addEvent('2024-05-17', 'Emilia-Romagna Grand Prix (Practice 1 & 2)');
    addEvent('2024-05-18', 'Emilia-Romagna Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-05-19', 'Emilia-Romagna Grand Prix (Race)');
    addEvent('2024-05-24', 'Monaco Grand Prix (Practice 1 & 2)');
    addEvent('2024-05-25', 'Monaco Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-05-26', 'Monaco Grand Prix (Race)');
    addEvent('2024-06-07', 'Canadian Grand Prix (Practice 1 & 2)');
    addEvent('2024-06-08', 'Canadian Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-06-09', 'Canadian Grand Prix (Race)');
    addEvent('2024-06-21', 'Spanish Grand Prix (Practice 1 & 2)');
    addEvent('2024-06-22', 'Spanish Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-06-23', 'Spanish Grand Prix (Race)');
    addEvent('2024-06-28', 'Austrian Grand Prix (Practice 1 & Sprint Qualifying)');
    addEvent('2024-06-29', 'Austrian Grand Prix (Sprint & Race Qualifying)');
    addEvent('2024-06-30', 'Austrian Grand Prix (Race)');
    addEvent('2024-07-05', 'British Grand Prix (Practice 1 & 2)');
    addEvent('2024-07-06', 'British Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-07-07', 'British Grand Prix (Race)');
    addEvent('2024-07-19', 'Hungarian Grand Prix (Practice 1 & 2)');
    addEvent('2024-07-20', 'Hungarian Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-07-21', 'Hungarian Grand Prix (Race)');
    addEvent('2024-07-26', 'Belgian Grand Prix (Practice 1 & 2)');
    addEvent('2024-07-27', 'Belgian Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-07-28', 'Belgian Grand Prix (Race)');
    addEvent('2024-08-23', 'Dutch Grand Prix (Practice 1 & 2)');
    addEvent('2024-08-24', 'Dutch Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-08-25', 'Dutch Grand Prix (Race)');
    addEvent('2024-08-30', 'Italian Grand Prix (Practice 1 & 2)');
    addEvent('2024-08-31', 'Italian Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-09-01', 'Italian Grand Prix (Race)');
    addEvent('2024-09-13', 'Azerbaijan Grand Prix (Practice 1 & 2)');
    addEvent('2024-09-14', 'Azerbaijan Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-09-15', 'Azerbaijan Grand Prix (Race)');
    addEvent('2024-09-20', 'Singapore Grand Prix (Practice 1 & 2)');
    addEvent('2024-09-21', 'Singapore Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-09-22', 'Singapore Grand Prix (Race)');
    addEvent('2024-10-18', 'United States Grand Prix (Practice 1 & Sprint Qualifying)');
    addEvent('2024-10-19', 'United States Grand Prix (Sprint & Race Qualifying)');
    addEvent('2024-10-20', 'United States Grand Prix (Race)');
    addEvent('2024-10-25', 'Mexican Grand Prix (Practice 1 & 2)');
    addEvent('2024-10-26', 'Mexican Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-10-27', 'Mexican Grand Prix (Race)');
    addEvent('2024-11-01', 'Brazilian Grand Prix (Practice 1 & Sprint Qualifying)');
    addEvent('2024-11-02', 'Brazilian Grand Prix (Sprint & Race Qualifying)');
    addEvent('2024-11-03', 'Brazilian Grand Prix (Race)');
    addEvent('2024-11-21', 'Las Vegas Grand Prix (Practice 1 & 2)');
    addEvent('2024-11-22', 'Las Vegas Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-11-23', 'Las Vegas Grand Prix (Race)');
    addEvent('2024-11-29', 'Qatar Grand Prix (Practice 1 & Sprint Qualifying)');
    addEvent('2024-11-30', 'Qatar Grand Prix (Sprint & Race Qualifying)');
    addEvent('2024-12-01', 'Qatar Grand Prix (Race)');
    addEvent('2024-12-06', 'Abu Dhabi Grand Prix (Practice 1 & 2)');
    addEvent('2024-12-07', 'Abu Dhabi Grand Prix (Practice 3 & Qualifying)');
    addEvent('2024-12-08', 'Abu Dhabi Grand Prix (Race)');
        

    prevMonthButton.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() - 1);
        updateCalendar();
    });

    nextMonthButton.addEventListener('click', () => {
        currentDate.setMonth(currentDate.getMonth() + 1);
        updateCalendar();
    });

    updateCalendar();
});