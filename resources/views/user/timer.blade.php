<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timer</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-500 flex items-center justify-center h-screen">
    <div x-data="timer" class="text-center">
        <!-- Timer Display -->
        <div class="relative w-64 h-64 mx-auto">
            <canvas id="progressCircle" width="256" height="256" class="absolute"></canvas>
            <div class="absolute inset-0 flex items-center justify-center">
                <span class="text-4xl font-bold text-white" x-text="timerText"></span>
            </div>
        </div>

        <!-- Controls -->
        <div class="mt-6">
            <button
                @click="togglePause"
                class="px-4 py-2 bg-white text-green-400 rounded shadow hover:bg-gray-200">
                <span>
                    <svg x-show="isPaused" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-6.586 4.12a1 1 0 01-1.488-.874v-8.492a1 1 0 011.488-.874l6.586 4.12a1 1 0 010 1.748z" />
                    </svg>
                    <svg x-show="!isPaused" fill="#10b981" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="26px" viewBox="-122.03 -122.03 521.40 521.40" xml:space="preserve" stroke="#10b981" stroke-width="0.00277338"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path d="M14.22,45.665v186.013c0,25.223,16.711,45.66,37.327,45.66c20.618,0,37.339-20.438,37.339-45.66V45.665 c0-25.211-16.721-45.657-37.339-45.657C30.931,0,14.22,20.454,14.22,45.665z"></path> <path d="M225.78,0c-20.614,0-37.325,20.446-37.325,45.657V231.67c0,25.223,16.711,45.652,37.325,45.652s37.338-20.43,37.338-45.652 V45.665C263.109,20.454,246.394,0,225.78,0z"></path> </g> </g></svg>
                </span>
            </button>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('timer', () => ({
                duration: {{ $task->dailyTask->durasi * 60 }}, // Durasi dari database (dalam detik)
                remaining: {{ $task->dailyTask->durasi * 60 }},
                isPaused: false,
                interval: null,
                chart: null,

                get timerText() {
                    return this.remaining > 0 ? Math.floor(this.remaining / 60) + ':' + (this.remaining % 60).toString().padStart(2, '0') : 'Selesai';
                },

                init() {
                    this.setupChart();
                    this.startTimer();
                },

                setupChart() {
                    const ctx = document.getElementById('progressCircle').getContext('2d');
                    this.chart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            datasets: [{
                                data: [100, 0],
                                backgroundColor: ['#ffffff', '#3b82f6'],
                                borderWidth: 0
                            }]
                        },
                        options: {
                            responsive: false,
                            cutout: '80%',
                            tooltips: { enabled: false },
                            hover: { mode: null },
                        }
                    });
                },

                updateChart() {
                    const percentage = (this.remaining / this.duration) * 100;
                    this.chart.data.datasets[0].data = [percentage, 100 - percentage];
                    this.chart.update();
                },

                startTimer() {
                    this.interval = setInterval(() => {
                        if (!this.isPaused && this.remaining > 0) {
                            this.remaining--;
                            this.updateChart();
                        }

                        if (this.remaining <= 0) {
                            clearInterval(this.interval);
                            this.completeTask(); // Tandai tugas sebagai selesai
                        }
                    }, 1000);
                },

                togglePause() {
                    this.isPaused = !this.isPaused;
                },

                completeTask() {
                    fetch('{{ route('tugas-harian.update', $task->id) }}', {
                        method: 'PATCH',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json',
                        }
                    })
                    .then(() => {
                        window.location.href = '{{ route('tugas-harian.index') }}'; // Redirect ke halaman tugas
                    });
                }
            }));
        });
    </script>

</body>
</html>
