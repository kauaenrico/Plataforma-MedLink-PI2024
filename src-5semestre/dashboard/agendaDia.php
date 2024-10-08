<h5 class="text-center mb-4">Agenda do dia- <?php echo date("d/m/Y"); ?></h5>
                <ul class="list-group" style="font-size: 14px;">
                    <?php
                    $horario = strtotime("08:00");
                    $fim_do_dia = strtotime("17:00");
                    while ($horario <= $fim_do_dia) {
                        echo "<li class='list-group-item py-3'>";
                        echo "<strong>" . date("H:i", $horario) . "</strong>";
                        echo "<ul class='list-unstyled mb-0'>";
                        // Verificando e adicionando reuniões
                        switch ($horario) {
                            case strtotime("08:00"):
                                echo "<li class='meeting'>Atendimento com Pedro P. - Sala 1</li>";
                                break;
                            case strtotime("10:00"):
                                echo "<li class='meeting'>Atendimento com Carlos L. - Sala 3</li>";
                                break;
                            case strtotime("13:00"):
                                echo "<li class='meeting'>Atendimento com Fábio M. - Sala 7</li>";
                                break;
                            // Adicione mais casos conforme necessário
                        }
                        echo "</ul>";
                        echo "</li>";
                        // Avança para a próxima hora
                        $horario = strtotime("+1 hour", $horario);
                    }
                    ?>
                </ul>