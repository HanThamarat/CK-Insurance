<style>
    /* เพิ่ม Animation Effect */
    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    .animate-pulse-slow {
        animation: pulse 2s infinite;
    }

    /* Hover Effect สำหรับปุ่ม */
    button:hover {
        animation: pulse 2s infinite;
    }
</style>
