<div class="card-header text-white text-right" style="background-color:#0080FF">
    <div id="menubar_footer">
        <?php //echo $this->lang->line('common_welcome')." $user_info->first_name $user_info->last_name! | "; ?>
        <?php echo " $user_info->last_name "; ?>
        <?php //echo anchor("home/logout",$this->lang->line("common_logout")); ?>
        <?php $sair="<img src='images/menubar/logout.png'/>";
        echo anchor("home/logout", $sair); ?>
    </div>

    <!-- <div id="menubar_date"> -->
        <?php

        // $dia = date('d'); // Dia do mês com 2 digitos
        // $s = date('w'); // Representação numérica dos dias da semana.
        // $m = date('n'); // Repressentação numérica sem o zero.
        // $ano = date('Y');
        
        // $semana = array(0=>"Domingo", 1=>"Segunda", 2=>"Terça", 3=>"Quarta", 4=>"Quinta", 5=>"Sexta", 6=>"Sábado");
        // $mes = array(1=>"Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembo");
        
        // echo "<p>$semana[$s], $dia de $mes[$m] de  $ano</p>";
        
        ?>

    <!-- </div> -->
</div>
