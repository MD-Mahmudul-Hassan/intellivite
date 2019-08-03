$(document).ready(function() {
    if($("#supplement-section").length) {
        $(".editSupplement").click(function() {
            $.ajax({
                type: "POST",
                data: {id: $(this).data('supplement-id')},
                url: '/admin/userSupplements/getUserSupplement'
            }).done(function(data) {
                var userSupplement = JSON.parse(data);
                $("#supplement-id").val(userSupplement.supplement_id);
                $("#dosage").val(userSupplement.dosage);
                $("#your-lifestyle").val(userSupplement.your_lifestyle);
                $("#your-goals").val(userSupplement.your_goals);
                $("#your-genetics").val(userSupplement.your_genetics);
                $("#is-active").attr('checked', Boolean(userSupplement.is_active));
                $("#id").val(userSupplement.id);
                $("#supplement-add-edit-form").attr('action', '/admin/userSupplements/edit/' + userSupplement.id);
            });
        });

        $("#addSupplement").click(function() {
            $("#supplement-id, #dosage, #your-lifestyle, #your-genetics, #your-goals").val('');
            $("#is-active").attr('checked', false);
            $("#supplement-add-edit-form").attr('action', '/admin/userSupplements/add');
        });
    }

    /*Define common table options*/
    var tableOptions = {
        searching: false,
        paging: false,
        info: false,
        columnDefs: [{
            orderable: false,
            targets: []
        }]
    };

    var columnIndex;
    /*Remove sort of actions column, which has index = 3 in the table(Index starts from 0,1,2..)*/
    if($("#supplement-type-table").length) {
        columnIndex = 3;
        tableOptions.columnDefs[0].targets.push(columnIndex);
        $('#supplement-type-table').DataTable(tableOptions);
    }

    /*Remove sort of actions column, which has index = 5 in the table(Index starts from 0,1,2..)*/
    if($("#users-list-table").length) {
        columnIndex = 5;
        tableOptions.columnDefs[0].targets.push(columnIndex);
        $('#users-list-table').DataTable(tableOptions);
    }

    /*Remove sort of actions column, which has index = 5 in the table(Index starts from 0,1,2..)*/
    if($("#menu-list-table").length) {
        columnIndex = 5;
        tableOptions.columnDefs[0].targets.push(columnIndex);
        $('#menu-list-table').DataTable(tableOptions);
    }

    /*Remove sort of actions column, which has index = 3 in the table(Index starts from 0,1,2..)*/
    if($("#supplement-list-table").length) {
        columnIndex = 3;
        tableOptions.columnDefs[0].targets.push(columnIndex);
        $('#supplement-list-table').DataTable(tableOptions);
    }

});

