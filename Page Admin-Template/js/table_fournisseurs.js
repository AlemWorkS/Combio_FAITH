
$(function() {
    var table = "fournisseur";
    $("#js-grid").jsGrid({
        
        height: "500px",
        width: "100%",
        editing: true,
        inserting: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 15,
        pageButtonCount: 5,
        deleteConfirm: "Do you really want to delete the client?",
        controller: {
            loadData: function() {
                return $.ajax({
                    type: "POST",
                    url: "get_data_fournisseurs.php",
                    dataType: "json",
                    error: function(xhr, status, error) {
                        console.error("Error loading data:", error);
                    }
                });
            },
            insertItem: function(item) {
                return $.ajax({
                    type: "POST",
                    url: "insert_data_fournisseurs.php",
                    data: item,
                    dataType: "json",
                    error: function(xhr, status, error) {
                        console.error("Error inserting item:", error);
                    }
                });
            },
            updateItem: function(item) {
                return $.ajax({
                    type: "POST",
                    url: "update_data_fournisseurs.php",
                    data: item,
                    dataType: "json",
                    error: function(xhr, status, error) {
                        console.error("Error updating item:", error);
                    }
                });
            },
            deleteItem: function(item) {
                return $.ajax({
                    type: "POST",
                    url: "delete_data_fournisseurs.php",
                    data: item,
                    dataType: "json",
                    error: function(xhr, status, error) {
                        console.error("Error deleting item:", error);
                    }
                });
            }        
        },
        fields: [{
            name: "IDFOURNISSEUR",
            type: "text",
            width: 150,

        },
        {
            name: "IDPAYS",
            type: "text",
            width: 100
        },
        {
            name: "NOMFOURNISSEUR",
            type: "text",
            width: 200
        },
        {
            name: "PRENOMFOURNISSEUR",
            type: "text",
            width: 200
        },
        
        {
            type: "control"
        }
    ]
});
});