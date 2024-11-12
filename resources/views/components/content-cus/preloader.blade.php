<!-- Preloader -->
<div id="preloader">
    <div class="spinner"></div>
</div>

<style>
    /* Preloader */
    #preloader {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    background-color: #fff;
    }

    .spinner {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 40px;
    height: 40px;
    margin: -20px 0 0 -20px;
    border: 4px solid #ff8e25;
    border-top: 4px solid transparent;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    }

    @keyframes spin {
    100% {
        transform: rotate(360deg);
    }
    }

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(window).on('load', function() {
    $('#preloader').fadeOut('slow', function() {
      $(this).remove();
    });
  });
</script>
