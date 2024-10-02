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
        justify-content_page: center;
        align-items: center;
    }

    .spinner-border {
        width: 3rem;
        height: 3rem;
    }
</style>
</head>

<body>
    <div id="preloader_page">
        <div class="spinner-border text-primary" role="status">
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

</html>
