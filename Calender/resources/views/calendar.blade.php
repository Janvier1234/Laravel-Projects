<!-- resources/views/calendar.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
    <style>
        /* Add your CSS styling here */
        /* Feel free to customize the appearance of the calendar */
        /* For simplicity, we'll just provide a basic layout */
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
        }

        .day {
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
        }

        .header {
            font-weight: bold;
            background-color: #f2f2f2;
        }

    </style>
</head>
<body>
    <h2>Calendar for {{ $firstDayOfMonth->format('F Y') }}</h2>
    <div class="calendar">
        <div class="header">Sun</div>
        <div class="header">Mon</div>
        <div class="header">Tue</div>
        <div class="header">Wed</div>
        <div class="header">Thu</div>
        <div class="header">Fri</div>
        <div class="header">Sat</div>

        @for ($day = 1; $day <= $daysInMonth; $day++)
            @php
                $currentDate = \Carbon\Carbon::create($year, $month, $day);
                $currentDayOfWeek = $currentDate->dayOfWeek;
            @endphp
            @if ($day === 1)
                @for ($i = 0; $i < $currentDayOfWeek; $i++)
                    <div class="day"></div>
                @endfor
            @endif
            <div class="day">{{ $day }}</div>
            @if ($currentDayOfWeek === 6)
                <br>
            @endif
        @endfor
    </div>
</body>
</html>
