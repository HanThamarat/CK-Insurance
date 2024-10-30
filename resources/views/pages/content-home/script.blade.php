{{-- <script>
    class CountdownTimer {
        // setup timer values
        constructor({
            selector,
            targetDate,
            backgroundColor = null,
            foregroundColor = null
        }) {
            this.selector = selector;
            this.targetDate = targetDate;
            this.backgroundColor = backgroundColor;
            this.foregroundColor = foregroundColor;

            // grab divs on frontend using supplied selector ID
            this.refs = {
                days: document.querySelector(`${this.selector} [data-value="days"]`),
                hours: document.querySelector(`${this.selector} [data-value="hours"]`),
                mins: document.querySelector(`${this.selector} [data-value="minutes"]`),
                secs: document.querySelector(`${this.selector} [data-value="seconds"]`),
            };
        }

        getTimeRemaining(endtime) {
            const total = Date.parse(endtime) - Date.parse(new Date());
            const days = Math.floor(total / (1000 * 60 * 60 * 24));
            const hours = Math.floor((total / (1000 * 60 * 60)) % 24);
            const mins = Math.floor((total / 1000 / 60) % 60);
            const secs = Math.floor((total / 1000) % 60);
            return {
                total,
                days,
                hours,
                mins,
                secs,
            };
        }

        updateTimer({
            days,
            hours,
            mins,
            secs
        }) {
            this.refs.days.textContent = days;
            this.refs.hours.textContent = hours;
            this.refs.mins.textContent = mins;
            this.refs.secs.textContent = secs;
        }

        updateColors() {
            if (this.backgroundColor != null) {
                this.refs.days.style.background = this.backgroundColor;
                this.refs.hours.style.background = this.backgroundColor;
                this.refs.mins.style.background = this.backgroundColor;
                this.refs.secs.style.background = this.backgroundColor;
            }

            if (this.foregroundColor != null) {
                this.refs.days.style.color = this.foregroundColor;
                this.refs.hours.style.color = this.foregroundColor;
                this.refs.mins.style.color = this.foregroundColor;
                this.refs.secs.style.color = this.foregroundColor;
            }
        }

        startTimer() {
            const timer = this.getTimeRemaining(this.targetDate);
            this.updateTimer(timer);
            this.updateColors();
            setInterval(() => {
                const timer = this.getTimeRemaining(this.targetDate);
                this.updateTimer(timer);
            }, 1000);
        }
    }

    // setup timer with set textual date in the future
    const timer1 = new CountdownTimer({
        selector: "#clock1",
        targetDate: new Date("September, 21 2022 18:00:00"),
    });

    // setup timer with date set in the future
    const timer2 = new CountdownTimer({
        selector: "#clock2",
        targetDate: new Date(Date.parse(new Date()) + 30 * 24 * 60 * 60 * 1000),
    });

    // setup timer with random date set in the future
    const startDate = new Date(2023, 0, 1);
    const currentDate = new Date().getTime();
    const timer3 = new CountdownTimer({
        selector: "#clock3",
        targetDate: new Date(
            startDate.getTime() + Math.random() * (currentDate - startDate.getTime())
        ),
        backgroundColor: "#d4af37",
        foregroundColor: null,
    });

    timer1.startTimer();
    timer2.startTimer();
</script> --}}



<script>
    class TimeDisplay {
        constructor({
            selector,
            backgroundColor = null,
            foregroundColor = null,
            showCurrentTime = false
        }) {
            this.selector = selector;
            this.backgroundColor = backgroundColor;
            this.foregroundColor = foregroundColor;
            this.showCurrentTime = showCurrentTime;

            // Set up Thai locale
            this.thaiMonths = [
                "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
                "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
            ];

            // Reference elements
            this.refs = {
                years: document.querySelector(`${this.selector} [data-value="years"]`),
                days: document.querySelector(`${this.selector} [data-value="days"]`),
                hours: document.querySelector(`${this.selector} [data-value="hours"]`),
                mins: document.querySelector(`${this.selector} [data-value="minutes"]`),
                secs: document.querySelector(`${this.selector} [data-value="seconds"]`),
                date: document.querySelector(`${this.selector} [data-value="date"]`)
            };
        }

        getCurrentTime() {
            const now = new Date();
            const buddhistYear = now.getFullYear() + 543;

            return {
                years: buddhistYear,
                days: now.getDate(),
                hours: now.getHours().toString().padStart(2, '0'),
                mins: now.getMinutes().toString().padStart(2, '0'),
                secs: now.getSeconds().toString().padStart(2, '0'),
                thaiDate: `${now.getDate()} ${this.thaiMonths[now.getMonth()]} ${buddhistYear}`
            };
        }

        updateDisplay(timeData) {
            if (this.refs.years) this.refs.years.textContent = timeData.years;
            if (this.refs.days) this.refs.days.textContent = timeData.days;
            if (this.refs.hours) this.refs.hours.textContent = timeData.hours;
            if (this.refs.mins) this.refs.mins.textContent = timeData.mins;
            if (this.refs.secs) this.refs.secs.textContent = timeData.secs;
            if (this.refs.date) this.refs.date.textContent = timeData.thaiDate;
        }

        updateColors() {
            const elements = [
                this.refs.years,
                this.refs.days,
                this.refs.hours,
                this.refs.mins,
                this.refs.secs,
                this.refs.date
            ];

            elements.forEach(element => {
                if (element) {
                    if (this.backgroundColor) {
                        element.style.background = this.backgroundColor;
                    }
                    if (this.foregroundColor) {
                        element.style.color = this.foregroundColor;
                    }
                }
            });
        }

        startClock() {
            // Initial update
            this.updateDisplay(this.getCurrentTime());
            this.updateColors();

            // Update every second
            setInterval(() => {
                this.updateDisplay(this.getCurrentTime());
            }, 1000);
        }
    }

    // Initialize current time display
    // เรียกใช้ TimeDisplay และเพิ่มคลาส Tailwind
    const currentTime = new TimeDisplay({
        selector: "#clock2",
        backgroundColor: "bg-orange-300", // ใช้ Tailwind class
        foregroundColor: "#ffffff"
    });




    currentTime.startClock();
</script>
