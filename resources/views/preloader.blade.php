<style>
    #preloader_page {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ffffff;
        z-index: 9999;
        display: flex;
        justify-content: center; /* จัดให้อยู่ตรงกลาง */
        align-items: center;
    }

    .spinner-border {
        width: 3rem;
        height: 3rem;
        border: 0.4em solid #ff6f00; /* กำหนดขอบให้เป็นสีส้ม */
        border-top-color: transparent; /* ขอบด้านบนเป็นโปร่งใส */
        border-radius: 50%; /* ทำให้เป็นวงกลม */
        animation: spin 1s linear infinite; /* เพิ่มการหมุน */
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }
</style>

<body>
    <div id="preloader_page">
        <div class="spinner-border" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // เมื่อหน้าถูกโหลดเต็มที่แล้วจะรอ 3 วินาทีก่อนแสดงเนื้อหา
            $(window).on('load', function() {
                setTimeout(function() {
                    $('#preloader_page').fadeOut('slow', function() {
                        $('#content_page').fadeIn('slow');
                    });
                }, 100);
            });
        });
    </script>
</body>


