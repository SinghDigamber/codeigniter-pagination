<div id="userTable"> </div>

<script>
    reloadTable()

    function reloadTable() {
      $.ajax({
        url: "<?php echo site_url('CrudController/user_table'); ?>",
        beforeSend: function (f) {
          $('#userTable').html('Load Table ...');
        },
        success: function (data) {
          $('#userTable').html(data);
        }
      })
    }
</script>