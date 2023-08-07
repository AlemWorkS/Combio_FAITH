$(function() {
    $("#js-emballage").jsGrid({
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
            // Le contrôleur de la grille
            loadData: function() {
                // Récupérer les données de la base de données via AJAX
                return $.ajax({
                    type: "POST",
                    url: "get_data_emballages.php", // Assurez-vous que l'URL pointe vers le bon emplacement de "get_data.php"
                    dataType: "json",
                });
            },
            insertItem: function(item) {
                // Insérer un nouvel élément dans la base de données via AJAX
                return $.ajax({
                    type: "POST",
                    url: "insert_data_emballages.php", // Remplacez "insert_data.php" par le fichier pour insérer des données si nécessaire
                    data: item,
                    dataType: "json",
                });
            },
            updateItem: function(item) {
                // Mettre à jour un élément dans la base de données via AJAX
                return $.ajax({
                    type: "POST",
                    url: "update_data_emballages.php", // Remplacez "update_data.php" par le fichier pour mettre à jour des données si nécessaire
                    data: item,
                    dataType: "json",
                });
            },
            deleteItem: function(item) {
                // Supprimer un élément de la base de données via AJAX
                return $.ajax({
                    type: "POST",
                    url: "delete_data_emballages.php", // Remplacez "delete_data.php" par le fichier pour supprimer des données si nécessaire
                    data: item,
                    dataType: "json",
                });
            }
            
        },
        fields: [{
            name: "IDEMBALLAGE",
            type: "text",
            width: 100,
            inserting:false
        },
        {
            name: "LIBEMBALLAGE",
            type: "text",
            width: 150
        },
        {
            type: "control"
        }
    ]
});
});
