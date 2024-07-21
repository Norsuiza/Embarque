$(document).ready(function() {
    // Función para cargar clientes
    function loadClients(ProducerId) {
        $.getJSON(`/clients/${ProducerId}`, function(clients) {
            let $clientSelect = $('#client');
            $clientSelect.empty().append('<option value="">Selecciona un cliente</option>');
            $.each(clients, function(_, client) {
                $clientSelect.append(
                    $('<option>', {
                        value: client.id,       
                        text: client.name,     
                    })
                );
            });
        });
    }

    // Productor al que peternece la vista
    loadClients(2);

function loadShipments(clientId, producerId) {
    grid.updateConfig({
        server: {
            url: `/shipments/${clientId}/${producerId}`,
            then: data => {
                console.log('Datos de embarques recibidos:', data);
                return data.map(item => [
                    item.id,
                    item.shipment_number,
                    item.shipment_date,
                    item.shipment_hour,
                    item.contract,
                    item.partner_id,
                    item.season_id,
                    item.driver,
                    item.transport,
                    item.refrigerated_box,
                    item.pallets_total,
                    item.download_flag
                ]);
            }
        }
    }).forceRender();
}

    const grid = new gridjs.Grid({
        search: true,
        sort: true,
        pagination: {
            limit: 6
        },
        columns: [
            "Folio", "Numero de embarque", "Fecha", "Hora", "Contract", "Partner", "Temporada", "Conductor", "Transporte", "N. Caja refrigerada", "Total de pallets", "Estatus de descarga"
        ],
        data: [] // Datos iniciales vacíos
    }).render(document.getElementById('wrapper'));

    // Actualiza el grid cuando se selecciona un cliente
    $('#client').change(function() {
        let clientId = $(this).val();
        let producerId = 2; // El productor especificado en el código
        if (clientId) {
            loadShipments(clientId, producerId);
        } else {
            grid.updateConfig({ data: [] }).forceRender();
        }
    });

});
