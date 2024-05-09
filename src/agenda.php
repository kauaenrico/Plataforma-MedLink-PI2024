<link rel="stylesheet" href="assets/css/agenda_style.css">
<style>
/* Estilos para dispositivos móveis */
@media only screen and (max-width: 768px) {
  .cd-schedule__group {
    margin-bottom: 20px; /* Espaçamento entre os dias */
  }
  .cd-schedule__top-info {
    font-size: 1.2em; /* Ajuste do tamanho do texto do dia */
  }
}
</style>
<script>document.getElementsByTagName("html")[0].className += " js";</script>
<link rel="stylesheet" href="assets/css/agenda_style.css">
<div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
  <!-- Segunda-feira -->
  <div class="cd-schedule__group">
    <div class="cd-schedule__top-info"><span>Segunda-feira</span></div>
    <ul>
      <li class="cd-schedule__event">
        <a data-start="09:30" data-end="10:30" data-content="event-abs-circuit" data-event="event-1" href="#0">
          <em class="cd-schedule__name">Reunião terapeutas - Sala 7 </em>
        </a>
      </li>
      <li class="cd-schedule__event">
        <a data-start="11:00" data-end="12:30" data-content="event-rowing-workout" data-event="event-2" href="#0">
          <em class="cd-schedule__name">Sessão com Sergio B.</em>
        </a>
      </li>
      <li class="cd-schedule__event">
        <a data-start="14:00" data-end="15:15"  data-content="event-yoga-1" data-event="event-3" href="#0">
          <em class="cd-schedule__name">Sessão com Angélica F.</em>
        </a>
      </li>
    </ul>
  </div>

  <!-- Terça-feira -->
  <div class="cd-schedule__group">
    <div class="cd-schedule__top-info"><span>Terça-feira</span></div>
    <ul>
      <li class="cd-schedule__event">
        <a data-start="10:00" data-end="11:00"  data-content="event-rowing-workout" data-event="event-2" href="#0">
          <em class="cd-schedule__name">Rowing Workout</em>
        </a>
      </li>
      <li class="cd-schedule__event">
        <a data-start="11:30" data-end="13:00"  data-content="event-restorative-yoga" data-event="event-4" href="#0">
          <em class="cd-schedule__name">Restorative Yoga</em>
        </a>
      </li>
      <li class="cd-schedule__event">
        <a data-start="13:30" data-end="15:00" data-content="event-abs-circuit" data-event="event-1" href="#0">
          <em class="cd-schedule__name">Abs Circuit</em>
        </a>
      </li>
      <li class="cd-schedule__event">
        <a data-start="15:45" data-end="16:45"  data-content="event-yoga-1" data-event="event-3" href="#0">
          <em class="cd-schedule__name">Yoga Level 1</em>
        </a>
      </li>
    </ul>
  </div>

  <!-- Outros dias da semana -->

</div>

<div class="cd-schedule-modal">
  <header class="cd-schedule-modal__header">
    <div class="cd-schedule-modal__content">
      <span class="cd-schedule-modal__date"></span>
      <h3 class="cd-schedule-modal__name"></h3>
    </div>
    <div class="cd-schedule-modal__header-bg"></div>
  </header>
  <div class="cd-schedule-modal__body">
    <div class="cd-schedule-modal__event-info"></div>
    <div class="cd-schedule-modal__body-bg"></div>
  </div>
  <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
</div>

<div class="cd-schedule__cover-layer"></div>

<script src="assets/scripts/agenda_util.js"></script>
<script src="assets/scripts/agenda_main.js"></script>