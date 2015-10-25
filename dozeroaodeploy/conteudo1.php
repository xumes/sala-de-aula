<?php include 'partials/top.php'; ?>

    <div class="container">

      <?php include 'partials/logo-menu.php'; ?>

      <div class="row">
        <div class="col-md-3" id="menu-left">
          <?php include 'partials/menu-aluno.php'; ?> 
        </div>
        <div class="col-md-9">
          <h1>Titulo do Conteúdo Restrito</h1>

          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris a turpis vitae nunc tristique rutrum quis a diam. Nullam in turpis at mi convallis dapibus rutrum id ante. Donec ultrices felis sed arcu congue, a molestie arcu pharetra. Maecenas ut eros posuere, bibendum nisl a, interdum metus. Morbi eu lorem nec nisl posuere egestas. Ut tincidunt aliquam eros non porttitor. Aenean elementum, felis a interdum malesuada, libero dui ornare massa, nec pharetra massa ligula non purus. Nulla nec lobortis urna. Sed leo ante, dignissim ut interdum vel, bibendum id urna. Vestibulum quis luctus felis, vitae accumsan dolor. Curabitur augue risus, commodo eget imperdiet molestie, congue non mi. Quisque aliquam convallis pharetra. Aliquam auctor ante vitae ullamcorper ultricies. In odio purus, tristique id erat et, consequat pellentesque urna. Nullam ultrices mauris erat, et dapibus risus auctor vitae. Aliquam interdum dui quis nisl scelerisque, ut dictum nisi mattis.</p>

          <p>Nulla a quam molestie, venenatis leo vel, fermentum nunc. Cras interdum fringilla diam eget laoreet. Duis mollis mi ac elit efficitur, ac pulvinar libero eleifend. Aliquam eget posuere arcu, quis sollicitudin leo. Aliquam ipsum purus, imperdiet id bibendum eget, malesuada venenatis nisl. Donec placerat rhoncus finibus. Proin quis tellus elit. Aliquam efficitur lectus a ligula eleifend congue. Mauris ut eros mi. Proin convallis ipsum dolor, id placerat nisl cursus ac. Vestibulum posuere volutpat bibendum.</p>

          <p style="margin-top: 80px;"><a href="<?php echo 'http://'.$_SERVER['HTTP_HOST']; ?>/conteudo.php" class="btn btn-default">Voltar para Lista</a></p>


        </div>
      </div>

      <?php include 'partials/footer.php'; ?>

    </div>

<?php include 'partials/bottom.php'; ?>