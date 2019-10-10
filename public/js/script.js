'use strict';

window.addEventListener('load', function () {

    let alert = document.querySelector('.alert');

    if (alert) {
        setTimeout(() => alert.remove(), 10000);
    }

    $('#example').DataTable( {
        searching: false,
        info: false,
        pageLength: 3,
        "columnDefs": [ {
            "orderable": false
        } ]
    });

});