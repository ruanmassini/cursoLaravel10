
function deleteProductPg(routeUrl, ID) {   
    if (confirm('Deseja excluir?')) {
        $.ajax({
            url: routeUrl,
            method: 'delete',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                id: ID
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000
                });
            }
        }).done(function (data) {
            $.unblockUI();

            if (data.success == true) {
                window.location.reload();
            } else {
                alert('Não foi possível excluir');
            }

        }).fail(function (data) {

            $.unblockUI();

            alert('Não foi possível excluir');

        })
    }
}