</div>
<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2023 School Management Syatem by <a href="https://www.facebook.com/Aimnoii555">Suksan</a></strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>


<script>
  // กำหนดเวลาที่ต้องการให้ข้อความหายไป (หน่วยเป็นมิลลิวินาที)
  const delay = 3000;

  // ฟังก์ชันที่จะถูกเรียกหลังจากเวลาที่กำหนดผ่านไป
  function hideText() {
    // ซ่อนข้อความที่ต้องการ (ตัวอย่างนี้จะแสดงวิธีการซ่อนข้อความ)
    document.getElementById('myText').style.display = 'none';
  }

  // จับเวลาและเรียกใช้ฟังก์ชัน hideText() หลังจากผ่านไปเวลาที่กำหนด
  setTimeout(hideText, delay);
</script>


<script>
  function active() {
    var path = window.location.href;
    // console.log('path ' + path);

    $(".nav-link").each(function() {
      var href = $(this).attr('href');
      // console.log('href ' + decodeURIComponent(href))
      if (path === decodeURIComponent(href)) {

        $(this).addClass('active');
        var parent = $(this).closest('.has-treeview');
        parent.addClass('menu-open');
        $(parent).find('.nav-link').first().addClass('active');
        console.log(parent);
      }
    })
  }

  active()
</script>

<!-- Subject -->

<script>
  jQuery(document).ready(function() {
    jQuery('#class').change(function() {
      alert(jQuery(this).val());

      jQuery.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: {
          'class_id': jQuery(this).val()
        },
        dataType: 'json',
        success: function(response) {
          console.log(response)

          if (response.count > 0) {
            jQuery('#section-container').show()
            jQuery('#section').html(response.options)


          } else {
            jQuery('#section-container').show()
          }

            jQuery('#section').html(response.options)

      

        }
      })
    })
  })
</script>

</body>

</html>