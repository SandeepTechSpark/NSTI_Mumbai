
        // 1. लाइव क्लॉक का लॉजिक
        function updateClock() {
            const now = new Date();
            const dateOptions = { day: '2-digit', month: 'short', year: 'numeric' };
            document.getElementById('live-date').innerText = now.toLocaleDateString('en-IN', dateOptions);
            document.getElementById('live-time').innerText = now.toLocaleTimeString('en-IN', { hour12: true });
        }
        setInterval(updateClock, 1000);
        updateClock(); // पेज लोड होते ही तुरंत समय दिखाने के लिए