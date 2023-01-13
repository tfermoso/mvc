<!-- Main content -->
<section class="content">
  <form action="" method="post">
    <label for="">Destinatario</label>
    <select name="usr_destino" id="">

      <?= $options ?>


    </select>
    <textarea name="mensaje" id="" cols="30" rows="5" placeholder="Mensaje...."></textarea>
    <input type="submit" value="Enviar">
  </form>
</section>
<!-- /.content -->