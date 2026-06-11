(function () {
    document.addEventListener('DOMContentLoaded', function () {
        const config = window.AppointmentBookingConfig || {};
        const listPanel = document.getElementById('appointment-list-panel');
        const schedulePanel = document.getElementById('appointment-schedule-panel');
        const infoPanel = document.getElementById('appointment-info-panel');
        const calendarGrid = document.getElementById('appointment-calendar-grid');
        const calendarMonthLabel = document.getElementById('appointment-calendar-month');
        const dateLabel = document.getElementById('appointment-selected-date-label');
        const timeMenu = document.getElementById('appointment-time-menu');
        const form = document.getElementById('appointment-booking-form');
        const successBox = document.getElementById('appointment-success');
        const timesAddedBox = document.getElementById('appointment-times-added');
        const timesAddedList = document.getElementById('appointment-times-added-list');
        const scheduleContinueWrap = document.getElementById('appointment-schedule-continue-wrap');
        const scheduleContinueBtn = document.getElementById('appointment-schedule-continue');
        const modalBackdrop = document.getElementById('appointment-modal-backdrop');
        const modalRecurringSetup = document.getElementById('appointment-modal-recurring-setup');
        const modalRecurringPreview = document.getElementById('appointment-modal-recurring-preview');
        const recurringSetupStart = document.getElementById('appointment-recurring-setup-start');
        const recurringRepeatSelect = document.getElementById('appointment-recurring-repeat');
        const recurringCountSelect = document.getElementById('appointment-recurring-count');
        const recurringSetupSummary = document.getElementById('appointment-recurring-setup-summary');
        const recurringPreviewStart = document.getElementById('appointment-recurring-preview-start');
        const recurringPreviewList = document.getElementById('appointment-recurring-preview-list');

        if (!listPanel || !schedulePanel || !infoPanel) {
            return;
        }

        const WEEKDAY_NAMES = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

        const state = {
            title: '',
            duration: '',
            price: '',
            description: '',
            dateIso: '',
            dateLabel: '',
            time: '',
            viewMonth: new Date(),
            slots: [],
            multiSlotMode: false,
            recurringAnchorIso: '',
            recurringPreviewRows: [],
            lastTimeButton: null,
        };

        const titleTargets = document.querySelectorAll('[data-selected-title], [data-info-title]');
        const metaTargets = document.querySelectorAll('[data-selected-meta], [data-info-meta]');
        const descriptionTargets = document.querySelectorAll('[data-selected-description], [data-info-description]');
        const datetimeTarget = document.querySelector('[data-info-datetime]');

        function measureServiceDescToggle(p, btn) {
            if (!p || !btn) return;
            p.classList.remove('is-collapsed');
            void p.offsetWidth;
            p.classList.add('is-collapsed');
            var needsClamp = p.scrollHeight > p.clientHeight + 1;
            p.classList.remove('is-collapsed');
            if (needsClamp) {
                btn.style.display = '';
                btn.textContent = 'Show less';
                btn.setAttribute('aria-expanded', 'true');
            } else {
                btn.style.display = 'none';
                btn.setAttribute('aria-expanded', 'true');
            }
        }

        function refreshServiceDescMeasures() {
            document.querySelectorAll('.appointment-desc-toggle').forEach(function (btn) {
                var p = btn.previousElementSibling;
                if (p && p.classList.contains('appointment-service-desc')) {
                    measureServiceDescToggle(p, btn);
                }
            });
        }

        document.querySelector('.appointment-page')?.addEventListener('click', function (e) {
            var btn = e.target.closest('.appointment-desc-toggle');
            if (!btn) return;
            var p = btn.previousElementSibling;
            if (!p || !p.classList.contains('appointment-service-desc')) return;
            if (btn.style.display === 'none') return;
            p.classList.toggle('is-collapsed');
            var collapsed = p.classList.contains('is-collapsed');
            btn.textContent = collapsed ? 'Show more' : 'Show less';
            btn.setAttribute('aria-expanded', collapsed ? 'false' : 'true');
        });

        function scrollToBooking() {
            document.getElementById('select-appointment').scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        function showPanel(panel) {
            listPanel.classList.toggle('is-hidden', panel !== 'list');
            schedulePanel.classList.toggle('is-hidden', panel !== 'schedule');
            infoPanel.classList.toggle('is-hidden', panel !== 'info');
        }

        function parseIso(iso) {
            const parts = iso.split('-');
            return new Date(Number(parts[0]), Number(parts[1]) - 1, Number(parts[2]));
        }

        function formatIso(date) {
            const y = date.getFullYear();
            const m = String(date.getMonth() + 1).padStart(2, '0');
            const d = String(date.getDate()).padStart(2, '0');
            return y + '-' + m + '-' + d;
        }

        function ordinal(n) {
            const j = n % 10;
            const k = n % 100;
            if (j === 1 && k !== 11) return n + 'st';
            if (j === 2 && k !== 12) return n + 'nd';
            if (j === 3 && k !== 13) return n + 'rd';
            return n + 'th';
        }

        function formatSlotPretty(dateIso, time) {
            const d = parseIso(dateIso);
            const month = d.toLocaleDateString('en-AU', { month: 'long' });
            const year = d.getFullYear();
            const dayOrd = ordinal(d.getDate());
            return month + ' ' + dayOrd + ', ' + year + ' at ' + time;
        }

        function formatSlotLongLabel(dateIso, time) {
            const d = parseIso(dateIso);
            const w = d.toLocaleDateString('en-AU', { weekday: 'long' });
            return w + ', ' + formatSlotPretty(dateIso, time);
        }

        function slotKey(dateIso, time) {
            return dateIso + '|' + time;
        }

        function nextWeekdayOnOrAfter(iso, targetDow) {
            const d = parseIso(iso);
            d.setHours(12, 0, 0, 0);
            let guard = 0;
            while (d.getDay() !== targetDow && guard < 14) {
                d.setDate(d.getDate() + 1);
                guard++;
            }
            return d;
        }

        function generateWeeklySeries(firstDate, count) {
            const out = [];
            const d = new Date(firstDate.getTime());
            d.setHours(12, 0, 0, 0);
            for (let i = 0; i < count; i++) {
                const copy = new Date(d.getTime());
                out.push(copy);
                d.setDate(d.getDate() + 7);
            }
            return out;
        }

        function newSlotId() {
            if (typeof crypto !== 'undefined' && crypto.randomUUID) {
                return crypto.randomUUID();
            }
            return String(Date.now()) + '-' + String(Math.random()).slice(2, 10);
        }

        function addSlot(dateIso, dateLabel, time) {
            const key = slotKey(dateIso, time);
            if (state.slots.some(function (s) { return slotKey(s.dateIso, s.time) === key; })) {
                return false;
            }
            state.slots.push({
                id: newSlotId(),
                dateIso: dateIso,
                dateLabel: dateLabel,
                time: time,
            });
            return true;
        }

        function removeSlot(id) {
            state.slots = state.slots.filter(function (s) { return s.id !== id; });
            renderTimesAdded();
            updateScheduleActionsVisibility();
        }

        function renderTimesAdded() {
            if (!timesAddedList) return;
            timesAddedList.innerHTML = '';
            state.slots.forEach(function (slot) {
                const li = document.createElement('li');
                li.className = 'appointment-times-added-row';
                const label = document.createElement('span');
                label.textContent = formatSlotPretty(slot.dateIso, slot.time);
                const btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'appointment-times-added-remove';
                btn.textContent = 'Remove';
                btn.setAttribute('data-remove-slot', slot.id);
                li.appendChild(label);
                li.appendChild(btn);
                timesAddedList.appendChild(li);
            });
            timesAddedList.querySelectorAll('[data-remove-slot]').forEach(function (btn) {
                btn.addEventListener('click', function () {
                    removeSlot(btn.getAttribute('data-remove-slot'));
                });
            });
            updateTimeSlotAvailability();
        }

        function updateScheduleActionsVisibility() {
            const hasSlots = state.slots.length > 0;
            if (timesAddedBox) {
                timesAddedBox.classList.toggle('is-visible', hasSlots);
            }
            if (scheduleContinueWrap) {
                scheduleContinueWrap.classList.toggle('is-visible', hasSlots && state.multiSlotMode);
            }
        }

        function clearTimeSelection() {
            state.time = '';
            document.querySelectorAll('.appointment-time-btn.is-selected').forEach(function (el) {
                el.classList.remove('is-selected');
            });
        }

        function getSlotsForSubmit() {
            if (state.slots.length > 0) {
                return state.slots.map(function (s) {
                    return { dateIso: s.dateIso, time: s.time };
                });
            }
            if (state.dateIso && state.time) {
                return [{ dateIso: state.dateIso, time: state.time }];
            }
            return [];
        }

        function syncSummary() {
            titleTargets.forEach(function (el) { el.textContent = state.title; });
            metaTargets.forEach(function (el) { el.textContent = state.duration + ' @ ' + state.price; });
            descriptionTargets.forEach(function (el) { el.textContent = state.description; });
            if (datetimeTarget) {
                if (state.slots.length > 0) {
                    datetimeTarget.textContent = state.slots
                        .map(function (s) { return formatSlotPretty(s.dateIso, s.time); })
                        .join('\n');
                } else if (state.dateLabel && state.time) {
                    datetimeTarget.textContent = state.dateLabel + ' at ' + state.time;
                } else {
                    datetimeTarget.textContent = '';
                }
            }
        }

        function isWeekdayAvailable(date) {
            const day = date.getDay();
            return day >= 1 && day <= 5;
        }

        function isPast(date) {
            const today = new Date();
            today.setHours(0, 0, 0, 0);
            return date < today;
        }

        function isSelectedDateToday() {
            if (!state.dateIso) return false;
            const d = parseIso(state.dateIso);
            const t = new Date();
            return d.getFullYear() === t.getFullYear()
                && d.getMonth() === t.getMonth()
                && d.getDate() === t.getDate();
        }

        /** Start of slot on the selected local calendar day (12h AM/PM strings from Blade). */
        function slotStartOnSelectedDate(timeStr) {
            const parts = state.dateIso.split('-').map(Number);
            const m = String(timeStr).trim().match(/^(\d{1,2}):(\d{2})\s*(AM|PM)$/i);
            if (!m) return null;
            let hour = parseInt(m[1], 10);
            const minute = parseInt(m[2], 10);
            const ap = m[3].toUpperCase();
            if (ap === 'PM' && hour !== 12) hour += 12;
            if (ap === 'AM' && hour === 12) hour = 0;
            return new Date(parts[0], parts[1] - 1, parts[2], hour, minute, 0, 0);
        }

        var timeSlotRefreshInterval = null;

        function clearTimeSlotRefreshInterval() {
            if (timeSlotRefreshInterval) {
                clearInterval(timeSlotRefreshInterval);
                timeSlotRefreshInterval = null;
            }
        }

        function startTimeSlotRefreshInterval() {
            clearTimeSlotRefreshInterval();
            timeSlotRefreshInterval = setInterval(function () {
                if (schedulePanel.classList.contains('is-hidden')) return;
                updateTimeSlotAvailability();
            }, 30000);
        }

        /**
         * Disable slots that are in the past (when selected day is today) or already added for the selected date.
         */
        function updateTimeSlotAvailability() {
            document.querySelectorAll('.appointment-time-btn').forEach(function (btn) {
                const timeStr = (btn.dataset.time || btn.textContent.trim() || '').trim();
                let passed = false;
                if (state.dateIso && isSelectedDateToday()) {
                    const slotStart = slotStartOnSelectedDate(timeStr);
                    if (slotStart) {
                        passed = slotStart.getTime() < new Date().getTime();
                    }
                }
                const alreadyAdded = state.dateIso && state.slots.some(function (s) {
                    return s.dateIso === state.dateIso && (s.time || '').trim() === timeStr;
                });
                const disable = passed || alreadyAdded;
                btn.disabled = disable;
                btn.classList.toggle('is-time-passed', passed);
                btn.classList.toggle('is-already-added', alreadyAdded && !passed);
            });
            if (state.time) {
                const sel = document.querySelector('.appointment-time-btn.is-selected');
                if (sel && sel.disabled) {
                    clearTimeSelection();
                }
            }
        }

        function renderCalendar() {
            if (!calendarGrid) return;

            const year = state.viewMonth.getFullYear();
            const month = state.viewMonth.getMonth();
            const firstDay = new Date(year, month, 1);
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            let startOffset = firstDay.getDay() - 1;
            if (startOffset < 0) startOffset = 6;

            if (calendarMonthLabel) {
                calendarMonthLabel.textContent = firstDay.toLocaleDateString('en-AU', {
                    month: 'long',
                    year: 'numeric',
                });
            }

            calendarGrid.innerHTML = '';
            ['M', 'T', 'W', 'T', 'F', 'S', 'S'].forEach(function (day) {
                const weekday = document.createElement('div');
                weekday.className = 'appointment-weekday';
                weekday.textContent = day;
                calendarGrid.appendChild(weekday);
            });

            for (let i = 0; i < startOffset; i++) {
                const empty = document.createElement('div');
                empty.innerHTML = '<span class="appointment-date"></span>';
                calendarGrid.appendChild(empty);
            }

            const selectedParts = state.dateIso ? state.dateIso.split('-').map(Number) : null;
            const selectedInView = selectedParts && selectedParts[0] === year && selectedParts[1] === month + 1;

            for (let day = 1; day <= daysInMonth; day++) {
                const cellDate = new Date(year, month, day);
                const span = document.createElement('span');
                span.className = 'appointment-date';
                span.textContent = String(day);

                if (selectedInView && day === selectedParts[2]) {
                    span.classList.add('is-selected');
                }

                if (!isPast(cellDate) && isWeekdayAvailable(cellDate)) {
                    span.classList.add('is-available');
                    span.addEventListener('click', function () {
                        state.dateIso = formatIso(cellDate);
                        state.dateLabel = cellDate.toLocaleDateString('en-AU', {
                            weekday: 'long',
                            month: 'long',
                            day: 'numeric',
                            year: 'numeric',
                        });
                        if (dateLabel) dateLabel.textContent = state.dateLabel;
                        calendarGrid.querySelectorAll('.appointment-date.is-selected').forEach(function (el) {
                            el.classList.remove('is-selected');
                        });
                        span.classList.add('is-selected');
                        updateTimeSlotAvailability();
                    });
                }

                const cell = document.createElement('div');
                cell.appendChild(span);
                calendarGrid.appendChild(cell);
            }
            updateTimeSlotAvailability();
        }

        function openTimeMenu(button) {
            state.lastTimeButton = button;
            if (!timeMenu) return;
            timeMenu.classList.add('is-open');
            const rect = button.getBoundingClientRect();
            const wrap = button.closest('.appointment-time-wrap');
            const wrapRect = wrap ? wrap.getBoundingClientRect() : rect;
            timeMenu.style.top = (rect.bottom - wrapRect.top + 6) + 'px';
            timeMenu.style.left = (rect.left - wrapRect.left) + 'px';
        }

        function closeTimeMenu() {
            if (timeMenu) timeMenu.classList.remove('is-open');
        }

        function selectTime(button) {
            document.querySelectorAll('.appointment-time-btn.is-selected').forEach(function (el) {
                el.classList.remove('is-selected');
            });
            button.classList.add('is-selected');
            state.time = button.dataset.time || button.textContent.trim();
        }

        function openInfoPanel() {
            const submitSlots = getSlotsForSubmit();
            if (submitSlots.length === 0) {
                alert('Please select a date and time first.');
                return;
            }
            syncSummary();
            showPanel('info');
            scrollToBooking();
        }

        function openRecurringSetupModal() {
            if (!state.dateIso || !state.time) {
                alert('Please select a date and time first.');
                return;
            }
            state.recurringAnchorIso = state.dateIso;
            if (recurringSetupStart) {
                recurringSetupStart.textContent = formatSlotLongLabel(state.dateIso, state.time);
            }
            if (recurringRepeatSelect) {
                recurringRepeatSelect.innerHTML = '';
                for (let dow = 0; dow < 7; dow++) {
                    const opt = document.createElement('option');
                    opt.value = String(dow);
                    opt.textContent = 'Every ' + WEEKDAY_NAMES[dow];
                    recurringRepeatSelect.appendChild(opt);
                }
                recurringRepeatSelect.value = String(parseIso(state.dateIso).getDay());
            }
            if (recurringCountSelect) {
                recurringCountSelect.innerHTML = '';
                for (let n = 2; n <= 20; n++) {
                    const opt = document.createElement('option');
                    opt.value = String(n);
                    opt.textContent = String(n);
                    if (n === 8) opt.selected = true;
                    recurringCountSelect.appendChild(opt);
                }
            }
            updateRecurringSetupSummary();
            openModalLayer(modalRecurringSetup);
        }

        function getFirstRecurringDate() {
            const dow = Number(recurringRepeatSelect && recurringRepeatSelect.value);
            return nextWeekdayOnOrAfter(state.recurringAnchorIso, dow);
        }

        function updateRecurringSetupSummary() {
            if (!recurringSetupSummary || !recurringRepeatSelect || !recurringCountSelect) return;
            const first = getFirstRecurringDate();
            const count = parseInt(recurringCountSelect.value, 10) || 8;
            const repeatLabel = recurringRepeatSelect.options[recurringRepeatSelect.selectedIndex].textContent;
            const startPretty = formatSlotPretty(formatIso(first), state.time);
            recurringSetupSummary.innerHTML =
                'This will repeat ' + repeatLabel.toLowerCase() + ' at <strong>' + state.time +
                '</strong> starting <strong>' + startPretty + '</strong> for <strong>' + count + ' times.</strong>';
        }

        function buildRecurringPreviewRows() {
            const first = getFirstRecurringDate();
            const count = parseInt(recurringCountSelect && recurringCountSelect.value, 10) || 8;
            const series = generateWeeklySeries(first, count);
            return series.map(function (d) {
                const iso = formatIso(d);
                return {
                    dateIso: iso,
                    dateLabel: d.toLocaleDateString('en-AU', {
                        weekday: 'long',
                        month: 'long',
                        day: 'numeric',
                        year: 'numeric',
                    }),
                    time: state.time,
                };
            });
        }

        function openRecurringPreviewModal() {
            state.recurringPreviewRows = buildRecurringPreviewRows();
            if (recurringPreviewStart && state.recurringPreviewRows[0]) {
                recurringPreviewStart.textContent = formatSlotLongLabel(
                    state.recurringPreviewRows[0].dateIso,
                    state.recurringPreviewRows[0].time
                );
            }
            if (recurringPreviewList) {
                recurringPreviewList.innerHTML = '';
                state.recurringPreviewRows.forEach(function (row) {
                    const li = document.createElement('li');
                    li.textContent = formatSlotPretty(row.dateIso, row.time);
                    recurringPreviewList.appendChild(li);
                });
            }
            openModalLayer(modalRecurringPreview);
        }

        function openModalLayer(modalEl) {
            closeModal(modalRecurringSetup);
            closeModal(modalRecurringPreview);
            if (modalBackdrop) {
                modalBackdrop.classList.add('is-open');
                modalBackdrop.setAttribute('aria-hidden', 'false');
            }
            if (modalEl) modalEl.classList.add('is-open');
        }

        function closeModal(modalEl) {
            if (modalEl) modalEl.classList.remove('is-open');
        }

        function closeAllModals() {
            closeModal(modalRecurringSetup);
            closeModal(modalRecurringPreview);
            if (modalBackdrop) {
                modalBackdrop.classList.remove('is-open');
                modalBackdrop.setAttribute('aria-hidden', 'true');
            }
        }

        function applyRecurringSlotsToState() {
            state.slots = [];
            state.multiSlotMode = true;
            state.recurringPreviewRows.forEach(function (row) {
                addSlot(row.dateIso, row.dateLabel, row.time);
            });
            renderTimesAdded();
            updateScheduleActionsVisibility();
            closeAllModals();
            clearTimeSelection();
            scrollToBooking();
        }

        document.querySelectorAll('[data-appointment-book]').forEach(function (button) {
            button.addEventListener('click', function () {
                hideThankYouBanner();
                const meta = (button.dataset.meta || '').split('@');
                state.title = button.dataset.title || '';
                state.duration = meta[0] ? meta[0].trim() : '';
                state.price = meta[1] ? meta[1].trim() : '';
                state.description = button.dataset.description || '';
                state.dateIso = '';
                state.dateLabel = '';
                state.time = '';
                state.slots = [];
                state.multiSlotMode = false;
                state.recurringPreviewRows = [];
                syncSummary();
                refreshServiceDescMeasures();
                if (dateLabel) dateLabel.textContent = 'Select a date';
                renderTimesAdded();
                updateScheduleActionsVisibility();
                renderCalendar();
                showPanel('schedule');
                scrollToBooking();
                startTimeSlotRefreshInterval();
                updateTimeSlotAvailability();
            });
        });

        document.querySelectorAll('[data-appointment-back]').forEach(function (button) {
            button.addEventListener('click', function () {
                clearTimeSlotRefreshInterval();
                closeTimeMenu();
                closeAllModals();
                showPanel('list');
                scrollToBooking();
            });
        });

        document.querySelector('[data-appointment-back-schedule]')?.addEventListener('click', function () {
            closeTimeMenu();
            closeAllModals();
            showPanel('schedule');
            scrollToBooking();
            startTimeSlotRefreshInterval();
            updateTimeSlotAvailability();
        });

        document.querySelector('[data-appointment-close-schedule]')?.addEventListener('click', function () {
            clearTimeSlotRefreshInterval();
            closeTimeMenu();
            closeAllModals();
            showPanel('list');
            scrollToBooking();
        });

        document.querySelector('[data-appointment-close-info]')?.addEventListener('click', function () {
            showPanel('schedule');
            scrollToBooking();
            startTimeSlotRefreshInterval();
            updateTimeSlotAvailability();
        });

        document.querySelector('[data-calendar-prev]')?.addEventListener('click', function () {
            state.viewMonth = new Date(state.viewMonth.getFullYear(), state.viewMonth.getMonth() - 1, 1);
            renderCalendar();
        });

        document.querySelector('[data-calendar-next]')?.addEventListener('click', function () {
            state.viewMonth = new Date(state.viewMonth.getFullYear(), state.viewMonth.getMonth() + 1, 1);
            renderCalendar();
        });

        document.querySelectorAll('.appointment-time-btn').forEach(function (button) {
            button.addEventListener('click', function (event) {
                if (button.disabled) {
                    event.preventDefault();
                    event.stopPropagation();
                    return;
                }
                if (!state.dateIso) {
                    alert('Please select a date first.');
                    return;
                }
                selectTime(button);
                openTimeMenu(button);
                event.stopPropagation();
            });
        });

        if (timeMenu) {
            timeMenu.querySelectorAll('button[data-time-action]').forEach(function (button) {
                button.addEventListener('click', function () {
                    const action = button.dataset.timeAction;
                    closeTimeMenu();
                    if (action === 'continue') {
                        if (state.multiSlotMode) {
                            if (state.dateIso && state.time) {
                                if (!addSlot(state.dateIso, state.dateLabel, state.time)) {
                                    alert('This date and time is already in your list.');
                                } else {
                                    renderTimesAdded();
                                    updateScheduleActionsVisibility();
                                }
                            }
                        }
                        openInfoPanel();
                        return;
                    }
                    if (action === 'another') {
                        if (!state.dateIso || !state.time) {
                            alert('Please select a date and time first.');
                            return;
                        }
                        state.multiSlotMode = true;
                        addSlot(state.dateIso, state.dateLabel, state.time);
                        renderTimesAdded();
                        updateScheduleActionsVisibility();
                        clearTimeSelection();
                        return;
                    }
                    if (action === 'recurring') {
                        if (!state.dateIso || !state.time) {
                            alert('Please select a date and time first.');
                            return;
                        }
                        openRecurringSetupModal();
                    }
                });
            });
        }

        if (scheduleContinueBtn) {
            scheduleContinueBtn.addEventListener('click', function () {
                if (state.slots.length === 0) {
                    alert('Add at least one time to continue.');
                    return;
                }
                openInfoPanel();
            });
        }

        document.querySelector('[data-recurring-close]')?.addEventListener('click', closeAllModals);
        document.querySelector('[data-recurring-see-availability]')?.addEventListener('click', function () {
            openRecurringPreviewModal();
        });
        document.querySelector('[data-recurring-preview-back]')?.addEventListener('click', function () {
            closeModal(modalRecurringPreview);
            openModalLayer(modalRecurringSetup);
        });
        document.querySelector('[data-recurring-add-appointments]')?.addEventListener('click', function () {
            applyRecurringSlotsToState();
        });

        recurringRepeatSelect?.addEventListener('change', updateRecurringSetupSummary);
        recurringCountSelect?.addEventListener('change', updateRecurringSetupSummary);

        modalBackdrop?.addEventListener('click', closeAllModals);

        document.addEventListener('click', function () {
            closeTimeMenu();
        });

        if (timeMenu) {
            timeMenu.addEventListener('click', function (event) {
                event.stopPropagation();
            });
        }

        function resetBookingStateAfterSave() {
            clearTimeSlotRefreshInterval();
            state.title = '';
            state.duration = '';
            state.price = '';
            state.description = '';
            state.dateIso = '';
            state.dateLabel = '';
            state.time = '';
            state.slots = [];
            state.multiSlotMode = false;
            state.recurringPreviewRows = [];
            renderTimesAdded();
            updateScheduleActionsVisibility();
            if (dateLabel) dateLabel.textContent = 'Select a date';
            renderCalendar();
            syncSummary();
            refreshServiceDescMeasures();
        }

        function hideThankYouBanner() {
            const b = document.getElementById('appointment-thank-you-banner');
            if (b) b.classList.add('is-hidden');
        }

        function showThankYouBanner(message, bookingId) {
            const b = document.getElementById('appointment-thank-you-banner');
            const m = document.getElementById('appointment-thank-you-message');
            const r = document.getElementById('appointment-thank-you-ref');
            if (m) m.textContent = message || '';
            if (r) r.textContent = bookingId ? 'Reference number: #' + bookingId : '';
            if (b) b.classList.remove('is-hidden');
        }

        document.querySelectorAll('[data-thank-dismiss]').forEach(function (btn) {
            btn.addEventListener('click', function () {
                hideThankYouBanner();
            });
        });

        const formCard = form ? form.closest('.appointment-form-card') : null;
        const submitStatusEl = document.getElementById('appointment-submit-status');

        function setSubmitLoading(isLoading) {
            const submitBtn = document.getElementById('appointment-submit-btn');
            if (submitBtn) {
                submitBtn.disabled = isLoading;
                submitBtn.classList.toggle('is-loading', isLoading);
                submitBtn.setAttribute('aria-busy', isLoading ? 'true' : 'false');
            }
            if (formCard) {
                formCard.classList.toggle('is-submitting', isLoading);
            }
            if (submitStatusEl) {
                submitStatusEl.textContent = isLoading
                    ? 'Please wait — we are saving your appointment and sending a confirmation email to your inbox. This may take a few seconds.'
                    : '';
                submitStatusEl.classList.toggle('is-visible', isLoading);
            }
        }

        if (form) {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                document.querySelectorAll('.appointment-form-error').forEach(function (el) {
                    el.textContent = '';
                });

                const phoneCodeEl = document.getElementById('field-phone-code');
                const phoneCode = (phoneCodeEl && phoneCodeEl.value) ? phoneCodeEl.value.trim() : '+61';
                const phoneNumber = document.getElementById('field-phone')?.value || '';
                const rows = getSlotsForSubmit();
                if (rows.length === 0) {
                    alert('No appointment times selected. Please go back and choose a date and time.');
                    return;
                }

                const payload = {
                    appointment_title: state.title,
                    appointment_duration: state.duration,
                    appointment_price: state.price,
                    timezone: config.timezone || '',
                    first_name: document.getElementById('field-first-name')?.value || '',
                    last_name: document.getElementById('field-last-name')?.value || '',
                    phone: (phoneCode + ' ' + phoneNumber).trim(),
                    email: document.getElementById('field-email')?.value || '',
                    slots: rows.map(function (r) {
                        return { date: r.dateIso, time: r.time };
                    }),
                };

                setSubmitLoading(true);

                fetch(config.storeUrl, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': config.csrf,
                    },
                    body: JSON.stringify(payload),
                })
                    .then(function (response) {
                        return response.json().then(function (data) {
                            return { ok: response.ok, data: data };
                        });
                    })
                    .then(function (result) {
                        if (!result.ok) {
                            if (result.data.errors) {
                                Object.keys(result.data.errors).forEach(function (key) {
                                    const errorEl = document.querySelector('[data-error-for="' + key + '"]');
                                    if (errorEl) {
                                        errorEl.textContent = result.data.errors[key][0];
                                    }
                                });
                                const firstKey = Object.keys(result.data.errors)[0];
                                if (firstKey && firstKey.indexOf('slots') === 0) {
                                    const slotsErr = document.querySelector('[data-error-for="slots"]');
                                    if (slotsErr && !slotsErr.textContent) {
                                        slotsErr.textContent = result.data.errors[firstKey][0];
                                    }
                                }
                            }
                            throw new Error(result.data.message || 'Unable to save appointment.');
                        }

                        resetBookingStateAfterSave();
                        form.reset();
                        if (successBox) {
                            successBox.textContent = '';
                            successBox.classList.remove('is-visible');
                        }
                        showThankYouBanner(result.data.message, result.data.booking_id);
                        showPanel('list');
                        scrollToBooking();
                    })
                    .catch(function (error) {
                        alert(error.message || 'Something went wrong. Please try again.');
                    })
                    .finally(function () {
                        setSubmitLoading(false);
                    });
            });
        }

        renderCalendar();
        refreshServiceDescMeasures();
    });
})();
