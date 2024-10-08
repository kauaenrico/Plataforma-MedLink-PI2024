<style>
    .online-status .status-indicator {
        color: #28a745;
        /* Verde para online */
    }

    .offline-status .status-indicator {
        color: #dc3545;
        /* Vermelho para offline */
    }

    .status-text {
        margin-left: 10px;
    }
</style>
<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Profissionais online no momento</h5>
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex align-items-center online-status">
                    <i class="bi bi-circle-fill status-indicator"></i>
                    <span class="status-text">Dr. João Silva - Online</span>
                </li>
                <li class="list-group-item d-flex align-items-center online-status">
                    <i class="bi bi-circle-fill status-indicator"></i>
                    <span class="status-text">Dra. Maria Oliveira - Online</span>
                </li>
                <li class="list-group-item d-flex align-items-center offline-status">
                    <i class="bi bi-circle-fill status-indicator"></i>
                    <span class="status-text">Dr. Carlos Santos - Offline</span>
                </li>
                <li class="list-group-item d-flex align-items-center online-status">
                    <i class="bi bi-circle-fill status-indicator"></i>
                    <span class="status-text">Dra. Ana Pereira - Online</span>
                </li>
            </ul>
        </div>
    </div>
</div>