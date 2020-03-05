<script type="text/javascript">
   $(document).ready(function(){
    
    $('a').click(function(){
      $('a.active').each(function(){
        $(this).removeClass('active');
      });
      $(this).addClass('active');
    });
  });
</script>